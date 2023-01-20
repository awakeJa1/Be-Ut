<head> <!--começo do código para recomendação de produtos -->
    <title>Produtos Recomendados para você</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Produtos recomendados para você</h1> 
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
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #eee; 
 }
header{
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
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
    background-color: #eee;
    color: black;
    font-style: italic;
    padding: 10px;
    text-align: center;
    background-color: #92a8d1;
}
.buttonimg {
    position: absolute;
	padding: 16px;
	width: 200px;
    align: center;
    background-color: #eee;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    background-color: #92a8d1;
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
    background-color: #92a8d1;
    color:#fff;
}

</style>

<form action="index.php" method="POST">
<input type="submit" name="voltar" value="voltar" class="voltar"/>

<body>