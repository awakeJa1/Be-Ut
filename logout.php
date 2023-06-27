<?php
session_start();

// Destruir todas as variáveis de sessão
$_SESSION = array();

// Se desejar destruir completamente a sessão, remova também o cookie de sessão
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destruir a sessão
session_destroy();

// Redirecionar para a página de login ou qualquer outra página desejada
header('Location: index.php');
exit();
?>
