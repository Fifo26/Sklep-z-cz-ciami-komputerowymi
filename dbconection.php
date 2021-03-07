<?php
    $polaczenie=mysqli_connect("localhost", "root", "", "czesci_komp");
    if(mysqli_connect_error()){
        echo "Błąd połączenia";
        exit;
    }
    else{
        if(!empty($_POST["kategoria"])){
            $kat=$_POST["kategoria"];
        }
        else{
            $kat="";
        }
        if(!empty($_POST["sort"])){
            $sort=$_POST["sort"];
        }
        else{
            $sort="";
        }
        $sql = 'select * from produkty '.$kat.' '.$sort;
        $result=mysqli_query($polaczenie, $sql);
        while($wiersz=mysqli_fetch_assoc($result)){
            echo '<div id="produkt">
                    <div id="produktimg">
                        <img src="img/'.$wiersz['nazwa'].'.jpg" alt="'.$wiersz['nazwa'].'">
                    </div>
                    <div id="produktopis">
                        <h3>'.$wiersz['nazwa'].'</h3>
                        <p>'.$wiersz['cena'].'zł.</p>
                        <p>ilość: '.$wiersz['ilosc'].'</p>
                    </div>
                </div>';
        }
    }
    mysqli_close($polaczenie);
    
?>