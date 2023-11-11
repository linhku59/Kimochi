<?php session_start();
include('connection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
        Liên hệ
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet">
</head>
<?php  if ( !(isset($_SESSION['km']))){include 'km.html';}?>

<div class="clearfix"></div>
<?php include 'header.html';?>
<body  style="background: #333333">
<div class="wrapper">
    <div class="container">
            <main>
            <div class="row">
                <div class="col-md-8">
                    <!-- Embedded Google Map -->
                    <br>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d651.0065402878514!2d105.79698609637256!3d20.97139700255556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acd97ebca9c9%3A0x96904725c9fd5605!2zMTc1IFnDqm4gWMOh!5e1!3m2!1svi!2s!4v1646457306721!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <br>
                    <br>
                    <h3>Thông tin liên hệ</h3>
                    <br>
                    <p>
                        175 Yên Xá - Tân Triều - Thanh Trì - HN<br>
                    </p>
                    <p><i class="fa fa-phone"></i>
                        <abbr title="Phone"></abbr>: 084 878 1998</p>
                    <p><i class="fa fa-envelope-o"></i>
                        <abbr title="Email"></abbr>: linhku59@gmail.com
                    </p>
                    <p><i class="fa fa-clock-o"></i>
                        <abbr title="Hours"></abbr>: Thứ 2 - Chủ nhật: 9:00  đến 21:00 </p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="https://www.facebook.com/linhku59"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix">
            </div>
            <!-- Thương hiệu -->

            <div class="our-brand">
                <h3 class="title" style="color: #f7544a"><strong>Kimochi </strong> đồng hành cùng</h3>
                <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                <ul id="braldLogo">
                    <li>
                        <ul class="brand_item">
                            <li>
                                <a href="https://www.facebook.com/tobanbittat">
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
<script type="text/javascript" src="js/script.min.js" >
</script>
</body>
</html>