<?php 
include("../conn.php");
?>

<!DOCTYPE html>

<html>

<link rel="stylesheet" type="text/css" href="style.css">

<header class="header"> <!--cabeçalho da página, tudo em verde-->
    <a class="header-name" href="../index.php">Be-UT</a>
      <nav class="header-menu">
          <a class="header-menu-item" href="../produtos.php">Produtos</a>
          <a class="header-menu-item">Recentes</a>
          <a class="header-menu-item">Carrinho</a>
          <a class="header-menu-item">Configurações</a>
        <button class="logout-button" type="button" name="logout">Sair</button>
      </nav>
  </header>
<head> 
  <title>Faça seu cadastro</title>
  <body>
</head>
<body>
<h1>Be-UT</h1>
<h3>(Beauty User Targeting)</h3>
<h3>Faça seu cadastro para indicação de produtos:</h3>
</body>

<form action="rg2.php" method="POST" style="font-family: inconsolata;">

    <input type="text" name="email"
    placeholder="email"/><br/><br/>

    <input type="text" name="senha"
    placeholder="senha"/><br/><br/>

</form>

<div class="row">
    <p style="font-size: 20px; font-family: inconsolata;">
</br>
        Or login with:
</br>
    </p>
        <img src="https://i.imgur.com/m1sOs3y.png" alt="Snow" width="50" height="50">
        <img src="https://i.imgur.com/PcDFuo8.png" alt="Forest" width="50" height="50">
</div>

<footer>
  <p>Be-Ut.com</p>
</footer>

</html>

<!--abaixo é o começo da gravação de dados no banco-->
<?php

if(isset($_POST['grava'])){
    $senha=$_POST['senha'];
    $email=$_POST['email'];
    $grava=$conn->prepare('INSERT 
    INTO `usuario` (`id_usuario`, 
    `ds_senha`, `ds_email`) VALUES 
    (NULL, :pemail , :psenha);');
    $grava->bindValue(':psenha',$senha);
    $grava->bindValue(':pemail',$email);
    $grava->execute();
}

?>