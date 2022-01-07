<?php
    $page_title = "BeerLocator";
    require "../LAYOUT/header.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="../CSS/login.css">


<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="Username"/>
      <input type="text" placeholder="Email"/>
      <input type="password" placeholder="Password"/>
      <input type="password" placeholder="Conferma password"/>
      <button>Registrati</button>
      <p class="message">Giá registrato? <a href="#">Accedi!</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="email"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Non hai un account? <a href="#">Registrati!</a></p>
    </form>
  </div>
</div>


<script>
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>
<?php
    require "../LAYOUT/footer.php";
?>