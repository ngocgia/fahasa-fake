<?php
       
		include 'inc/header.php' ;
        //Kiểm tra phiên đăng nhập, nếu chưa đăng nhập sẽ quay ra trang chủ
        $login_check=session::get("user_login");
                if(!$login_check){
                        header('Location:index.php');
                }

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
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="single-sidebar">

                    <?php
                    //Load thông tin lên form
                        $id=session::get("user_id");

                        $result=$user->LoadInform($id);
                        if($result){
                            while($row=$result->fetch_assoc()){
                    ?>
                    <div class="infor-user">
                        <h2 class="sidebar-title"> <?php  echo $row["name"] ?></h2>
                        <?php echo '<img src="../img/'.$row["avata"].'" alt="">';?>
                    </div>
                    </div> 
                    
                </div>
                <?php
                        $id=session::get("user_id");
                        
                        if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['update'])){
                            $update_user=$user->UpdataUser($_POST,$id);
                        }
                        
                 ?>
                
            
                <div class="col-md-9">
                    <div class="woocommerce">
                        <form action="#" class="edit-profile" method="post" name="edit-profile">

                                <div id="customer_details" class="col-md-7"  >
                                        <div class="woocommerce-billing-fields">
                                            <h3>Thông tin chi tiết</h3>
                                            
                                           
                                            
                                            <p >
                                                <?php 
                                                if(isset($update_user)){
                                                    echo $update_user;
                                                }
                                            ?>
                                            </p>

                                        
                                            <div class="clear"></div>
                                            
                                                
                                           
                                            <p >
                                                <label class="" for="fullname">Họ Tên</label>
                                                <input type="text" value="<?php echo $row["name"]  ?>" placeholder=""  name="fullname" class="input-text ">
                                            </p>
                                            
                                            <div class="clear"></div>


                                            <p>
                                                <label class="" for="address">Địa chỉ </label>
                                                <input type="text" value="<?php echo $row["address"]  ?>" placeholder=""  name="address" class="input-text ">
                                            </p>

                                            <div class="clear"></div>

                                            <p>
                                                <label class="" for="email">Email</label>
                                                <input type="text" value="<?php echo $row["email"]  ?>" placeholder=""  name="email" class="input-text ">
                                            </p>
                                                <div class="clear"></div>
                                            <p>
                                                <label class="" for="phone">Số điện thoại </label>
                                                <input type="text" value="<?php echo $row["phone"]  ?>" placeholder="" name="phone" class="input-text ">
                                            </p>
                                           
                                            <div class="clear"></div>
                                           
                                          
                                              <?php
                                                    }
                                                    } 
                                               ?>  
                                           
                                             <!-- <div class="clear"></div>
                                              <div id="passwordgroup" style="display: block;">
                                                  <div>
                                                     <p>
                                                        <label  for="oldpasswd">Mật khẩu cũ</label>
                                                        <input type="password" value="<?php echo $row["password"]  ?>"  name="oldpasswd" class="input-text ">
                                                    </p>
                                                    <div class="clear"></div>
                                                    <p>
                                                        <label class="" for="newpasswd">Mật khẩu mới</label>
                                                        <input type="password" value=""  name="newpasswd" class="input-text ">
                                                    </p>
                                                    <div class="clear"></div>
                                                    <p>
                                                        <label class="" for="re-newpasswd">Nhập lại</label>
                                                        <input type="password" value="" name="re-newpasswd" class="input-text ">
                                                    </p>
                                                  </div>
                                             
                                              </div> -->
                                         
                                               <div class="clear"></div>
                                               <div class="">

                                                    <input type="submit" class=" btn btn-info" value="Cập nhập"  name="update" class="button alt">


                                                </div>


                                        
                                        </div>
                                   

                                  

                                </div>

                              
                            </form>

                        </div>   
                
                         
                </div>
            </div>
        </div>
    </div>

 <?php
 		include 'inc/footer.php' 
  ?>