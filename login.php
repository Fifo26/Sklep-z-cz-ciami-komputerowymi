
<?php
    session_start();
    include "header.php";


if(isset($_SESSION['blad']))
echo $_SESSION['blad'];

## jeżeli jesteś zalogowany automatycznie przekieruje cie do strony głównej, nie da sie logować 2 razy 
 if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']== true)){
	header('Location: index.php');
	exit();
}   
require_once "connect.php";



include "navibar.php";
?>


<body>
    <div class="login-clean">
        <form action="login_action.php" method="post">
            <h2 class="sr-only">Login</h2>
            <!-- <div class="image-holder"><img src="img/rejestracja.jpg" alt=""></div> -->
            <div class="form-group"><input class="form-control" type="text" name="loginl" id="loginl" placeholder="Login"></div>
            
            <div class="form-group"><input class="form-control" type="password" name="passl" placeholder="Hasło" id="passl"></div>
            
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Zaloguj</button></div><a href="rejestracja.php" class="forgot">Nie masz konta? Zarejestruj się!</a></form>
    </div>
<?php
    include "footer.php";
?>