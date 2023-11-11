<?php session_start();
include('connection.php');
error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
        Tất
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet">

</head>
<?php
?>
<body>

<div class="wrapper">
    <div class="header">
        <div class="container">

            <?php  if ( !(isset($_SESSION['km']))){include 'km.html';}?>
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo.png" alt="FlatShop">
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10">
                    <div class="header_top">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="option_nav">
                                    <li class="dorpdown">
                                        <a href="#">
                                            Về Kimochi
                                        </a>
                                        <ul class="subnav">
                                            <li>
                                                <a href="gioithieu.php">
                                                    Giới_thiệu
                                                </a>
                                            </li>
                                            <li>
                                                <a href="chinhsachdoitra.php">
                                                    Đổi_trả
                                                </a>
                                            </li>
                                            <li>
                                                <a href="baovekhachang.php">
                                                    Bảo_mật
                                                </a>
                                            </li>
                                            <li>
                                                <a href="lienhe.php">
                                                    Liên_hệ
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dorpdown">
                                        <a href="#">
                                            Kênh khác
                                        </a>
                                        <ul class="subnav">
                                            <li>
                                                <a href="https://www.facebook.com/kimochistoree">
                                                    Facebook
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://shopee.vn/iwannareset.98">
                                                    Shopee
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Lịch sử
                                        </a>
                                        <ul class="subnav">
                                            <li>
                                                <a href="donhang.php">
                                                    Đơn_hàng
                                                </a>
                                            </li>
                                            <li>
                                                <a href="damua.php">
                                                    Đã_mua
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <?php
                                if ( (isset($_SESSION['ms']) && $_SESSION['ms']))
                                {
                                    $id = $_SESSION['ms'];
                                    $sql = " SELECT * FROM `tai_khoan` WHERE tai_khoan.ten_dang_nhap = '$id' ";
                                    $result = mysqli_query($ketnoi, $sql);
                                    $row = mysqli_fetch_row($result);
                                    ?>
                                    <ul class="usermenu">
                                        <li>
                                            <?php
                                            echo 'Xin chào ', $row[2];
                                            ?>
                                        </li>
                                    </ul>
                                    <?php
                                }
                                ?>

                            </div>


                            <div class="col-md-3">


                                <?php
                                if ( (isset($_SESSION['ms']) && $_SESSION['ms'])) {?>
                                    <ul class="usermenu">
                                        <li>
                                            <a href="session_destroy.php" class="reg">
                                                Đăng xuất
                                            </a>
                                        </li>
                                    </ul>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <ul class="usermenu">
                                        <li>
                                            <a href="login.php" class="log">
                                                Đăng nhập
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dang_ky.php" class="reg">
                                                Đăng ký
                                            </a>
                                        </li>
                                    </ul>
                                    <?php
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="header_bottom">
                        <ul class="option">
                            <li class="option-cart">
                                <span class="cart_no"><?php echo $_SESSION["stt"] ?></span></a>
                                <a href="add_cart.php" class="cart-icon">
                                    Giỏ hàng
                                </a>
                            </li>
                        </ul>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">
                      Toggle navigation
                    </span>
                                <span class="icon-bar">
                    </span>
                                <span class="icon-bar">
                    </span>
                                <span class="icon-bar">
                    </span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="index.php">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="thun.php">
                                        Áo thun
                                    </a>
                                </li>
                                <li>
                                    <a href="thudong.php">
                                        Áo thu đông
                                    </a>
                                </li>
                                <li>
                                    <a href="gift.php">
                                        Phụ kiện
                                    </a>
                                </li>
                                <li>
                                    <a href="socks.php">
                                        Tất
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>





    <!--Các sản phẩm-->
    <body  style="background:url('images/background/full.jpg');background-size:auto; background-attachment:fixed">
    <div class="wrapper">
        <div class="container">

            <main>
            <! -- Áo -- -->
            <?php
            $sql = " SELECT * FROM `san_pham`WHERE san_pham.loai='tat' ";
            $result = mysqli_query($ketnoi, $sql);
            $all=mysqli_fetch_array($result);

            ?>

            <div class="hot-products">
                <h3 class="title"><strong>Tất cả</strong> sản phẩm</h3>
                <ul id="hot">
                    <li>
                        <div class="row">
                            <?php
                            while ($all[0] != "") { ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="products">
                                        <div class="thumbnail">
                                            <a><img src="images/products/min/<?php echo $all[0] ?>-1.jpg" alt="Hinh anh"></a>
                                        </div>
                                        <div class="productname"><?php  echo $all[1] ?> </div>
                                        <h4 class="price"><?php  echo $all[3]/1000,".000 đ" ?></h4>
                                        <div  class="button_group">
                                            <a href="add_cart.php?id=<?php echo $all[0] ?>">
                                                <button class="button add-cart"  type="button">

                                                    Mua ngay

                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                $all=mysqli_fetch_array($result);
                            }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="clearfix"></div>
            <! -- Thương hiệu -->

            <div class="our-brand">
                <h3 class="title"><strong>Good </strong> Brands</h3>
                <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                <ul id="braldLogo">
                    <li>
                        <ul class="brand_item">
                            <li>
                                <a href="https://tobanbittat.myharavan.com">
                                    <div class="brand-logo"><img src="images/bittat.png" alt=""></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/M.Shoes.S2">
                                    <div class="brand-logo"><img src="images/mshoes.png" alt=""></div>
                                </a>
                            </li>
                            <li>
                                <a href="http://facebook.com/kimochistoree">
                                    <div class="brand-logo"><img src="images/kimochi.png" alt=""></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/lips.beauty.astrid">
                                    <div class="brand-logo"><img src="images/lipbeauty.png" alt=""></div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/Min-Corner-106919040707036/">
                                    <div class="brand-logo"><img src="images/min.png" alt=""></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <! -- Hết thẻ Thương hiệu -->
        </div>
    </div>
    <div class="clearfix">
    </div>

    <!--Hết Cả-->

    <?php include 'footer.html';
    ?>

    <!--Hết body-->
</div>

<script type="text/javascript" src="js/jquery-1.10.2.min.js">
</script>
<script type="text/javascript" src="js/jquery.easing.1.3.js">
</script>
<script type="text/javascript" src="js/bootstrap.min.js">
</script>
<script defer src="js/jquery.flexslider.js">
</script>
<script type="text/javascript" src="js/jquery.sequence-min.js">
</script>
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
</script>
<script type="text/javascript" src="js/script.min.js" >
</script>
</body>
</html>