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
        Chính sách đổi trả
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
            <img data-v-60e8697e="" src="images/about/doitra.jpg" class="center-block" alt="our purpose">
        </div><br><br>
        <br><br><br>
<h3>
    Làm sao để tôi được đổi trả?
</h3>
        <br><br><br>
        <h4><a>
    Khi sản phẩm bạn nhận được không như mô tả:<br><br>
    - Sai lệch về kích thước<br>
    - Sai màu sắc<br>
    - Giao sai số lượng ( bạn có thể liên hệ sđt nhân viên để được gửi bù hàng 0398.054.398)<br>
    - Phí đổi trả shop sẽ thanh toán cho bạn nên bạn yên tâm nhé !<br>
                - Thời gian kể từ lúc nhận hàng chưa quá 72 giờ (3 ngày)
                <br><br><br>
    Bạn cũng có thể đổi trả nếu sản phẩm không vừa ý bạn trong 1 ngày <br><br>
    - Bạn phải cam kết sản phẩm chưa qua sử dụng<br>
    - Sản phẩm còn nguyên tem mác của kimochi store<br>
    - Phí đổi trả do bạn chi trả hoàn toàn<br>
</a></h4>
        <br><br><br>
        <div  class="image">
            <img data-v-60e8697e="" src="images/about/hoantien.jpg" class="center-block" alt="our purpose">
        </div><br><br>
        <br><br><br>
<h3>
    Sau bao lâu tôi nhận được tiền hoàn trả
</h3><br><br>
<h4><a>
    Sau khi nhân viên shop nhận được sản phẩm sẽ tiền hành hoàn tiền cho bạn theo 2 cách.<br><br><br>
    - Nếu bạn trả hàng qua shipper bạn vui lòng cung cấp số tài khoản và thông tin đơn hàng cho shipper (sđt, tên, sp, sl, ngày đặt)<br>
    Shop sẽ chuyển khoản cho bạn ngay sau khi hàng đổi trả đúng như mô tả của bạn.<br><br>

    - Nếu bạn trả hàng qua shipper và dùng COD bạn vui lòng cung cấp thông tin đơn hàng cho shipper (sđt, tên, sp, sl, ngày đặt)<br><br>

    Bạn cũng có thể ghé qua shop để nhân viên trợ giúp đổi trả cho tiện nhé<br>
    </a>
</h4><br><br><br><br>
<h2>
    Cám ơn quý khách đã quan tâm tới Kimochi.store
</h2>
        <br><br><br><br>


</div>
</div>
<?php include 'footer.html';?>
</body>
</html>

