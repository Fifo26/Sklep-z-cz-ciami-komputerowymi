<?php
    include "header.php";
    //include "wypisywaniezbazy.php";
?>


 <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Kupuj bez obaw</h2>
                <p class="text-center">taniej niż u twojej mamy&nbsp;</p>
                <form class="search-form">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="Szukaj mamusiek z okolicy">
                        <div class="input-group-append"><button class="btn btn-light" type="button">Search </button></div>
                    </div>
                </form>
            </div>
        </div>
        <form class="search-form">
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <div class="input-group-append"></div>
            </div>
        </form>
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