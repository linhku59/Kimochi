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
        Welcome to Kimochi
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php  if ( !(isset($_SESSION['km']))){include 'km.html';}?>
<!-- body --!>
<?php include 'header.html';?>


<div class="wrapper">
    <div class="container">

        <!-- body --!>
        <br><br><br>
        <div  class="image">
            <img data-v-60e8697e="" src="images/about/shipping.png" class="center-block" alt="our purpose">
        </div><br><br>
        <br><br><br>
        <h3>
            Hình thức vận chuyển của shop là gì?
        </h3>
        <br><br><br>
        <h4><a>
                Shop có 4 loại hình thức vận chuyển cho bạn linh động lựa chọn:<br><br>
                - KH ngoại tỉnh: Bưu điện VNpost <br>
                - Giao trong 2-3 ngày: GHN , Giao hàng tiết kiệm <br>
                - Giao siêu tốc: Grab Express, Ahamove <br>
                - Nhân viên giao hàng của shop (<3km) !<br>
                <br><br>

            </a></h4>
        <br><br><br>
        <div  class="image">
            <img data-v-60e8697e="" src="images/about/shipping2.png" class="center-block" alt="our purpose">
        </div><br><br>
        <br><br><br>
        <h3>
            Free  ship
        </h3><br><br>
        <h4><a>
                <br>
                Shop sẽ free ship cho khách hàng với những đơn hàng trên 100.000 bán kính <2 km <br><br>
                Đơn hàng từ 200.000 trở lên bán kính từ 2-7 km được free ship nếu bạn chọn hình thức chuyển khoản
                Free ship toàn quốc với đơn hàng trên 300.000  chuyển khoản trước.
            </a>
        </h4><br><br><br><br>
        <h2>
            Cám ơn quý khách đã quan tâm tới Kimochi.store, chúc bạn có trải nghiệm mua sắm vui vẻ
        </h2>
        <br><br><br><br>


    </div>
</div>
<?php include 'footer.html';?>
</body>
</html>

