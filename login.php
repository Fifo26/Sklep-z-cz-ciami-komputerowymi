
<?php
    session_start();
    include "header.php";


if(isset($_SESSION['blad']))
echo $_SESSION['blad'];

## jeżeli jesteś zalogowany automatycznie przekieruje cie do strony głównej, nie da sie logować 2 razy 
 if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']== true))
{
	header('Location: index.php');
	exit();
}   
require_once "connect.php";




?>


<body>
    <div class="login-clean">
        <form action="logowanie.php" method="post">
            <h2 class="sr-only">Login</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i>
                <h2 class="text-center"><strong>Zaloguj</strong></h2>
            </div>
            <div class="form-group"><input class="form-control" type="text" name="loginl" id="loginl" placeholder="Login"></div>
            
            <div class="form-group"><input class="form-control" type="password" name="passl" placeholder="Hasło" id="passl"></div>
            
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Zaloguj</button></div><a href="rejestracja.php" class="forgot">Nie masz konta? Zarejestruj!</a></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>