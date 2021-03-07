<?php
    include "header.php";
?>
    <main>
        <div class="prawy">
            <h2>Nie masz konta? Zarejestruj się!</h2>
            <form id="rej" action="rejestracja.php" method="POST">
                <p>Imię:</p>
                <input type="text" name="imie" id="imie">
                <br>
                <p>e-mail:</p>
                <input type="text" name="mail" id="mail">
                <br>
                <hr>
                <p><b>Dane logowania</b></p>
                <p>Login:</p>
                <input type="text" name="login" id="login">
                <br>
                <p>Hasło</p>
                <input type="password" name="pass" id="pass">
                <br>
                <p>Powtórz hasło</p>
                <input type="password" name="passcheck" id="passch">
                <br><br>
                <input type="checkbox" name="reg" id="reg" checked> Akceptuję <a href="" target="_blank">regulamin</a> sklepu
                <br><br>
                <input type="reset" value="WYCZYŚĆ"> <input type="submit" value="REJESTRUJ">
            </form>
        </div>
        <div class="lewy">
            <h2>Zaloguj się</h2>
            <form action="logowanie.php" method="post">
                <p>Login:</p>
                <input type="text" name="loginl" id="loginl">
                <br>
                <p>Hasło</p>
                <input type="password" name="passl" id="passl">
                <br><br>
                <input type="reset" value="WYCZYŚĆ"> <input type="submit" value="ZALOGUJ">
            </form>
        </div>
        
        <?php
?>
    </main>
<?php
include "footer.php";
?>