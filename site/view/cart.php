<?php
include 'inc/header.php'
?>
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="?controller=index">Trang chủ</a></li>
                    <li><a href="?controller=shop">Cửa hàng</a></li>

                    <li class="active"><a href="?controller=cart">Giỏ hàng</a></li>
                    <li><a href="?controller=checkout">Thanh toán</a></li>
                    <li><a href="?controller=contact">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->



<div id="wrapper">
    <div class="cart-product">
        <div class="row">
          <div class="col-md-8">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="actions" colspan="6">
                                            <div class="coupon">
                                                <label for="coupon_code">Mã giảm giá:</label>
                                                <!-- Ma mac dinh = 111 -->
                                                <input type="text" placeholder="Mã giảm giá" value="" id="magiamgia" class="input-text" name="coupon_code">
                                                <input type="button" class="mybtn btn-success" id="giamgiasp" onclick="apply_redure(magiamgia.value)" value="Áp dụng giảm giá" name="apply_coupon" class="button">
                                            </div>
                                            <input type="submit" value="Cập nhật" name="update_cart" class="button" id="updatesp">
                                            <a href="?controller=checkout" type="button" class="btn btn-info" Thanh toán name="proceed" class="checkout-button button alt wc-forward" id="thanhtoansp">
                                                Thanh toán
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
            </div>
            <div class="cart_totals ">
                        <h2>Tổng giỏ hàng</h2>
                            <div style="color:red" id="tbgiamgia">
                                <small> </small>
                            </div>

                            <table cellspacing="0">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Tổng tạm</th>
                                            <td>
                                                <span class="cart-amunt">110.000 VND</span>
                                            </td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Vận chuyển và xử lí</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Tổng hóa đơn</th>
                                            <td><strong><span id="tonghoadon">0<sup>đ</sup></span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>

          </div>
        </div>
</div>
<div id="wrapper">
        
            <div class="content-header">
                <span class="content-title">
                    Bạn có thể thích </span>
                </div>
                <div class="box-row-2">
                    <?php
                   $quan = 2;
                   $getpd = $product->GetXProduct($quan);
                   if ($getpd) {
                       $i = 0;
                       while ($row = $getpd->fetch_assoc()) {
                        if ($i > $quan) break;
                            echo '
                            <div class="col span-1-of-5 box-product">
                            <a href="?controller=single&id"><img src="../img/'.$row["image_link"].'" alt=""></a>
                            <h2 class="product-name">
                            <a href="?controller=single&id='.$row["id"].'">'.$row["name"].'</a>
                             </h2>
                            <div class="flashsale-price">
                                <div class="flashsale-price-special">
                                    <span><ins>' . number_format($row["price2"]) . '<sup>đ</sup></ins> </span>
                                </div>
                                <div class="flashsale-price-old">
                                    <span><del>' . number_format($row["price1"]) . '<sup>đ</sup></span></span>
                                </div>
                            </div>
                            <a class="add_to_cart_button center-btn"  data-p-id="' . $row["id"] . '" data-p-name="' . $row["name"] . '" data-p-image="' . $row["image_link"] . '" data-p-price="' . $row["price2"] . '" rel="nofollow" >Chọn</a>
                             </div>';
                            $i++;
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
include 'inc/footer.php'
?>