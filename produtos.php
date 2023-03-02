<header class="header"> <!--cabeçalho da página, tudo em verde-->
        <a class="header-name" href="index.php">Be-UT</a>
      <nav class="header-menu">
          <a class="header-menu-item" href="produtos.php">Produtos</a>
          <a class="header-menu-item">Recentes</a>
          <a class="header-menu-item">Carrinho</a>
          <a class="header-menu-item">Configurações</a>
        <button class="logout-button" type="button" name="logout" style="color: #000;">Sign in/out</button>
      </nav>
  </header>

<head> <!--começo do código para recomendação de produtos -->
    <title>Produtos Recomendados para você</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1 style="font-size:50;font-family: inconsolata; color: #ffff; text-align: center;"></br>Feed</br></br></h1> 
    </header>
    <main>
         </style>
        <div class="gallery-container"> 
            <figure>
            <img class="gallery-items" id="xampu" src="https://i.imgur.com/f7pFWbh.png" width="100" height="100"> <br> <!--imagem do produto-->
            <figcaption> <!--legenda da imagem-->
                Kit Shampoo & Condicionador <br>
                ELSEVE <br>
                Sem restrições de cabelo <br>
                R$24,90
            </figcaption>
            <div class="buttonimg">
                <button>Comprar!</button>
            </div>    
            </figure>

            <figure>
            <img class="gallery-items" id="gel" src="https://i.imgur.com/CdetyJ3.jpg" width="100" height="100"> <br>
            <figcaption>
                Gel de limpeza profunda <br>
                LÁ-ROCHE <br>
                Para peles oleosas <br>
                R$32,90
            </figcaption>
            <div class="buttonimg">
                <button>Comprar!</button>
            </div>    
            </figure>

            <figure>
            <img class="gallery-items" id="pomada" src="https://i.imgur.com/GUrs1Wn.jpg" width="100" height="100"> <br>
            <figcaption>
                Hidratante Facial Restaurador <br>
                BEPANTOL <br>
                Sem restrições de pele <br>
                R$31,70
            </figcaption>
            <div class="buttonimg">
                <button>Comprar!</button>
            </div>    
            </figure>
            <figure>
            <img class="gallery-items" id="creme" src="https://i.imgur.com/d9Bh2IL.png" width="100" height="100"> <br>
            <figcaption>
                Creme de limpeza <br>
                AVÈNE <br>
                Para peles acneicas e oleosas <br>
                R$64,90 
            </figcaption>
            <div class="buttonimg">
                <button>Comprar!</button>
            </div>    
            </figure>
            <figure>
            <img class="gallery-items" id="hidratante" src="https://i.imgur.com/GSdfaj2.jpg" width="100" height="100"> <br>
            <figcaption>
                Hidratante Corporal <br>
                LOVE NATURE <br>
                Sem restrições de pele <br>
                R$22,50 
            </figcaption>
            <div class="buttonimg">
                <button>Comprar!</button>
            </div>    
            </figure>
        </div> 
    </main>    
</body>
<tr>
<footer>
  <p>Be-Ut.com</p>
</footer>
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
header h1{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 3rem;
    font-weight: 900;
    color: #000;
}
.gallery-container{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    gap: 2vw;
    padding: 0 1vw;
}
.gallery-items{
    width: 200px;
    height: 200px;
    border:10px solid #fff;
    box-shadow: 5px 5px 5px #000;
}
.gallery-items img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
figcaption{
    display: block;
    color: white;
    font-style: inconsolata;
    padding: 10px;
    text-align: center;
    background-color: #7678FF;
}
.buttonimg {
    position: absolute;
	padding: 16px;
	width: 200px;
    align: center;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    background-color: #7678FF;
}
        
.button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;

}

.button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;

}

.button:hover span {
  padding-right: 25px;

}

.button:hover span:after {
  opacity: 1;
  right: 0;

}

.voltar{
    color: #0059ff;
    font-size: 15px;
    text-align: center;
    vertical-align:top;
}

body {
    background-color: #7678FF;
}

.header { 
  background-color: #6D3BFF;
  font-family: 'Inconsolata', monospace;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding: 22px;
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
  padding: 3px;
  background-color: #6D3BFF;
  color: white;
  position: relative; bottom: -420px;
  font-family: inconsolata;
}
</style>


<body>