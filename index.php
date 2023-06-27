<!DOCTYPE html>

<html>

<link rel="stylesheet" type="text/css" href="style.css">

<header class="header"> <!--cabeçalho da página, tudo em verde-->
    <p class="header-name">Be-UT</p>
      <nav class="header-menu">
          <a class="header-menu-item" href="produtos.php">Produtos</a>
          <a class="header-menu-item">Recentes</a>
          <a class="header-menu-item">Carrinho</a>
          <a class="header-menu-item">Configurações</a>
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
    <input type="email" name="email" placeholder="Email" required/>
    <br/><br/>
    <input type="password" name="senha" placeholder="Senha" required/>
    <br/><br/>
    <input type="submit" name="login" value="Login" class="login"/>
</form>

</form>
</html>
<!--fim do questionario-->


<p style="font-family: inconsolata; color: #ffff; "> First time here? </br></br> Register now! </p>

<form action="/Be-Ut-main/formulario/cadastro.php" method="POST">
</br>
<input type="submit" name="register" value="register" class="register"/>
</form>  
</body>

<footer>
  <p>Be-Ut.com</p>
</footer>