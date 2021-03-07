<?php
    include "header.php";
?>
<main> 
    <?php
    //kasuje zapisane w pamieci zmienne
     $logl = $pasl ="";
     require_once "connect.php";
    
        if(!empty(trim($_POST["loginl"]))){
            $logl=trim($_POST["loginl"]);
        }
        else {
            $logl=NULL;
            echo "<br>Nie podałeś imienia!!<br>";
        }
        if(!empty(trim($_POST["passl"]))){
            $pasl=$_POST["passl"];
        }
        else {
            $pasl=NULL;
            echo "<br>Nie podałeś imienia!!<br>";
        }
        
        if(mysqli_num_rows(mysqli_query($polaczenie,"select login from klienci where haslo='$pasl'"))==1){
            echo "<h2>Zalogowano</h2>";
            // ustawiam zmienne sesji żeby wiedzieć że jestem zalogowany 
                            $_SESSION["loggedin"] = true; //że zalogowany
                            $_SESSION["loginl"] = loginl;    // będzie witaj login, np. grzes
            header("location: index.php");
            
            }
        else echo "logowanie nie powiodło się <a href='login.php'>kliknij</a>, aby spróbować ponownie:( ";



        
    ?>

</main>
<?php
include "footer.php";
?>