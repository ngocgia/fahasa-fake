<?php
include_once "lib/session.php";
include_once 'model/banner.php';
include_once 'model/db.php';
include_once 'model/users.php';
include_once 'model/products.php';
include_once 'model/order.php';
include_once "lib/format.php";
Session::init();
$db = new Database();
$user = new User;
$product = new Product;
$format = new Format;
$order = new Order;
$banner = new Banner;
?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAHASA FAKE</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="public/alertify/src/alertify.js"></script>
    <script type="text/javascript" src="public/script/slide.js"></script>
    <script type="text/javascript" src="public/script/script.js"></script>
    <link rel="stylesheet" type="text/css" href="public/alertify/themes/alertify.core.css">
    <link rel="stylesheet" type="text/css" href="public/alertify/themes/alertify.default.css">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="public/css/responsive.css">
    
</head>

<body>

<header>
        <a href="#"><img class="sale__link" src="../img/header.jpg" alt="sale"></a>
        <div id="wrapper">
            <div class="header">
               <a href="?controller=index"><img src="../img/logo.png" alt="Logo" class="logo"></a> 
                <div class="header__search">
                    <!-- <input class="header__search--input" type="text" placeholder="Tìm kiếm sản phẩm mong muốn...">
                    <img src="../img/ico_search.png" alt="" class="header__search--icon"> -->
                    <div class="timkiem">
                        <form controller="" method="GET">
                            <input type="hidden" name="view" value="product" />
                            <input type="text" name="tukhoa" placeholder="Tìm kiếm sản phẩm mong muốn..." class="header__search--input"/>
                            <button><span class=" header__search--icon fa fa-search"></span></button>
                            <input type="hidden" name="controller" value="tim-kiem" />
                        </form>
                    </div>

                </div>
                <div class="header--icon">
                    <div>
                        <img src="../img/ico_notifi.png" alt="Thông báo">
                    </div>
                    <a class="header--text" href="#">
                        Thông báo
                    </a>

                    <div class="header__notifi">
                        <div class="wrapper__notifi">
                            <img src="../img/lock.jpg" alt="lock" class="img--clock">
                            <p>Vui lòng đăng nhập để xem thông báo</p>
                            <a class="btn btn__log" href="#">Đăng nhập</a>
                            <a class="btn btn__reg" href="#">Đăng ký</a>
                        </div>
                    </div>
                </div>
                <div class="header--icon">
                    <div>
                        <img src="../img/ico_shopping.svg" alt="Giỏ hàng">
                    </div>
                    <a class="header--text" href="?controller=cart">
                        Giỏ hàng
                    </a>
                    <div class="header__cart">
                        <div class="wrapper__cart">
                            <p>Có <span class="product-count">5</span> sản phẩm trong giỏ hàng của bạn.</p>
                            <p>Thành tiền: <span class="cart-amunt">0 VND</span>.</p>
                        </div>
                    </div>
                </div>
                <?php
                            if (isset($_GET["user_id"])) {
                                echo '<script language="javascript">';

                                echo 'confirm("Bạn muốn đăng xuất?",function(e){';
                                echo       'if(e==true){' . session::destroy() . ';}';
                                echo '});';

                                echo '</script>';
                            }
                            ?>
                <div class="header--icon">
                    <!-- <div>
                        <img src="../img/ico_log-in.svg" alt="Đăng nhập">
                    </div>
                    <a class="header--text" href="#">
                        Đăng nhập
                    </a> -->
                    <?php
                                $login_check = session::get("user_login");
                                if ($login_check == false) {
                                    echo '<div>
                                    <img src="../img/ico_log-in.svg" alt="Đăng nhập">
                                    </div>
                                    <a class="header--text" href="?controller=login">Đăng nhập</a>';
                                } else {
                                    echo '
                                    <div>
                                    <img src="../img/ico_user.svg" alt="User">
                                    </div>
                                    <a class="header--text"  href="?controller=account"><b>Hi ' . session::get("user_name") . '</b></a>
                                    <div class="header__login">
                                        <div class="wrapper__login">
                                        <ul?>
                                            <li><img src="../img/ico_settings.svg" alt="Setting"><a href="?controller=account"> Thông tin</a></li>
                                            <hr/>
                                            <li><img src="../img/ico_out.svg" alt="Đăng xuất"><a href="?user_id=' . session::get("user_id") . '"> Đăng xuất</a></li>
                                        </ul>    
                                         </div>
                                    </div>
                                    ';
                                }
                                ?>
                    <!-- <div class="header__login">
                        <div class="wrapper__notifi">
                            <a href="?controller=account">Thông tin</a>
                            <a href="#">Đăng xuất</a>
                        </div>
                    </div> -->
                </div>
                <div class="header__language">
                    <div class="header__language--default">
                        <img class="img--country" src="../img/ico_vietnam.svg" alt="Việt Nam">
                        <img class="img--dropdown" src="../img/ico_dropdown.svg" alt="dropdown">
                    </div>
                    <div class="header__language--change">
                        <div class="wrapper__languge">
                            <div>
                                <img class="img--country" src="../img/ico_vietnam.svg" alt="Việt Nam">
                                <span class="wrapper__languge--title">Vietnamese </span>
                            </div>
                            <div>
                                <img class="img--country" src="../img/ico_english.svg" alt="English">
                                <span class="wrapper__languge--title">English</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="shopping-item-2" style="position: fixed;padding: 10px;border: 1px solid black;border-radius: 5px;right: 10px;z-index: 1000;bottom: 10px;background-color: white;cursor: pointer;display: none;" onclick="window.location.href='?controller=cart'">
        <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
        <span class="product-count" id="count" >5</span>
    </div>