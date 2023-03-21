<header class="header"> <!--cabeçalho da página, tudo em verde-->
    <p class="header-name">Be-UT</p>
      <nav class="header-menu">
          <a class="header-menu-item" href="produtos.php">Produtos</a>
          <a class="header-menu-item">Recentes</a>
          <a class="header-menu-item">Carrinho</a>
          <a class="header-menu-item">Configurações</a>
        <button class="logout-button" type="button" name="logout" style="color: #000;">Sign in/out</button>
      </nav>
  </header>

<h1>
  <b href="" style="font-family: inconsolata;" class="typewrite" data-period="2000" data-type='[ "Welcome to: be-ut.","ようこそ: be-ut." ]'>
    <span class="wrap"></span>
</b>
<tag1 style="font-size:18;font-family: inconsolata">
</br> </br>your best buddy in cosmetics recomendation
</tag1>
</h1>

<style>

.register{
    color: #000;
    font-size: 15px;
}

.login{
    color: #000;
    font-size: 15px;
}

body {
    background-color: #7678FF;
    text-align: center;
    vertical-align:top;
    color:#000;
    margin: 0px;
}
* { color:#fff; text-decoration: none;}

.header { 
  background-color: #6D3BFF;
  font-family: 'Inconsolata', monospace;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding: 8px;
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
  position: relative; bottom: -466px;
  font-family: inconsolata;
}
</style>

<script>
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };

</script>

<form action="login.php" method="post">
    <input type="text" name="user"
    placeholder="Login"/>
    <br/></br>
    <input type="password" name="senha"
    placeholder="Senha"/>
    <br/></br>
    <form action="login.php" method="POST">
    </br>
    <input type="submit" name="login" value="login" class="login"/>
</form> 

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
<p style="font-family: inconsolata; color: #ffff; "> First time here? </br></br> Register now! </p>

<form action="cadastro.php" method="POST">
</br>
<input type="submit" name="register" value="register" class="register"/>
</form>  
</body>

<footer>
  <p>Be-Ut.com</p>
</footer>