<?php
    include "header.php";
?>

<body>
    <header>
        <div class="header-dark" style="background-image:url('img/696778.jpg');">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only"></span>
                <span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="sklep.php">Sklep</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group">
                                <input class="form-control search-field" type="search" name="search" id="search-field">
                            </div>
                            <?php
                                @session_start();
                                if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']== true))
                                {
                                    echo' </form>
                                    <span class="navbar-text">
                                    <a href="#" class="login">Cześć '.$_SESSION['loginl'].'</a></span><a class="btn btn-light action-button" role="button" href="logout.php">Wyloguj</a></div>';
                                }else{
                                    echo'  </form><span class="navbar-text"><a href="login.php" class="login">Zaloguj</a></span><a class="btn btn-light action-button" role="button" href="rejestracja.php">Zarejestruj</a></div>';
                                }       
                            ?>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">All For Computers</h1>
                        <form class="search-form">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="Szukaj w sklepie">
                                <a href="sklep.php"><div class="input-group-append"><button class="btn btn-light" type="button">Szukaj</button></div></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Bestsellery</h2>
                <p class="text-center">Najczęściej kupowane produkty</p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="sklep.php">
                    <h1 class="">#2</h1>
                    <br><br>
                    <img class="img-fluid" src="img/intel i9.jpg"></a>
                    <h3 class="name">Intel core i-0</h3>
                    <p class="description">Działa po japońsku</p>
                    <a href="sklep.php" class="action"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="sklep.php">
                    <h1 class="">#1</h1>
                    <img class="img-fluid" src="img/monitor.jpg"></a>
                    <h3 class="name">Monitor gamingowy</h3>
                    <p class="description">Monitor do oglądania, fajna sprawa, polecam</p>
                    <a href="sklep.php" class="action"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="sklep.php">
                    <h1 class="">#3</h1>
                    <br><br><br>
                    <img class="img-fluid" src="img/mysz.jpg"></a>
                    <h3 class="name">Mysz gamingowa</h3>
                    <p class="description">Spokojna, nie wiele je, ma jedną wadę- dużo imprezuje</p>
                    <a href="sklep.php" class="action"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url('img/696744.jpg');"></div>
                <div class="swiper-slide" style="background-image:url('img/2080rtx.jpg');"></div>
                <div class="swiper-slide" style="background-image:url('img/watercomp.jpg');"></div>
                
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">O nas</h2>
                <p class="text-center">dowiedz się więcej</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-map-marker icon"></i>
                        <h3 class="name">Świetna Lokalizacja</h3>
                        <p class="description">Nasz sklep znajduję się w centrum miasta</p><a href="#" class="learn-more">Zobacz! »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name">Wysyłamy na czas, lub nie</h3>
                        <p class="description">jak byłeś grzeczny to na czas</p><a href="#" class="learn-more">Wysyłki »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Napisz! Ale pewnie nie odpowiemy</h3>
                        <p class="description">ponieważ jesteśmy zajęci projektami do szkoły</p><a href="#" class="learn-more">Zobacz nasze prace »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-leaf icon"></i>
                        <h3 class="name">Jesteśmy eko</h3>
                        <p class="description">Okej, nie jesteśmy</p><a href="#" class="learn-more">Zobacz jak być Eko! »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-plane icon"></i>
                        <h3 class="name">Samoloty też sprzedajemy</h3>
                        <p class="description">Samolotów nie sprzedajemy!</p><a href="#" class="learn-more">Kurs pilotażu »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-phone icon"></i>
                        <h3 class="name">Kontakt</h3>
                        <p class="description">halo halo?</p><a href="#" class="learn-more">Zadzwoń do nas!  »</a></div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
include "footer.php";
?>