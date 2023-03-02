<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
</head>

<body>
  <header class="header"> <!--cabeçalho da página, tudo em verde-->
    <a class="header-name" href="https://vandal-us.s3.amazonaws.com/spree/products/76330/original/open-uri20181204-14-1e683p8.jpg">Be-UT</a>
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
    
<section class="main-section1"> <!--primeira divisão da página-->
  <h1 class="text-section1">Informações do perfil</h1>
    <div>
      <img class="div-profilepic" src="https://cdn.discordapp.com/attachments/742780153146376213/1070043899239870464/26.png" width="100px" height="100px" alt="imagem">
    
  
        <p class="bio-text">bio</p> <!-- mudar para o que a pessoa escrever -->
    <p class="form-text">respostas</p> <!-- mudar para o que a pessoa escrever -->
  
  </br>
</div>
</section>

<section class="main-section2"> <!--segunda divisão da página-->
<div>
  <button class="feed-button" type="button" name="feed">Ir para feed</button> <!--botao que leva para o feed de produtos-->
    </br>
    </br>
  <button class="back-button" type="button" name="voltar">Voltar</button> <!--botao que leva para o index-->
 

  <p class="info-text">Pergunta 1: Resposta 1</p> <!--respostas do formulário-->
  <p class="info-text">Pergunta 2: Resposta 2</p> <!-- mudar para o que a pessoa escolhe no formulario -->
  <p class="info-text">Pergunta 3: Resposta 3</p>
  <p class="info-text">Pergunta 4: Resposta 4</p>
 
</div>
</section>


</main>

  <footer class="footer"> <!--rodapé da página-->
     <p class="footer-text">All Rights Reserved©</p> 
          <a class="footer-item">Qualquer coisa</a>
          <a class="footer-item">Qualquer coisa</a>
          <a class="footer-item">Qualquer coisa</a>
          <a class="footer-item">Qualquer coisa</a>
  </footer>
<style>

div{ /* estiliza TODAS as divs */
  background-color: none;
  width: 500px;
  height: 500px;
  margin: 8px;
  
}
body { /* pagina inteira */
  font-size: 100%;
  background: color #FFFFFF;
  margin: 8px;
}

.header { /*parte verde*/ 
  padding: 8px;
  background-color: #93cbf5;
  font-family: 'Inconsolata', monospace;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
}

.header-name { /* apenas o Be-UT */
  font-family: 'Inconsolata', monospace;
  color: #000000;
  font-size: 15px;
}

.header-menu { /* caixinha q engloba os 4 menus */
  display: flex;
  gap: 25px;
}

.header-menu-item { /* configuração individual dos 4 menus */
  font-family: 'Inconsolata', monospace;
  color: #000000;
  font-size: 15px;
}

.main { /* estiliza tudo dentro da classe main */ 
}

.main-section1{ /* estiliza tudo dentro da primeira section*/
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction: column;

}

.text-section1{ /* estiliza apenas o texto da primeira section*/
  font-family :'incolsolata', monospace;
  margin: 10px;
}

.div-profilepic{ /*estiliza apenas a imagem dentro da section*/
  border: 3px solid #000000;
  height: 20px 20px;
}

.main-section2 { /* estiliza tudo que está dentro da segunda section*/
  display: flex;
  justify-content: space-around;
  flex-direction: column;
  flex-wrap: wrap-reverse;
  position: relative; left: 10px; top: -520px;
  align-items: left;
}

.footer{ /* estiliza o rodapé da página, tudo em amarelo*/
  background: white;
  justify-content: space-around;
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

</style>
  
</body>

