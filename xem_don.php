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
<?php include 'header.html';?>
<div class="wrapper">
    <div class="container">
<?php

        $id_dh= $_GET['ma_don'];
        $id = $_GET['id'];
        $sql = " SELECT * FROM `don_hang` WHERE ((don_hang.thoi_gian = '$id_dh') and (don_hang.ten_dang_nhap ='$id') ) ";
        $result = mysqli_query($ketnoi, $sql);
        $row = mysqli_fetch_array($result);

        while ($row[0] != "" ) { ?>


    <?php




        $id_sp=$row[2];
        $sql2 = " SELECT * FROM `san_pham` WHERE san_pham.ma_san_pham = '$id_sp' ";
        $result2 = mysqli_query($ketnoi, $sql2);
        $row2 = mysqli_fetch_array($result2); ?>
            <h4> <br> <br> <a> Sản phẩm </a> <?php echo $row2[1];?> <a>  số lượng  </a><?php echo $row[3];?> <a> Cỡ  </a><?php echo $row[13];?>  </h4>

        <hr>
        <?php     $row=mysqli_fetch_array($result);
        }
?>

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

