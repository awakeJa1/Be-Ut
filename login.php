<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
</head>

  <header class="header"> <!--cabeçalho da página, tudo em verde-->
    <a class="header-name" rel="next" href="index.php">Be-UT</a>
      <nav class="header-menu">
          <a class="header-menu-item">Promoções</a>
          <a class="header-menu-item">Recentes</a>
          <a class="header-menu-item">Carrinho</a>
          <a class="header-menu-item">Configurações</a>
        <button class="logout-button" type="button" name="logout">Sair</button>
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
  <p class="info-conta">Nome: Nome</p>
  <p class="info-conta">Email: Email@email.com 1</p>
  <p class="info-conta">Idade: XX</p>
  <p class="info-conta">Sexo: Feminino/Masculino</p>
  <p class="info-conta">Telefone:(41) 8002-8922</p>
</div2>

</main>

<div>
  <a class="twitter-timeline" href="https://twitter.com/AvonInsider?ref_src=twsrc%5Etfw" width="700" height="900">Tweets by AvonInsider</a> 
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

<style>

div{ /* estiliza TODAS as divs */
  height: 500px;
  background-color: #7678FF;
  margin: 20px;
}
body { /* pagina inteira */
  font-size: 100%;
  background-color: #7678FF;
  margin: 0px;
  align-items: center;
  color: #ffff;
}

.header { /*parte de cima*/ 
  padding: 18px;
  margin: 0px;
  background-color: #6D3BFF;
  font-family: 'Inconsolata', monospace;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
}

.header-name { /* apenas o Be-UT */
  font-family: 'Inconsolata', monospace;
  color: #FFFFFF;
  font-size: 15px;
}

.header-menu { /* caixinha q engloba os 4 menus */
  display: flex;
  gap: 25px;
}

.header-menu-item { /* configuração individual dos 4 menus */
  font-family: 'Inconsolata', monospace;
  color: #FFFFFF;
  font-size: 15px;
}

.main { /* estiliza tudo dentro da classe main */ 
}

.main-section1{ /* estiliza tudo dentro da primeira section*/
  display: flex;
  justify-content: space-around;
  align-items: left;
  flex-direction: column;
}

.text-section1{ /* estiliza apenas o texto da primeira section*/
  font-family :'incolsolata', monospace;
  margin: 0px;
  align-items: center;
  text-align: center;
  margin: 10px;
}

.feed-button{
  position: relative; left: -280px; top: -300px;
}

.back-button{
  position: relative; left: -205px ;  top: -356px;
}

.info-conta{
  display: flex;
  position: relative; left: 1500px; top: -570px; 
  max-width: 300px;
  color: #ffff;
}
.div-profilepic{ /*estiliza apenas a imagem de perfil*/
  border: 3px solid #000000;
  height: 100px 100px;
}

.input-bio{
  width: 300px;
  height: 90px;
}

.main-section2 { /* estiliza tudo que está dentro da segunda section: botoes, formulario e info da conta*/
  display: flex;
  justify-content: space-around;
  flex-direction: column;
  flex-wrap: wrap-reverse;
  align-items: flex-start;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: #6D3BFF;
  color: white;
  position: relative; bottom: -28px;
  font-family: inconsolata;
}
.footer-text{ /* estiliza só o all rights deserved */
    display: flex;
    flex-direction: row;
}
.footer-item{ /* estiliza so os 4 aaaaaaa */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.twitter-timeline{
  display: flex;
  position:relative; top: -800px; left: 550px;
}
</style>

<footer>
  <p>Be-Ut.com</p>
</footer>

