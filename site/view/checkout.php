<?php
    include 'inc/header.php'
?>
<?php
    include_once ("controller/Xac_Nhan.php"); //Khai báo thư viện lớp users
    $user=new User();//tạo ra 1 đối tượng user
    if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['xacnhan'])){ //serve yêu cầu method Post và có biến _POST tồn tại thì thực hiện hàm đăng kí

        $xacnhan=$order->SaveOrder($_POST);
     
    }
?>

 

 
     <div class="mainmenu-area">
        <div class="container">
            <div class="row">
            
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                       <li ><a href="?controller=index">Trang chủ</a></li>
                        <li><a href="?controller=shop">Cửa hàng</a></li>
                       
                        <li ><a href="?controller=cart">Giỏ hàng</a></li>
                        <li class="active"><a href="?controller=checkout">Thanh toán</a></li>
                        <li><a href="?controller=contact">Liên hệ</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->


    
     <strong><h3 style="text-align: center; margin-top: 20px; color:#f7941e" id="ps">Cảm ơn bạn đã sử dụng dịch vụ !</h3></strong>
    
    
    <div class="single-product-area">
        <div class="container">
            <div class="row">
            <div class="thongtin-left">
                <div class="col-md-7" style="margin-left: 160px">
                    <div class="product-content-right">
                        <div class="woocommerce">


                            <form  action="" class="checkout" method="POST" name="xn">

                                <div id="customer_details">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Chi tiết hóa đơn</h3>
                                          <!--  
                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Họ và tên<abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                            </p>
 -->
                            
                <div class="clear"></div>

                                    

                <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                    <label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr>
                    </label>
                 <input type="text" value=""  id="billing_address_1" name="address" class="input-text ">
                </p>


                <div class="clear"></div>

                <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                <label class="" for="billing_email">Email<abbr title="required" class="required">*</abbr>
                 </label>
                <input type="text" value="" placeholder="" id="billing_email" class="input-text ">
                </p>

                <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                <label class="" for="billing_phone">Số điện thoại <abbr title="required" class="required">*</abbr>
                 </label>

                                                <!-- attribute name tương ứng với biến được gán , chỉ cần xóa name đi là nó không gửi lên...   -->
                 <input type="text" value="" placeholder="" id="billing_phone" name="phone" class="input-text ">
                </p>
                <div class="clear"></div>


                                    </div>



                                <div id="order_review" style="position: relative;">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Tổng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <!--Liên quan đến shopping cart-->
                                                <td class="product-name">
                                                    Ship Your Idea <strong class="product-quantity">× 1</strong> </td>
                                                <td class="product-total">
                                                    <span class="amount">0<sup>đ</sup></span> </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Tổng tạm</th>
                                                <td>
                                                    <!-- <span class="amount">0<sup>đ</sup></span> -->
                                                    <span class="cart-amunt">110.000 VND</span>
                                                </td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Vận chuyển và xử lí</th>
                                                <td>

                                                    Free Shipping
                                                    <input type="hidden" class="shipping_method" value="free_shipping"  id="shipping_method_0" data-index="0">
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Tổng hóa đơn</th>
                                                <td><strong><span id="tonghoadon">0<sup>đ</sup></span></strong> </td>
                                            </tr>

                                        </tfoot>
                                    </table>
                                          <input type="number" value=0  hidden=true placeholder="" id="amount" name="amount" class="input-text " />
                                             <input type="number" hidden=true value="" placeholder="" id="qty" name="qty" class="input-text " />

                                    <div id="payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_bacs">
                                                <input type="radio" data-order_button_text="" checked="checked" value="bacs" class="input-radio" id="payment_method_bacs">
                                                <label for="payment_method_bacs">Chuyển tiền trực tiếp qua ngân hàng </label>
                                                <div class="payment_box payment_method_bacs">
                                                    <p>
                                                    Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm nguồn  thanh toán. Đơn hàng của bạn sẽ không được vận chuyển cho đến khi tiền được chuyển qua tài khoản của chúng tôi.</p>
                                                </div>
                                            </li>   
                                        </ul>
                                        <div class="form-row place-order">
                                            <input name="xacnhan" type="submit" class="mybtn btn-info" data-value="Place order" value="Đặt hàng" id="place_order" class="button alt">
                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>

                        </div>                       
                    </div>                    
            </div>
            </div>
                
          
            </div>
            <div class="goiy-right">
                <h2 class="tittle-goiy">Gợi ý cho bạn</h2>
                <?php
                   $quan = 1;
                   $getpd = $product->GetXProduct($quan);
                   if ($getpd) {
                       $i = 0;
                       while ($row = $getpd->fetch_assoc()) {
                           if ($i > $quan) break;
                           echo '
                           <div class="cell-2">
                            <div class="box-product">
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
                            <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            </div>
                            </div>
                             </div>';
                            $i++;
                        }
                    }
                    ?>
                
            </div>
        </div>
    </div>
     


  <?php
    include 'inc/footer.php'
  ?>