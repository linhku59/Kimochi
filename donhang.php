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
        Đơn hàng
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
        if ($_SESSION['ms']=="admin") { ?>
            <br>
            <br>
            <a href="quan_ly_don_hang.php" class="reg">
                Quản lý đơn (admin)
            </a>
            <?php
        }


        if ((isset($_SESSION['ms']) && $_SESSION['ms']))
        {
            $compare = "0";
            $id = $_SESSION['ms'];
            $sql = " SELECT * FROM `don_hang` WHERE don_hang.ten_dang_nhap = '$id' ";
            $result = mysqli_query($ketnoi, $sql);
            $row = mysqli_fetch_array($result); ?>
            <h4> <br> <br> Chào bạn <?php echo $row[8];?> </h4>
            <h4> <br> <br> Đây là các đơn hàng bạn đã đặt  </h4>
            <hr>

            <?php
            ?>

            <?php
            while ($row[2] != "")
            { ?>
                <?php
                if ($compare != $row[10]) {
                    ?>

                    <a> Mã đơn hàng / Thời gian đặt [<?php echo $row[10] ?> ]</a>
                    <a> - Trạng thái <?php echo $row[7] ?></a>
                    <a> - Ghi chú <?php echo $row[4] ?></a>
                    <a> - giao tới <?php echo $row[6] ?></a>
                    <a> - SĐT <?php echo $row[9] ?></a>
                    <a> - Tổng tiền <?php echo $row[12]/1000,".000" ?></a>
                    <a> - Phương thức <?php echo $row[5] ?></a>
                    <br> <br>
                    <form action='xem_don.php' method='GET'>
                        <input type="hidden" name="ma_don" value="<?php echo $row[10] ?>">
                        <input type="hidden" name="id" value="<?php echo $row[1] ?>">
                        <button type="submit">Xem chi tiết</button></td>



                    </form>
                    <br>
                    <hr>

                    <?php
                }
                ?>
                <?php
                $compare = $row[10];
                $row = mysqli_fetch_array($result);
                ?>
                <?php
            }
            ?>
            <?php
        }
        else
        {
            echo " <h3><br><br> Bạn chưa đăng nhập, nhập email để tra cứu đơn hàng đã đặt <br></h3> <br><br><br><br><br> " ;
            ?>
            <form action='xem_don_bang_email.php' method='GET'>
                <input type="text" name="email" placeholder="Nhập email đặt hàng ">


                <button type="submit">Tra cứu </button></td>
            </form>
            <br><br><br>
            <br>
            <br>
            <h4 class="title">
                Hãy đăng ký hoặc đăng nhập để có thể quản lý đơn hàng và đặt hàng thuận tiện hơn nhé
            </h4> <br>
            <br>
            <br>
            <a href="login.php" class="reg">
                <h4>Đăng nhập
            </a>
            <b> hoặc </b>
            <a href="dang_ky.php" class="reg">
                Đăng ký</h4>
            </a>
            <br>
            <br>
            <br>
            <?php
            echo "<br> <br>Kimochi cam kết bảo vệ thông tin khách hàng tuyệt đối "; ?>
            <a href="baovekhachang.php" class="reg">
                Xem chính sách của chúng tôi
            </a><br><br><br><br>


       <br><br>
            <?php
        }
        ?>
        <?php
        if ($compare=="0")  { echo "<h3>Bạn chưa hoàn thành đơn hàng nào</h3>";}
        ?>
        <?php
        $sql = " SELECT * FROM `san_pham` ";
        $result = mysqli_query($ketnoi, $sql);
        $all=mysqli_fetch_array($result);
        $i=0;

        ?>
        <br>
        <hr>
        <br>
        <br>
        <div class="hot-products">
            <h3 class="title"><strong>Có thể bạn sẽ thích</strong></h3>
            <ul id="hot">
                <li>
                    <div class="row">
                        <?php
                        while ($all[0] != "" and $i<8) { ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="products">
                                    <div class="thumbnail">
                                        <a href="xem_chi_tiet.php?id=<?php echo $all[0] ?>"><img src="images/products/min/<?php echo $all[0] ?>-1.jpg" alt="Hinh anh"></a>
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
                            $i=$i+1;
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
        <! -- Thương hiệu -->

        <div class="our-brand">
            <h3 class="title"><strong>Kimochi store</strong> đồng hành cùng</h3>
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

