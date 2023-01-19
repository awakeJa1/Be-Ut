<?php
include "conn.php";
session_start();

$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();
$row=$exibir->fetch();
$nome=$row['nm_perfil'];

echo"<h2>Bem vindo, ".$nome."!"."</br></h2>"; 
echo "</br>";

echo "Cadastro realizado com sucesso!";
echo "<br/>";
echo "<br/>"; //começo do logout
echo "Deseja fazer logout?"; echo "<br/>";
echo "<a href='login.php?aviso'>Logout</a>";
echo "<br/>";

if(isset($_GET['aviso'])){
    echo "<br/>";
    echo "Deseja realmente sair?<br/>";
    echo "<a href='login.php?logout'>Sim</a>";
    echo "  "."  ";
    echo "<a href='login.php'>Não</a>";
}
if(isset($_GET['logout'])){
    session_destroy();
    header('location:inicio.php');
}

include "conn.php";
echo "<br/> ";


?>
<h3>Dados Cadastrais:</h3>
<table border="1">
  
    <th>Nome</th>
<?php
$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();

if($exibir->rowCount()==0){
    echo "Não há registros";
}else{
    $row=$exibir->fetch();
        
        echo "<td>".$row['nm_perfil']."</td>"."<br/>";
    }////////////////////fim do logout
        ?>

</table>

</table>

<table border="1">
    <tr>
    <th>Idade</th>
    
<?php
$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();

if($exibir->rowCount()==0){
    echo "Não há registros";
}else{
    $row=$exibir->fetch();
        
        echo "<td>".$row['ds_idade']."</td>";
    }
        ?>
</table>

    <table border="1">
    <tr>
    <th>Email</th>
    
<?php
$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();

if($exibir->rowCount()==0){
    echo "Não há registros";
}else{
    $row=$exibir->fetch();
    echo "<td>".$row['ds_email']."</td>";
    }
        ?>
</table>

<table border="1">
    <tr>
    <th>Sexo</th>
    
<?php
$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();

if($exibir->rowCount()==0){
    echo "Não há registros";
}else{
    $row=$exibir->fetch();
        
        echo "<td>".$row['ds_sexo']."</td>";
       
    }
        ?>
</table>


<table border="1">
    <tr>
    <th>Tipo  de cabelo</th>
    
<?php
$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();

if($exibir->rowCount()==0){
    echo "Não há registros";
}else{
    $row=$exibir->fetch();
        
        echo "<td>".$row['ds_cabelo']."</td>";
       
    }
        ?>
</table>

<table border="1">
    <tr>
    <th>Tipo de pele</th>
    
<?php
$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();

if($exibir->rowCount()==0){
    echo "Não há registros";
}else{
    $row=$exibir->fetch();
        
        echo "<td>".$row['ds_pele']."</td>";
    }
        ?>
</table>

<table border="1">
    <tr>
    <th>Teste em animais</th>
    
<?php
$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();

if($exibir->rowCount()==0){
    echo "Não há registros";
}else{
    $row=$exibir->fetch();
        
        echo "<td>".$row['ds_teste']."</td>";
    }
        ?>
</table>

<table border="1">
    <tr>
    <th>Origem animal</th>
    
<?php
$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();

if($exibir->rowCount()==0){
    echo "Não há registros";
}else{
    $row=$exibir->fetch();
        
        echo "<td>".$row['ds_origem']."</td>";
    }
        ?>
</table>

<table border="1">
    <tr>
    <th>Possui química</th>
    
<?php
$exibir=$conn->prepare('SELECT * FROM `perfil` ORDER BY id_perfil DESC');
$exibir->execute();

if($exibir->rowCount()==0){
    echo "Não há registros";
}else{
    $row=$exibir->fetch();
        
        echo "<td>".$row['ds_quimica']."</td>";
    }
        ?>
</table>

 


<?php
echo " <br/> ";echo " <br/> ";
echo  "<b>$nome, você gostaria de ver as suas indicações de produtos?</b>";
?>
</br>
</br>
<form action="produtos.php" method="POST">
    <input type="submit" name="gravar" value="Ver produtos"/>
</form>


