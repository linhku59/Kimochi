<?php session_start();
include('connection.php');?>
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
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100'
        rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet">
</head>
<?php include 'header.html';
?>
<div class="container_fullwidth">
    <div class="container shopping-cart">
        <div class="row">
            <div class="col-md-12">

                <?php
                if ((isset($_SESSION['ms']) && $_SESSION['ms'])) {

                    $id = $_SESSION['ms'];
                    $sql = " SELECT * FROM `tai_khoan` WHERE tai_khoan.ten_dang_nhap = '$id' ";
                    $result = mysqli_query($ketnoi, $sql);
                    $row = mysqli_fetch_row($result);
                    ?>
                    <h4 class="title">
                        Nhập thông tin giao hàng
                    </h4>
                    <form action="xu_ly_dat_hang.php" method="post">
                        <tr>
                            <a>Tên người đặt: <?php echo $row[2] ?></a>
                        </tr>
                        <br>
                        <br>
                        <tr>
                            <td>
                                <a>Số điện thoại</a>
                            </td>
                            <br>
                            <td>
                                <input type="text" name="sdt" value="">
                            </td>
                        </tr>
                        <br>
                        <br><br>
                        <tr>
                            <td>
                                <a>Địa chỉ</a>
                            </td>
                            <br>
                            <td>
                                <input type="text" name="dia_chi" value=""></p>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <a>Ghi chú</a>
                            </td>
                            <br>
                            <td>
                                <input type="text" name="ghi_chu" value=""></p>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <a>Cách thanh toán:</a>
                            </td>
                            <td>
                                <p> Chuyển khoản <input type="radio" name="thanh_toan" value="Chuyển khoản">Thanh toán khi nhận hàng <input type="radio" name="thanh_toan" value="COD"></p>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td></td>
                            <td>   <button type="submit">Bước tiếp theo</button></td>
                        </tr>
                    </form>




                    <?php
                } else {

                    ?>
                    <h4 class="title">
                        Úi tà tà, bạn chưa đăng nhập đâu nhé
                    </h4>
                    <h5>"Hãy đăng ký tài khoản của kimochi store để đặt hàng nhé"</h5><br>
                    <a href="login.php" class="reg">
                        <h4>Đăng nhập
                    </a>
                    <b> hoặc </b>
                    <a href="dang_ky.php" class="reg">
                        Đăng ký</h4>
                    </a>
                    <br>
                    <?php
                    echo "<br> Kimochi cam kết bảo vệ thông tin khách hàng tuyệt đối "; ?>
                    <a href="baovekhachang.php" class="reg">
                        Xem chính sách của chúng tôi
                    </a><br><br><br>
                    <h4 class="title">
                        Đặt hàng không cần đăng ký
                    </h4>

                    <form action="xu_ly_dat_hang.php" method="post">
                        <br><br><br>
                        <tr>
                            <td>
                                <a>Tên của bạn</a>
                            </td>
                            <br>
                            <td>
                                <input type="text" name="hoten" value="">
                            </td>
                        </tr>
                        <br><br><br>
                        <tr>
                            <td>
                                <a>Email (dùng để kiểm tra đơn hàng)</a>
                            </td>
                            <br>
                            <td>
                                <input type="text" name="email" value="">
                            </td>
                        </tr>
                        <br><br><br>
                        <tr>
                            <td>
                                <a>Số điện thoại</a>
                            </td>
                            <br>
                            <td>
                                <input type="text" name="sdt" value="">
                            </td>
                        </tr>
                        <br>
                        <br><br>
                        <tr>
                            <td>
                                <a>Địa chỉ</a>
                            </td>
                            <br>
                            <td>
                                <input type="text" name="dia_chi" value=""></p>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <a>Ghi chú</a>
                            </td>
                            <br>
                            <td>
                                <input type="text" name="ghi_chu" value=""></p>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <a>Cách thanh toán:</a>
                            </td>
                            <td>
                                <p> Chuyển khoản <input type="radio" name="thanh_toan" value="Chuyển khoản">Thanh toán khi nhận hàng <input type="radio" name="thanh_toan" value="COD"></p>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td></td>
                            <td>   <button type="submit">Bước tiếp theo</button></td>
                        </tr>
                    </form>
                    <?php




                }
                ?>


                <div class="clearfix">
                </div>


            </div>
        </div>
    </div>
</div>






    </html><?php
include 'footer.html';
?>