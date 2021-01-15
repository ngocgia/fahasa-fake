<?php
    include 'inc/header.php';

  ?>
     <div class="mainmenu-area">
        <div class="container">
            <div class="row">
               
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                       <li class="active"><a href="?controller=index">Trang chủ</a></li>
                        <li><a href="?controller=shop">Cửa hàng</a></li>

                        <li ><a href="?controller=cart">Giỏ hàng</a></li>
                        <li><a href="?controller=checkout">Thanh toán</a></li>
                        <li><a href="?controller=contact">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->
<?php
     include 'inc/slider.php';
  ?>
   
    <!-- End promo area -->

    <div id="wrapper">
    <div class="row">
            <div class="col-md-12">
            <div class=" tabslider-header box-title">
                <div class="tabslider-title girdslider-title">
                    được mua nhiều nhất
                </div>
            </div>
            <div class="box-row product-carousel">
                <?php
                $getpd=$product->GetAllProduct();
                if ($getpd) {
                    while($row = $getpd->fetch_assoc()) {
                        echo '
                        <div class="box-product">
                        <a href=""><img src="../img/'.$row["image_link"].'" alt=""></a>
                        <h2 class="product-name">
                            <a href="?controller=single&id='.$row["id"].'">'.$row["name"].'</a>
                        </h2>
                        <div class="flashsale-price">
                            <div class="flashsale-price-special">
                                <ins>'.number_format($row["price2"]).'<sup>đ</sup></ins> 
                            </div>
                            <div class="flashsale-price-old">
                                <del>'.number_format($row["price1"]).'<sup>đ</sup></del>
                            </div>
                        </div>
                        
                        </div>';
                    }
                }
                ?>
             
            </div>
            </div>
    </div>
    </div>

    </div>
     <!-- End brands area -->

    <div id="wrapper">
        
            <div class="goiy-header">
                <img id="icon-flash" src="../img/menu4.png" alt="flash">
                <span class="header-title">
                        Gợi ý dành cho riêng bạn </span>
                </div>
                <div class="box-row-2 product-carousel">
                    <?php
                    $getpd=$product->GetAllProduct();
                    if ($getpd) {
                        while($row = $getpd->fetch_assoc()) {
                            echo '
                            <div class="box-product">
                            <a href=""><img src="../img/'.$row["image_link"].'" alt=""></a>
                            <h2 class="product-name">
                                <a href="?controller=single&id='.$row["id"].'">'.$row["name"].'</a>
                            </h2>
                            <div class="flashsale-price">
                                <div class="flashsale-price-special">
                                    <ins>'.number_format($row["price2"]).'<sup>đ</sup></ins> 
                                </div>
                                <div class="flashsale-price-old">
                                    <del>'.number_format($row["price1"]).'<sup>đ</sup></del>
                                </div>
                            </div>
                            
                            </div>';
                        }
                    }
                    ?>
                </div>
                <div class="tab-xem-them">
                        <a href="?controller=shop">Xem thêm</a>
                </div>
            </div>
    </div>


    <?php
        include 'inc/swiper.php'
        ?>
  <?php
        include 'inc/footer.php'
    ?>
