<?php
    include "header.php";
?>
<main> 
    <?php
        if(!empty($_POST["loginl"])){
            $logl=$_POST["loginl"];
        }
        else {
            $logl=NULL;
            echo "<br>Nie podałeś imienia!!<br>";
        }
        if(!empty($_POST["passl"])){
            $pasl=$_POST["passl"];
        }
        else {
            $pasl=NULL;
            echo "<br>Nie podałeś imienia!!<br>";
        }
        $polaczenie=mysqli_connect("localhost", "root", "", "czesci_komp");
        if($polaczenie->connect_error){
            die("Connection failed:".$polaczenie->connect_error);
            echo "coś nie działa :(";
        }
        else if(mysqli_num_rows(mysqli_query($polaczenie,"select login from klienci where haslo='$pasl'"))==1){
            echo "<h2>Zalogowano</h2>";
            echo "<h3>Przejdź na <a href='index.php'>stronę główną</a></h3>";
            }
        else echo "logowanie nie powiodło się <a href='panel_log_rej.php'>kliknij</a>, aby spróbować ponownie:( ";



        
    ?>

</main>
<?php
include "footer.php";
?>