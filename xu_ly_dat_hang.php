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
                <h4 class="title">
                    Thông tin đơn hàng:
                </h4>
                <?php
                if ((isset($_SESSION['ms']) && $_SESSION['ms']))
                {

                    $id = $_SESSION['ms'];
                    $sql = " SELECT * FROM `tai_khoan` WHERE tai_khoan.ten_dang_nhap = '$id' ";
                    $result = mysqli_query($ketnoi, $sql);
                    $row = mysqli_fetch_row($result);
                    $_SESSION["hoten"]=$row[2];
                    ?>
                    <p>Họ tên: <?php echo $row[2]   ?></p>
                    <p>Số điện thoại: <?php if(isset($_POST["sdt"])) { echo $_POST["sdt"];$_SESSION['sdt']=$_POST["sdt"]; } ?></p>
                    <p>Địa chỉ: <?php if(isset($_POST["dia_chi"])) { echo $_POST["dia_chi"];$_SESSION['dia_chi']=$_POST["dia_chi"];  } ?></p>
                    <p>Cách thanh toán:  <?php if(isset($_POST["thanh_toan"])) { echo $_POST["thanh_toan"];$_SESSION['thanh_toan']=$_POST["thanh_toan"];  } ?></p>
                    <p>Ghi chú : <?php if(isset($_POST["ghi_chu"])) { echo $_POST["ghi_chu"]; $_SESSION['ghi_chu']=$_POST["ghi_chu"]; } ?></p>
                    <p>Tổng giá trị đơn hàng: <?php if(isset($_SESSION["total"])) { echo $_SESSION["total"]; } ?></p>
                    <?php
                    echo "Danh sách sản phẩm: <br><br>";
                    for ($j = 1; $j < ($_SESSION["stt"]+1); $j++)
                    {

                        if ($_SESSION["oder"][$j][2] > 0)
                        {   $id_check=$_SESSION["oder"][$j][1];
                            $sql = "SELECT * FROM `san_pham` WHERE san_pham.ma_san_pham = '$id_check'";
                            $result = mysqli_query($ketnoi, $sql);
                            $all=mysqli_fetch_array($result);
                            echo " => ",$all[1] ,"   Số lượng ",$_SESSION["oder"][$j][2],"    cỡ ",$_SESSION["oder"][$j][3], "<br><br>";
                        }
                    }
                    ?>
                    <h3> Đặt hàng </h3>
                    <br>
                    <br>
                    <h5> Lưu ý: không thể hoàn tác hành động này!</h5>
                    <br>
                    <form action="xu_ly_dat_hang.php" method="post">
                        <p> Xác nhận đặt là bạn chấp nhận chính sách đổi trả và bảo hành <input type="hidden" name="xac_nhan" value="xn"> </p>
                            <td>   <button type="submit">Đặt hàng</button></td>
                        </tr>
                    </form>
                    <br>
                <?php
                }
                else


                    {
                $id = $_SESSION['ms'];
                $sql = " SELECT * FROM `tai_khoan` WHERE tai_khoan.ten_dang_nhap = '$id' ";
                $result = mysqli_query($ketnoi, $sql);
                $row = mysqli_fetch_row($result);
                ?>
                    <p>Họ tên: <?php if(isset($_POST["hoten"])) { echo $_POST["hoten"]; $_SESSION['hoten']=$_POST["hoten"]; } ?></p>
                    <p>Email ( dùng để kiểm tra lịch sử đơn hàng): <?php if(isset($_POST["email"])) { echo $_POST["email"]; $email=$_POST["email"]; } ?></p>
                    <p>Số điện thoại: <?php if(isset($_POST["sdt"])) { echo $_POST["sdt"];$_SESSION['sdt']=$_POST["sdt"]; } ?></p>
                    <p>Địa chỉ: <?php if(isset($_POST["dia_chi"])) { echo $_POST["dia_chi"];$_SESSION['dia_chi']=$_POST["dia_chi"];  } ?></p>
                    <p>Cách thanh toán:  <?php if(isset($_POST["thanh_toan"])) { echo $_POST["thanh_toan"];$_SESSION['thanh_toan']=$_POST["thanh_toan"];  } ?></p>
                    <p>Ghi chú : <?php if(isset($_POST["ghi_chu"])) { echo $_POST["ghi_chu"]; $_SESSION['ghi_chu']=$_POST["ghi_chu"]; } ?></p>
                    <p>Tổng giá trị đơn hàng: <?php if(isset($_SESSION["total"])) { echo $_SESSION["total"]; } ?></p>
                <?php
                echo "Danh sách sản phẩm: <br><br>";
                for ($j = 1; $j < ($_SESSION["stt"]+1); $j++)
                {

                    if ($_SESSION["oder"][$j][2] > 0)
                    {   $id_check=$_SESSION["oder"][$j][1];
                        $sql = "SELECT * FROM `san_pham` WHERE san_pham.ma_san_pham = '$id_check'";
                        $result = mysqli_query($ketnoi, $sql);
                        $all=mysqli_fetch_array($result);
                        echo " => ",$all[1] ,"   Số lượng ",$_SESSION["oder"][$j][2],"    cỡ ",$_SESSION["oder"][$j][3], "<br><br>";
                    }
                }
                ?>
                    <h3> Đặt hàng </h3>
                <br>
                <br>
                    <h5> Lưu ý: không thể hoàn tác hành động này!</h5>
                <br>
                    <form action="xu_ly_dat_hang.php" method="post">
                        <input type="hidden" name="email" value="<?php echo $email ?>">
                        <p> Xác nhận đặt là bạn chấp nhận chính sách đổi trả và bảo hành <input type="hidden" name="xac_nhan" value="xn"> </p>
                        <td>   <button type="submit">Đặt hàng</button></td>
                        </tr>
                    </form>
                <br>
                    <?php
                }
                ?>






                <?php if($_POST["xac_nhan"]=="xn" and $_SESSION["total"] != 0)
                {

                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = getdate();
                    $time = date('Y-m-d H:i');
                    echo $time;
                    for ($j = 1; $j < ($_SESSION["stt"]+1); $j++)
                    {
                        if ($_SESSION["oder"][$j][2] > 0)
                        {   $id_check=$_SESSION["oder"][$j][1];
                            $sl=$_SESSION["oder"][$j][2];
                            $size=$_SESSION["oder"][$j][3];
                            $ghichu=$_SESSION["ghi_chu"];
                            $thanhtoan=$_SESSION["thanh_toan"];
                            $dia_chi=$_SESSION["dia_chi"];
                            $sdt=$_SESSION["sdt"];
                            $hoten=$_SESSION["hoten"];
                            $_POST["email"];
                            $tongtien=$_SESSION["total"];
                            $sql_add="INSERT INTO `don_hang` (`ten_dang_nhap`, `ma_san_pham`, `so_luong`, `ghi_chu`, `thanh_toan`, `dia_chi_giao_hang`, `trang_thai_don_hang`, `ho_ten`, `sdt`, `thoi_gian`,`email`,`tongtien`,`size`) VALUES ( '$id', '$id_check', '$sl', '$ghichu', '$thanhtoan', '$dia_chi', 'Chưa xác nhận', '$hoten', '$sdt', '$time' ,'$email','$tongtien','$size');";
                            $result=mysqli_query($ketnoi,$sql_add);

                        }
                    }
                    echo "Đã đặt hàng ";

                    for ($j = 1; $j < ($_SESSION["stt"]+1); $j++)
                    {
                         unset($_SESSION["oder"][$j][1]);
                            unset($_SESSION["oder"][$j][2]);
                            unset($_SESSION["oder"][$j][3]);

                    }



                ?>

                    <meta http-equiv="refresh" content="1;'index.php'">
                    '<script type="text/javascript">alert("Đặt hàng thành công, đơn hàng đang chờ xác nhận và sẽ có nhân viên gọi điện xác nhận cho bạn, kiểm tra đơn hàng trong phần lịch sử nhé");</script>';
                <?php
                } ?>


                <div class="clearfix">
                </div>


            </div>
        </div>
    </div>
</div>
    </html><?php
include 'footer.html';
?>