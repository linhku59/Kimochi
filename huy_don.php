<?php session_start();
include('connection.php');
?>
<?php

$id_dh= $_GET['ma_don'];
$id = $_GET['id'];
$sql =  "DELETE FROM don_hang WHERE ((don_hang.thoi_gian = '$id_dh') and (don_hang.ten_dang_nhap = '$id')) ";
$result = mysqli_query($ketnoi, $sql);

?>
<h1> ĐÃ XÓA ĐƠN THÀNH CÔNG</h1>
<meta http-equiv="refresh" content="1;'quan_ly_don_hang.php'">
<a href='quan_ly_don_hang.php'> Quay lại </a>

