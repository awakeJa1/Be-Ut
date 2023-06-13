
<!DOCTYPE html>

<html>

<link rel="stylesheet" type="text/css" href="style.css">

<header class="header"> 
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
    
  </head>
  
  <body>
    <h1>Be-UT <br>
    (Beauty User Targeting) <br>
  Faça seu cadastro para indicação de produtos:</h1>

    <form action="../login.php" method="POST">
      <label for="nome">Digite seu nome:</label>
      <input type="text" id="nome" name="nome" required><br><br>

      <label for="idade">Digite sua idade:</label>
      <input type="number" id="idade" name="idade" required><br><br>

      <label for="sexo">Qual seu sexo?</label>
      <select id="sexo" name="sexo" required>
        <option value=""></option>
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
        <option value="Outro">Outro</option>
      </select><br><br>

      <label for="tpcabelo">Qual o seu tipo de cabelo?</label>
      <select id="tpcabelo" name="tpcabelo" required>
        <option value=""></option>
        <option value="Liso">Liso</option>
        <option value="Ondulado">Ondulado</option>
        <option value="Cacheado">Cacheado</option>  
        <option value="Crespo">Crespo</option>
      </select><br><br>
      <label for="tpcabelo">O seu cabelo tem quimica?</label>
      <select id="tpcabelo" name="tpcabelo" required>
        <option value=""></option>
        <option value="Sim">sim</option>
        <option value="Não">Não</option>
      </select><br><br>

  <label for="tppele">Qual o seu tipo de pele?</label>
  <select id="tppele" name="tppele" required>
    <option value=""></option>
    <option value="Seca">Seca</option>
    <option value="Normal">Normal</option>
    <option value="Mista">Mista</option>
    <option value="Oleosa">Oleosa</option>
  </select>
  <br/>
  <br/>

  <label for="veganos">Prefere produtos veganos?</label>
    <select id="veganos" name="veganos" required>
      <option value=""></option>
      <option value="Sim">Sim</option>
      <option value="Não">Não</option>
    </select><br><br>

    <label for="origemAnimal">Mostrar produtos de origem animal?</label>
    <select id="origemAnimal" name="origemAnimal" required>
      <option value=""></option>
      <option value="Sim">Sim</option>
      <option value="Não">Não</option>
    </select><br><br>
  <input type="submit"  rel="next" href="../userprofile/perfil.php" name="gravar" value="Continue"/>
</form>

<footer>
  <p>Be-UT.com</p>
</footer>
  </body>
</html>

