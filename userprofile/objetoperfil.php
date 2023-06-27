<?php
include("../conn.php");
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    // Redirecionar para a página de login, ou exibir uma mensagem de erro, caso necessário
    header('Location: login.php');
    exit();
}

$id_usuario = $_SESSION['usuario']->id_usuario;

class Usuario {
    public $id_usuario;
    public $ds_email;
    public $ds_senha;
    public $nome;
    public $idade;
    public $sexo;

    public function __construct($id_usuario, $ds_email, $ds_senha, $nome, $idade, $sexo) {
        $this->id_usuario = $id_usuario;
        $this->ds_email = $ds_email;
        $this->ds_senha = $ds_senha;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        
        // Tornar as propriedades variáveis globais
        global $nome, $idade, $sexo;
        $nome = $this->nome;
        $idade = $this->idade;
        $sexo = $this->sexo;
    }
}

function obterUsuario($id_usuario, $conn) {
    $consulta = $conn->prepare('SELECT id_usuario, ds_email, ds_senha, nome, idade, sexo FROM usuario WHERE id_usuario = :id_usuario');
    $consulta->bindParam(':id_usuario', $id_usuario);
    $consulta->execute();

    $dados = $consulta->fetch(PDO::FETCH_ASSOC);

    $usuario = new Usuario($dados['id_usuario'], $dados['ds_email'], $dados['ds_senha'], $dados['nome'], $dados['idade'], $dados['sexo']);

    return $usuario;
}

$usuario = obterUsuario($id_usuario, $conn);
?>
