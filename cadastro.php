<head> 
  <title>Faça seu cadastro</title>
  <body>
</head>
<body>
<h1>Be-UT</h1>
<h3>(Beauty User Targeting)</h3>
<h3>Faça seu cadastro para indicação de produtos:</h3>

</body>

<form action="index.php" method="POST">
    Digite seu nome: <input type="text" name="nome"/></br>
    Digite sua idade: <input type="number" name="idade"/></br>
    Qual seu sexo? <select name="sexo">
        <option value="Não respondido">   </option>
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
        <option value="Outro">Outro</option>
</select> </br>
    Digite seu email: <input type="email" name="email"/></br>
</br>
    Crie usuário: <input type="text" name="usuario"/><br/>
    Crie senha: <input type="password" name="senha"/><br/>

    <body>
        <h3>Responda a este questionário:</h3>
    Escolha o tipo de cabelo: <select name="tpcabelo" required>
        <option value="Não respondido">    </option>
        <option value="Liso">Liso</option>
        <option value="Ondulado">Ondulado</option>
        <option value="Cacheado">Cacheado</option>
        <option value="Crespo">Crespo</option>
</select>
    </br>
    Escolha o tipo de pele: <select name="tppele">
        <option value="Não respondido">      </option>
        <option value="Normal">Normal</option>
        <option value="Seca">Seca</option>
        <option value="Mista">Mista</option>
        <option value="Oleosa">Oleosa</option>
</select>
    </br>
    Utiliza produtos testados em animais: <select name="origem">
        <option value="Não respondido">   </option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
</select>
</br>

    Utiliza produtos de origem animal: <select name="teste">
        <option value="Não respondido">   </option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
        </select>
</br>

    Seu cabelo já passou por alguma química? <select name="quimica">
        <option value="Não respondido">   </option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
</select>
</select>
<br/>
<br/>
<input type="submit" name="gravar" value="Gravar"/>
</form>  
<?php
include "conn.php";

if(isset($_POST['gravar'])){
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $sexo=$_POST['sexo'];
    $email=$_POST['email'];
    $login=$_POST['usuario'];
    $senha=$_POST['senha'];

    $cabelo=$_POST['tpcabelo'];
    $pele=$_POST['tppele'];
    $origem=$_POST['origem'];
    $teste=$_POST['teste'];
    $quimica=$_POST['quimica'];
    include "conn.php";
    $grava=$conn->prepare('INSERT INTO `perfil`(`id_perfil`, `nm_perfil`, `ds_idade`, `ds_sexo`, `ds_email`,
    `ds_login`, `ds_senha`, `ds_cabelo`, `ds_pele`, `ds_teste`, `ds_origem`, `ds_quimica`)
     VALUES (NULL,:pnm_perfil, :pds_idade,:pds_sexo,:pds_email,:pds_login,:pds_senha,:pds_cabelo,
     :pdspele,:pds_teste,:pds_origem,:pds_quimica);');



    $grava->bindValue(':pnm_perfil',$nome);
    $grava->bindValue(':pds_idade',$idade);
    $grava->bindValue(':pds_sexo',$sexo);
    $grava->bindValue(':pds_email',$email);
    $grava->bindValue(':pds_login',$login);
    $grava->bindValue(':pds_senha',$senha);
    $grava->bindValue(':pds_cabelo',$cabelo);
    $grava->bindValue(':pdspele',$pele);
    $grava->bindValue(':pds_teste',$teste);
    $grava->bindValue(':pds_origem',$origem);
    $grava->bindValue(':pds_quimica',$quimica);
    $grava->execute();

    header('location:login.php');
    
}
?>