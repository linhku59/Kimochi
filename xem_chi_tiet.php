<?php session_start();
include('connection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
        Xem chi tiết
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100'
        rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link href="css/style.css" rel="stylesheet">
</head>
<?php  if ( !(isset($_SESSION['km']))){include 'km.html';}?>

<div class="clearfix"></div>
<?php include 'header.html';?>

<body style="background: #333333;">
    <div class="wrapper">
        <div class="container">
            <main>
                <div class="row">
                    <?php
                $id_sp= $_GET['id'];
            $sql = " SELECT * FROM `san_pham` where san_pham.ma_san_pham='$id_sp'";
            $result = mysqli_query($ketnoi, $sql);
            $all=mysqli_fetch_row($result);
            ?>

                    <div class="hot-products">
                        <ul id="hot">
                            <li>
                                <div class="row">
                                    <?php
                                  ?>



                                    <div class="center">



                                        <div style="text-align: center;">
                                            <img src="images/products/min/<?php echo $all[0] ?>-1.jpg" alt="Hinh anh">
                                            <div class="productname"><?php  echo $all[1] ?> </div>
                                            <h4 class="price"><?php  echo $all[3]/1000,".000 vnđ" ?></h4>
                                            <div class="button_group">
                                                <a href="add_cart.php?id=<?php echo $all[0] ?>"><br>
                                                    <button class="button add-cart" type="button">

                                                        Mua ngay

                                                    </button>
                                                </a>
                                                
                                            </div><br>
                                            <h6> <b> <?php echo $all[2] ?></b></h6>
                                            <hr>
                                            <br>
                                            <img src="images/products/big/<?php echo $id_sp ?>-3.jpg" alt="Hinh anh">
                                            <hr>
                                            <br>
                                            <img src="images/products/big/<?php echo $id_sp ?>-2.jpg" alt="Hinh anh">
                                            <hr>
                                            <br>
                                            <img src="images/products/big/<?php echo $id_sp ?>-1.jpg" alt="Hinh anh">
                                            <hr>
                                            <br>

                                            <img src="images/products/big/<?php echo $id_sp ?>-4.jpg" alt="Hinh anh">
                                            <hr>
                                            <br>
                                            <img src="images/products/big/<?php echo $id_sp ?>-5.jpg" alt="Hinh anh">
                                            <hr>
                                            <br>

                                        </div>

                                    </div>






                                </div>
                            </li>
                        </ul>
                    </div>



                    <!-- Contact Details Column -->

                    <!--Thương hiệu -->

                    <div class="our-brand">
                        <h3 class="title"><strong>Kimochi store</strong> đồng hành cùng</h3>
                        <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand"
                                class="next" href="#">&gt;</a></div>
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
            </main>
            <!-- Hết thẻ Thương hiệu -->




            </main>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <?php include 'footer.html';
?>
    </div>
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src="js/script.min.js">
    </script>
</body>

</html>


<body style="background:url('images/background/full.jpg');background-size:auto; background-attachment:fixed">
</body>