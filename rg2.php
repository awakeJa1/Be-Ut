<header class="header"> 
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
    
  </head>
  
  <body>
    <h1>Be-UT <br>
    (Beauty User Targeting) <br>
  Faça seu cadastro para indicação de produtos:</h1>

    <form action="login.php" method="POST">
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
  <input type="submit"  rel="next" href="login.php" name="gravar" value="Continue"/>
</form>

<footer>
  <p>Be-UT.com</p>
</footer>
  </body>
</html>
<style>
      body {
        background-color: #7678FF;
        text-align: center;
        color: #000;
        font-family: Times new roman, sans-serif;
        vertical-align:top;
        margin: 0px;
      }
      .header { 
  background-color: #6D3BFF ;
  font-family: 'Inconsolata', monospace;
  color: #ffffff;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding: 18px;
}

      form {
        display: inline-block;
        margin-top: 50px;
        text-align: left;
        background-color: #ffffff;
        padding: 20px;  
        border-radius: 10px;
      }

      h1 {
        font-size: 24px;
        margin-top: 0;
      }

      input[type="submit"] {
        background-color: #6D3BFF;
        color: #ffffff;
        border: none;
        padding: 10px 30px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #4D2598;
      }

      footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #6D3BFF ;
        color: #ffffff;
        text-align: center;
        padding: 10px;
      }
    </style>