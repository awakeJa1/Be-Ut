<?php
// Inicie a sessão
session_start();

// Dados de conexão com o banco de dados
include("conn.php");

// Função para validar o login
function validarLogin($email, $senha, $conn) {
    // Consulta SQL para buscar o usuário com o email e senha fornecidos
    $consulta = $conn->prepare('SELECT id_usuario, ds_email FROM usuario WHERE ds_email = :email AND ds_senha = :senha');
    $consulta->bindParam(':email', $email);
    $consulta->bindParam(':senha', $senha);
    $consulta->execute();

    $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Login válido, retorna o objeto Usuario
        return new Usuario($usuario['id_usuario'], $usuario['ds_email']);
    }

    // Login inválido, retorna null
    return null;
}

// Classe Usuario
class Usuario {
    public $id_usuario;
    public $ds_email;

    public function __construct($id_usuario, $ds_email) {
        $this->id_usuario = $id_usuario;
        $this->ds_email = $ds_email;
    }
}

// Verifique se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Exibindo os valores das variáveis
    echo "Email: " . $email . "<br>";
    echo "Senha: " . $senha . "<br>";

    $usuario = validarLogin($email, $senha, $conn);

    if ($usuario) {
        // Login válido, inicie a sessão para o usuário
        $_SESSION['usuario'] = $usuario;

        // Redirecione para a página de perfil
        header('Location: userprofile/perfil.php');
        exit();
    } else {
        // Login inválido, exiba uma mensagem de erro
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (isset($erro)) { ?>
        <p><?php echo $erro; ?></p>
    <?php } ?>
</body>
</html>
