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

    <input type="submit" name="register"
    value="Continue"/>
</form>

<style>
body {
    background-color: #fff;
    text-align: center;
    vertical-align:top;
    color:#000;
}
</style>


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
