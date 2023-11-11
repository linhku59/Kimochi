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

<div class="clearfix"></div>
<?php include 'header.html';?>
<div class="wrapper">
    <div class="container">
        <?php

        $id_dh= $_GET['email'];

        $sql = " SELECT * FROM `don_hang` WHERE don_hang.email = '$id_dh' ";
        $result = mysqli_query($ketnoi, $sql);
        $row = mysqli_fetch_array($result);
        echo "<h4> <br><a> Tên người đặt </a> ",$row[8],"</h4>" ;
        echo "<h4> <br><a>Số điện thoại đặt hàng</a> ",$row[9],"</h4>" ;
        echo "<h4> <br><a>Thời gian đặt hàng </a>",$row[10],"</h4>" ;
        echo "<h4> <br><a>Địa chỉ giao hàng</a> ",$row[6],"</h4>" ;
        echo "<h4> <br><a>Trạng thái</a> ",$row[7],"</h4>" ;
        echo "<h4> <br><a>Ghi chú</a> ",$row[4],"</h4>" ;
        echo "<h4> <br><a>Tổng giá trị đơn hàng </a>",$row[12]/1000,".000</h4>" ;
        echo "<h4> <br><br><a>Danh sách sản phẩm: </a> </h4>";
        while ($row[0] != "" ) { ?>


            <?php




            $id_sp=$row[2];
            $sql2 = " SELECT * FROM `san_pham` WHERE san_pham.ma_san_pham = '$id_sp' ";
            $result2 = mysqli_query($ketnoi, $sql2);
            $row2 = mysqli_fetch_array($result2); ?>
            <h4 class="title"> <br> <br> <a> Tên  </a> <?php echo $row2[1];?> <a>  số lượng  </a><?php echo $row[3];?><a> Size</a><?php echo $row[13];?> </h4>

            <hr>
            <?php     $row=mysqli_fetch_array($result);
        }
        ?>
        <a>Lưu ý: Nếu bạn đặt 2 đơn và vẫn không đăng ký tài khoản, hệ thống tra cứu chỉ tiếp nhận đơn gần nhất của bạn thui nha</a>
        <! -- Thương hiệu -->

        <div class="our-brand">
            <h3 class="title"><strong>Kimochi store</strong> Đồng hành cùng</h3>
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
        <! -- Hết thẻ Thương hiệu -->
    </div>
</div>

<?php include 'footer.html';?>
</body>
</html>

