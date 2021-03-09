<?php
    include "header.php";
    //include "wypisywaniezbazy.php";
    include "navibar.php";
?>
 <form action="#" method="post">
 <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Witaj w sklepie!</h2>
                <p class="text-center">taniej niż u konkurencji</p>
                <!-- <form class="search-form"> -->
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <input class="form-control" name="searchdb" type="text" placeholder="Czego ci trzeba?">
                        <div class="input-group-append">
                            <button class="btn btn-light" type="submit">Szukaj </button>
                    </div>
                        <!-- <form class="search-form"> -->
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <div class="input-group-append"></div>
                    </div>
                <!-- </form> -->
    </div>
    
                <span>
                    <label for="kategoria">Kategoria</label>
                    <select class="form-select" name="kategoria" id="kat">
                        <option value="">wszystko</option>
                        <option value='where kategoria="monitor"'>Monitor</option>
                        <option value='where kategoria="mysz"'>Mysz</option>
                        <option value='where kategoria="procesor"'>Procesor</option>
                        <option value='where kategoria="karta_graf"'>Karta graficzna</option>
                        <option value='where kategoria="głośniki"'>Głośniki</option>
                    </select>
                </span>
                <span>
                    <label for="sort">Sortowanie</label>
                    <select class="form-select" name="sort" id="sort">
                        <option value="order by nazwa asc">nazwa rosnąco</option>
                        <option value="order by nazwa desc">nazwa malejąco</option>
                        <option value="order by cena asc">cena rosnąco</option>
                        <option value="order by cena desc">cena malejąco</option>
                    </select>
                </span>
                <span>
                    <!-- <input type="submit" value="Szukaj"> -->
                </span>
            </form>
                    </div>
                </form>
            </div>
        </div>

        
        

    
    
    <div class="container">
        <div class="row product-list dev">
        
          

            <?php
                include "wypisywaniezbazy.php";
            ?>
             <!--   <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                        <div class="col-4"><a href="#" class="small-text">compare </a></div>
                    </div>
                    <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a href="#" class="small-text">82 reviews</a></div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                                <div class="col-6">
                                    <p class="product-price">$599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            
        </div>
    </div> 
<?php
include "footer.php";
?>