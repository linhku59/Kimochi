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
if (isset($_POST['dangnhap']))
{
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    if (!$username || !$password)
    {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu!";
        echo "Đăng nhập lại sau 3 giây"  ?>
        <meta http-equiv="refresh" content="3;'index.php'">
        <a href='javascript: history.go(-1)'> Quay lại </a>
        <?php
        exit;
    }
    $sql_acc_check = " SELECT * FROM tai_khoan WHERE ten_dang_nhap='$username'and mat_khau='$password'";
    if ($result = mysqli_query($ketnoi,$sql_acc_check))
    {
        $rowcount=mysqli_num_rows($result);
        if ($rowcount == 0 ) {
            echo "Kiểm tra lại tài khoản, mật khẩu";
            echo "Đăng nhập lại sau 3 giây"  ?>
            <a href='javascript: history.go(-1)'> Quay lại </a>
            <?php
            exit;            }
        else                 {
            $_SESSION['ms'] = $username;
            echo " Đăng nhập thành công, đợi xíu nhé... ",$username ; ?>
            <meta http-equiv="refresh" content="0;'index.php'">
            <a href='index.php'>về Trang chủ</a>
            <?php
            exit;            }
    }
}
else echo "Xin mời đăng nhập";  ?>
</body>
</html>