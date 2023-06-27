<?php
include("objetoperfil.php");


// Verifique se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    // O usuário não está logado, redirecione para a página de login
    header('Location: index.php');
    exit();
}
// Recupere os dados do usuário da sessão
$usuario = $_SESSION['usuario'];

?>



<!DOCTYPE html>

<html>

<link rel="stylesheet" type="text/css" href="style.css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
</head>

  <header class="header"> <!--cabeçalho da página, tudo em verde-->
    <a class="header-name" rel="next" href="../index.php">Be-UT</a>
      <nav class="header-menu">
          <a class="header-menu-item">Promoções</a>
          <a class="header-menu-item">Recentes</a>
          <a class="header-menu-item">Carrinho</a>
          <a class="header-menu-item">Configurações</a>
          <a class="header-menu-item" href="../logout.php">Sair</a>
      </nav>
  </header>
 <!--cabeçalho acaba aqui-->

<!-- aqui começa a parte da foto, bio e respostas da pessoa-->

<main class="main">
  <body> 
  <section class="main-section1"> <!--primeira divisão da página-->
    <h1 class="text-section1">Informações do perfil</h1>
  <div>
    <img class="div-profilepic" src="https://novacatclinic.com/wp-content/uploads/2013/08/Cat_using_computer.jpg" width="200px" height="200px">
  
    </br></br>Biografia</br><input type="text" class="input-bio" placeholder="Digite aqui sua biografia" class="bio-text"></br></input> <!-- mudar para o que a pessoa escrever -->
</br>
    <p class="form-text"><b>Suas Respostas</b></p> <!-- respostas do formulario -->
    <p class="info-text">Qual o seu tipo de cabelo? Ondulado</p> <!--respostas do formulário-->
    <p class="info-text">Qual o seu tipo de pele? Oleosa</p> <!-- puxar as respostas do formulario -->
    <p class="info-text">O seu cabelo tem quimica? Sim</p>
    <p class="info-text">Prefere produtos veganos: Sim</p>
    <p class="info-text">Mostra produtos de origem animal?: Não</p>

  
    </br>
  
  </section>
  <section class="main-section2"> <!--segunda divisão da página-->
  <button class="feed-button" type="button" name="feed">Ir para feed</button> <!--botao que leva para o feed de produtos-->
    </br>
    </br>
  <button class="back-button" type="button" name="voltar">Voltar</button> <!--botao que leva para o index-->
 
</div>

</section>
</body>

<div2> 
<b class="info-conta">Informações pessoais</b> <!-- nome, email, telefone, etc -->
  <p class="info-conta">Nome: <?php echo $nome; ?></p></p>
  <p class="info-conta">Email: <?php echo $usuario->ds_email; ?></p></p>
  <p class="info-conta">Idade: <?php echo $idade; ?></p></p>
  <p class="info-conta">Sexo: <?php echo $sexo;?></p></p>
  
</div2>

</main>

<footer>
  <p>Be-Ut.com</p>
</footer>

</html>

<?php


