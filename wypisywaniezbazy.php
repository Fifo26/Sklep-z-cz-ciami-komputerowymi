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
        if(!empty($_POST["searchdb"])){
            $search=$_POST["searchdb"];
            $search_question='where kategoria like "'.$search.'" || nazwa like "'.$search.'"';
        }
        else{
            $search_question="";
        }
        $sql = 'select * from produkty '.$search_question.' '.$kat.' '.$sort;
        $result=mysqli_query($polaczenie, $sql);
        while($wiersz=mysqli_fetch_assoc($result)){
            echo '  
            <div class="col-sm-6 col-md-4 product-item ">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="product-image">
                                <img src="img/'.$wiersz['nazwa'].'.jpg"  alt="'.$wiersz['nazwa'].'">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">'.$wiersz['nazwa'].'</a></h2>
                        </div>
                        <div class="col-4">
                            <a href="#" class="small-text">compare </a>
                        </div>
                    </div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <a href="#" class="small-text"> '.$wiersz['ilosc'].' sztuk na stanie</a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">'.$wiersz['kategoria'].' </p>
                            <div class="row">
                                <button class="btn btn-light" type="button">Kup teraz!</button>
                                <div class="col-6">
                                    <p class="product-price">'.$wiersz['cena'].'zł. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';    
        }
    }
    mysqli_close($polaczenie);
    
?>