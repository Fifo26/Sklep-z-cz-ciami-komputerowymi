<?php
    include "header.php";
    include "navibar.php";
?>

<body>
     <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background-image:url('img/rejestracja.jpg');"></div>
            <form id="rej" action="rejestracja_action.php" method="post">
                <h2 class="text-center"><strong>Rejestruje się</strong></h2>
                
                <div class="form-group"><input class="form-control" type="text" name="imie" id="imie" placeholder="Imię"></div>
                    
                <div class="form-group"><input class="form-control" type="text" name="mail" id="mail"placeholder="Email"></div>
                
                
                <div class="form-group"><input class="form-control" type="text" name="login" id="login" placeholder="login"></div>

                <div class="form-group"><input class="form-control" type="password" name="pass" id="pass" placeholder="Hasło"></div>
                
                <div class="form-group"><input class="form-control" type="password" name="passcheck" id="passch" placeholder="Powtórz hasło"></div>
                
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" name="reg" type="checkbox">Zgadzam się na warunki regulaminu.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Zarejestruj!</button></div><a href="login.php" class="already">Masz już konto? Zaloguj się tutaj.</a></form>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>