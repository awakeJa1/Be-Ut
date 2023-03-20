<!--Começo do código. Introdução ao usuário sobre a marca-->
<head>
  <title>Be-Ut</title>
  <h1>Be-UT</h1>
  <h3>Bem-vindo!</h3>
  <body>
</head>
<body>
<style>

body {
    background-color: #92a8d1;
    text-align: center;
    vertical-align:top;
    color:#fff;
}

</style>
<h3>your best buddy in cosmetics recomendation</h3>
<!--Final da introdução-->

<!--Início do cadastro-->

<!--questionario- para o perfil-->

<form action="inicio.php" method="post">
    <input type="text" name="user"
    placeholder="Login"/>
    <br/></br>
    <input type="password" name="senha"
    placeholder="Senha"/>
    <br/></br>
    <input type="submit" value="Logar"
    name="logar"/>
</form>
<!--fim do questionario-->

<!--aqui eu n sei oq faz pq foi a isa q fez kk-->
<?php
include 'conn.php';
if(isset($_POST['logar'])){
$user=$_POST['user'];
$senha=$_POST['senha'];
$login=$conn->prepare('SELECT * FROM 
`perfil` WHERE `ds_login`= :puser
AND `ds_senha`=:psenha;');
$login->bindValue(':puser',$user);
$login->bindValue(':psenha',$senha);
$login->execute();
if($login->rowCount()==0){
    echo "Login ou senha inválido!";
}else{
    session_start();
    $row=$login->fetch();
    echo $row['id_perfil'];
    $_SESSION['user']=$row['id_perfil'];
    header('location:produtos.php');
}
}
?>
<h3>First time here?</h3>
Register now! <?php echo "<a href='cadastro.php?novo'>cadastro</a>";?>
</body>
<!--fim disso-->