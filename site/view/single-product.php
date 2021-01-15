<?php
    include 'inc/header.php'
  ?>
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                       <li ><a href="?controller=index">Trang chủ</a></li>
                        <li><a href="?controller=shop">Cửa hàng</a></li>

                        <li ><a href="?controller=cart">Giỏ hàng</a></li>
                        <li><a href="?controller=checkout">Thanh toán</a></li>
                        <li><a href="?controller=contact">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <!-- ---------------------------- -->
    <div class="main-product">
        <div id="wrapper">
                <?php
                    if(isset($_GET['id'])){
                        $name=$_GET['id'];
                        $getbook=$product->GetDetailProduct($name);
                        if ($getbook) {
                            while($row = $getbook->fetch_assoc()) {
                                ?>
                                <div class="product-breadcroumb">
                                                        <a href="?controller=">Trang chủ</a>
                                                        <a href="#">Chi tiết sản phẩm</a>
                                                    </div>
            <div class="product-banner">
                <div class="product-left">
                     <?php echo '<img src="../img/'.$row["image_link"].'" alt=""/>'   ?>
                    <div class="product-gallery">
                        <?php echo '<img src="../img/'.$row["image_link"].'" alt=""/>'   ?>
                        <?php echo '<img src="../img/'.$row["image_link"].'" alt=""/>'   ?>
                      
                    </div>
                    <form action="" class="cart">
                        <button class="product-btn-1 add_to_cart_button"  type="button" 
                        <?php echo 'data-p-id="'.$row["id"].'" data-p-name="'.$row["name"].'" data-p-image="'.$row["image_link"].'" data-p-price="'.$row["price2"].'"' ?> >Thêm vào giỏ hàng</button>
                    </form>
                </div>
                <div class="product-right">
                    <div class="product-view">
                        <span class="tittle-sp-con"><?php echo $row["name"] ?></span>
                        <div class="product-view-one">
                            <div class="product-view-author">
                                <span><b>Tác giả:</b> </span>
                                <span><?php echo $row["author"]  ?></span>
                            </div>
                            <div class="product-view-author">
                                <span><b>Thể loại:</b></span>
                                <span><?php echo $row["category"]  ?></span>
                            </div>
                        </div>
                        <div class="flashsale-price-sing">
                            <div class="flashsale-price-special">
                                <span>Giá bán: <?php echo number_format($row["price2"])  ?><sup>đ</sup></span>
                            </div>
                            <div class="flashsale-price-old">
                                <span><?php echo number_format($row["price1"])  ?><sup>đ</sup></span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh giá</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Mô tả sản phẩm</h2>
                                                <p>
                                                    <?php echo $row["content"]  ?>
                                                </p>
                                            </div>
                                            <?php
                                                        }
                                                    }
                                                }

                                            ?>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h4>Nhận xét</h4>
                                                <div class="submit-review">
                                                    <p><label for="name">Tên</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Đánh giá</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Nhận xét</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Gửi"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<!-- sản phẩm liên quan -->
    <div id="wrapper">
        <div class="row">
            <div class="col-md-12">
            <div class=" tabslider-header box-title">
                <div class="tabslider-title girdslider-title">
                    Sản Phẩm liên quan
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

    <?php
    include 'inc/footer.php'
    ?>
