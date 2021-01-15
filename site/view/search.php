<?php
    include 'inc/header.php'

  ?>
  <div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
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
</div>
    <br />
  <h2 style="color: #FF8000; text-align: center;"> Kết quả tìm kiếm </h2>

  <div id="wrapper">
            <div class="left-main-sp">
                <span class="title-sanpham">Nhóm sản phẩm</span><br />
                <span class="title-book">Sách tiếng Việt</span>
                <div class="list-name-book">
                    <ul>
                        <li>Thiếu nhi</li>
                        <li>Giáo Khoa-Tham Khảo</li>
                        <li>Văn học</li>
                        <li>Tâm Lý-Kỹ Năng Sống</li>
                        <li>Sách học ngoại ngữ</li>
                        <li>Kinh tế</li>
                        <li>Lịch sử-Địa Lý-Tôn Giáo</li>
                        <li>Khoa học kỹ thuật</li>
                        <li>Nuôi dạy con</li>
                        <li>Nữ Công gia chánh</li>
                    </ul>
                    <span class="xemthem">Xem Thêm</span>
                </div>

                <span class="title-gia">Gía</span>
                <div class="list-name-gia">
                    <ol>
                        <li><input type="checkbox"> 0đ - 150,000đ</li>
                        <li><input type="checkbox"> 150,000đ - 300,000đ</li>
                        <li><input type="checkbox"> 300,000đ - 500,000đ</li>
                        <li><input type="checkbox"> 500,000đ - 700,000đ</li>
                        <li><input type="checkbox"> 700,000đ - Trở lên</li>
                    </ol>
                </div>
                <span class="title-list-check">Độ tuổi</span>
                <div class="list-name-check">
                    <ol>
                        <li><input type="checkbox"> 15 - 18</li>
                        <li><input type="checkbox"> 6+</li>
                        <li><input type="checkbox"> 11 - 15</li>
                        <li><input type="checkbox"> 5 - 15</li>
                        <li><input type="checkbox"> 0 - 6</li>
                        <li><input type="checkbox"> 6+</li>
                        <li><input type="checkbox"> 18+</li>
                        <li><input type="checkbox"> 3+</li>
                        <li><input type="checkbox"> 4+</li>
                    </ol>
                    <span class="xemthem">Xem Thêm</span>
                </div>
                <span class="title-list-check">Hình thức</span>
                <div class="list-name-check">
                    <ol>
                        <li><input type="checkbox"> Bìa mềm </li>
                        <li><input type="checkbox"> Bìa cứng </li>
                        <li><input type="checkbox"> Bộ hộp </li>
                        <li><input type="checkbox"> Sách kèm đĩa </li>
                        <li><input type="checkbox"> Board Book </li>
                        <li><input type="checkbox"> CD/DVD </li>
                        <li><input type="checkbox"> Cards </li>
                        <li><input type="checkbox"> Sách Khổ lớn</li>
                    </ol>
                    <span class="xemthem">Xem Thêm</span>
                </div>
                <span class="title-list-check">Màu sắc</span>
                <div class="list-name-check">
                    <ol>
                        <li><input type="checkbox"> Nhiều màu </li>
                        <li><input type="checkbox"> Xanh lá </li>
                        <li><input type="checkbox"> Vàng </li>
                        <li><input type="checkbox"> Trắng </li>
                        <li><input type="checkbox"> Xám </li>
                        <li><input type="checkbox"> Hồng nhạt </li>
                        <li><input type="checkbox"> Hồng dâu </li>
                        <li><input type="checkbox"> Tím nhạt </li>
                    </ol>
                    <span class="xemthem">Xem Thêm</span>
                </div>
                <span class="title-list-check-1">Màu mực</span>
                <div class="list-name-check-1">
                    <ol>
                        <li><input type="checkbox"> Xanh </li>
                        <li><input type="checkbox"> Đỏ </li>
                        <li><input type="checkbox"> Đen </li>
                    </ol>
                </div>
                <span class="title-list-check-1">Nơi gia công & sản xuất</span>
                <div class="list-name-check-1">
                    <ol>
                        <li><input type="checkbox"> Hàn Quốc </li>
                        <li><input type="checkbox"> Trung Quốc </li>
                        <li><input type="checkbox"> Việt Nam </li>
                    </ol>
                </div>
                <span class="title-list-check">Xuất xứ thương hiệu</span>
                <div class="list-name-check">
                    <ol>
                        <li><input type="checkbox"> Thương hiệu Hàn Quốc </li>
                        <li><input type="checkbox"> Việt Nam </li>
                        <li><input type="checkbox"> Thương Hiệu Đức </li>
                        <li><input type="checkbox"> Thương Hiệu Mỹ </li>
                        <li><input type="checkbox"> Trung Quốc </li>
                        <li><input type="checkbox"> Thương Hiệu Anh Quốc </li>
                    </ol>
                </div>
                <span class="title-list-check">Nhà cung cấp</span>
                <div class="list-name-check">
                    <ol>
                        <li><input type="checkbox"> NXB Trẻ </li>
                        <li><input type="checkbox"> Nhã Nam </li>
                        <li><input type="checkbox"> Alpha Books </li>
                        <li><input type="checkbox"> Dn tư Nhân thương mại Toàn phúc </li>
                        <li><input type="checkbox"> Huy Hoàng BookStore </li>
                        <li><input type="checkbox"> Nhà sách Minh Thắng </li>
                        <li><input type="checkbox"> Thái Hà </li>
                        <li><input type="checkbox"> Phụ Nữ </li>
                    </ol>
                    <span class="xemthem">Xem Thêm</span>
                </div>
            </div>
            <div class="right-main-sp">
                
                <div class="box-product">
                    <div class="row">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "bookstore");
 
                        // Check connection
                        if($link === false){
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                         
                        if(isset($_REQUEST["tukhoa"])){
                            // Prepare a select statement
                            $sql = "SELECT * FROM product WHERE name LIKE ?";
                            
                            if($stmt = mysqli_prepare($link, $sql)){
                                // Bind variables to the prepared statement as parameters
                                mysqli_stmt_bind_param($stmt, "s", $param_term);
                                
                                // Set parameters
                                $param_term = $_REQUEST["tukhoa"] . '%';
                                
                                // Attempt to execute the prepared statement
                                if(mysqli_stmt_execute($stmt)){
                                    $result = mysqli_stmt_get_result($stmt);
                                    
                                    // Check number of rows in the result set
                                    if(mysqli_num_rows($result) > 0){
                                        // Fetch result rows as an associative array
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                            //echo "<p>" . $row["name"] . "</p>";
                        
                                            
                        
                        
                                            echo '<div class="col-md-3 col-sm-6">
                                            <div class="cell">
                                                 <a href="?controller=single&id='.$row["id"].'"><img src="../img/'.$row["image_link"].'" alt="AnhSach"></a>
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
                                                    <div class="product-wid-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                <div class="product-option-shop">
                                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" data-p-id="'.$row["id"].'" data-p-name="'.$row["name"].'" data-p-image="'.$row["image_link"].'" data-p-price="'.$row["price2"].'">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                         </div>';
                        
                                        }
                                    } else{
                                        echo "<p>Không tìm thấy</p>";
                                    }
                                } else{
                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                }
                            }
                             
                            // Close statement
                            mysqli_stmt_close($stmt);
                        }
                         
                        // close connection
                        mysqli_close($link);
                    ?>

                    </div>
                   
                </div>
 
            </div>

        </div>




    <div class="clearfix"></div>
 <?php

    include 'inc/footer.php'
    
  ?> 



