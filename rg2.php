<header class="header"> <!--cabeçalho da página, tudo em verde-->
    <a class="header-name" href="index.php">Be-UT</a>
      <nav class="header-menu">
          <a class="header-menu-item" href="produtos.php">Produtos</a>
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
<h1 style="font-family: inconsolata; color: #ffff; font-size: 20px">
Be-UT </br></br> 
(Beauty User Targeting) </br></br> 
Faça seu cadastro para indicação de produtos:</h1>
</body>


<form action="login.php" method="POST" style="font-family: inconsolata; color: #ffff;">
    Digite seu nome: <input type="text" name="nome"/></br></br>
    Digite sua idade: <input type="number" name="idade"/></br></br>
    Qual seu sexo? <select name="sexo">
        <option value="Não respondido">   </option>
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
        <option value="Outro">Outro</option>
</select> </br></br>
    Digite seu email: <input type="email" name="email"/></br>
    <body>
        <h3>Responda a este questionário:</h3>
    Escolha o tipo de cabelo: <select name="tpcabelo" required>
        <option value="Não respondido">    </option>
        <option value="Liso">Liso</option>
        <option value="Ondulado">Ondulado</option>
        <option value="Cacheado">Cacheado</option>
        <option value="Crespo">Crespo</option>
</select>
    </br></br>
    Escolha o tipo de pele: <select name="tppele">
        <option value="Não respondido">      </option>
        <option value="Normal">Normal</option>
        <option value="Seca">Seca</option>
        <option value="Mista">Mista</option>
        <option value="Oleosa">Oleosa</option>
</select>
    </br></br>
    Utiliza produtos testados em animais: <select name="origem">
        <option value="Não respondido">   </option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
</select>
</br></br>

    Utiliza produtos de origem animal: <select name="teste">
        <option value="Não respondido">   </option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
        </select>
</br></br>

    Seu cabelo já passou por alguma química? <select name="quimica">
        <option value="Não respondido">   </option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
</select>
<br/>
<br/>
<input type="submit" name="gravar" value="Continue"/>
</form>

<style>
body {
    background-color: #7678FF;
    text-align: center;
    vertical-align:top;
    color:#000;
    margin: 0px;
}

.header { 
  background-color: #6D3BFF;
  font-family: 'Inconsolata', monospace;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding: 18px;
}

.header-name { /* apenas o Be-UT */
  font-family: 'Inconsolata', monospace;
  color: #fff;
  font-size: 15px;
}

.header-menu { /* caixinha q engloba os 4 menus */
  display: flex;
  gap: 25px;
}

.header-menu-item { /* configuração individual dos 4 menus */
  font-family: 'Inconsolata', monospace;
  color: #ffff;
  font-size: 15px;
}

footer {
  text-align: center;
  font-family: inconsolata;
  padding: 3px;
  background-color: #6D3BFF;
  color: white;
  position: relative; bottom: -298px;
}
</style>

<footer>
  <p>Be-Ut.com</p>
</footer>


<!--abaixo é o começo da gravação de dados no banco-->
<?php

include "conn.php";
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
