<?php
    include "header.php";
?>
<main> 
    <?php
        $ifok=0;
        if(!empty($_POST["imie"])){
            $imie=$_POST["imie"];
        }
        else {
            $imie=NULL;
            echo "<br>Nie podałeś imienia!!<br>";
            $ifok++;
        }
        if(!empty($_POST['mail'])){
            $mail=$_POST['mail'];
        }
        else {
            $mail=NULL;
            echo "Nie podałeś e-maila!!<br>";
            $ifok++;
        }
        if(!empty($_POST['login'])){
            $login=$_POST['login'];
        }
        else {
            $login=NULL;
            echo "Nie podałeś loginu!!<br>";
            $ifok++;
        }
        if(!empty($_POST['pass'])){
            $haslo=$_POST['pass'];
        }
        else {
            $haslo=NULL;
            echo "Nie podałeś hasła!!<br>";
            $ifok++;
        }
        if(!empty($_POST['passcheck'])){
            $hasloch=$_POST['passcheck'];
        }
        else {
            $hasloch=NULL;
            echo "Podane hasła się różnią!!<br>";
            $ifok++;
        }
        $polaczenie=mysqli_connect("localhost", "root", "", "czesci_komp");
        if($polaczenie->connect_error){
            die("Connection failed:".$polaczenie->connect_error);
            echo "coś nie działa :(";
        }
        else if($ifok==0){
            if($haslo==$hasloch){
                if(isset($_POST['reg'])){
                $wstawu="insert into klienci values ('$imie','$mail','$login','$haslo');";
                mysqli_query($polaczenie,$wstawu);
                echo "Konto <b>".$imie."</b> zostało zarejestrowane w sklepie muzycznym <a href='panel_log_rej.php'>kliknij</a>, aby się zalogować";
                
                mysqli_close($polaczenie);
                }
                else{
                    echo "Musisz zaakceptować regulamin!";
                }
            }
            else echo "Podane hasła się różnią!!<br>";
        }
        else{
            echo "Musisz uzupełnić wszystkie pola";
        }
    ?>
    
</main>
<?php
include "footer.php";
?>