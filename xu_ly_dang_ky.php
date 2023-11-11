<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
include('connection.php');
echo "Trạng thái kết nối: ";
if (mysqli_connect_error()) {echo " Thất bại" . mysqli_connect_error();}
else  { echo " Đã kết nối "; } ?>  <hr>
<?php
if (isset($_POST['dangky']))
{
    $username = addslashes($_POST['dk_ten_dang_nhap']);
    $password = addslashes($_POST['dk_mat_khau']);
    $hoten = addslashes($_POST['dk_ho_ten']);
    $diachi= addslashes($_POST['dk_dia_chi']);
    $sodienthoai = addslashes($_POST['dk_so_dien_thoai']);
    $email = addslashes($_POST['dk_email']);

    if (($username == "" ) or ($hoten=="")  or ($email=="") or ($password==""))
    {
        echo "Vui lòng nhập đầy đủ các mục có dấu * ."; ?>
        <a href='javascript: history.go(-1)'> Quay lại </a>
        <?php
        exit;
    }
    else
    {
        $sql_kiem_tra_tai_khoan = "SELECT * FROM `tai_khoan` WHERE tai_khoan.ten_dang_nhap='$username' or tai_khoan.email='$email' or tai_khoan.so_dien_thoai='$sodienthoai' ";



        if ($result = mysqli_query($ketnoi,$sql_kiem_tra_tai_khoan))
        {
            $rowcount=mysqli_num_rows($result);
            if ($rowcount == 0 ) {
                echo "Chúc mừng Đăng ký thành công tài khoán: " ,$email;
                echo "<br>Họ tên:  ",$hoten;
                echo "<br>Email:  ",$email;
                echo "<br>SĐT: ",$sodienthoai;
                $sql_them_tai_khoan = " INSERT INTO `tai_khoan`(`ten_dang_nhap`, `mat_khau`, `ten`, `dia_chi`, `so_dien_thoai`, `email`) VALUES ('$username','$password','$hoten','$diachi','$sodienthoai','$email')";
                $result = mysqli_query($ketnoi,$sql_them_tai_khoan);
                ?>
                <br>
    <meta http-equiv="refresh" content="1;'login.php'">
        <script type="text/javascript">alert("Đặt ký thành công, nhớ ghi đúng tên đăng nhập hoặc email để đăng nhập nhé ")</script>;

        <a href='login.php'> Trang chủ </a>
                <?php
                exit;            }
            else                 {
                $_SESSION['ms'] = $username;
                echo "Tên đăng nhập, số điện thoại hoặc email đã tồn tại " ; ?>
                <meta http-equiv="refresh" content="3;'index.php'">
                <a href='index.php'> Quay lại </a>
                <?php
                           }
        }

    }
}
else echo "Xin mời đăng nhập";  ?>
</body>
</html>