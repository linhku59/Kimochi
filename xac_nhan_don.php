<?php session_start();
include('connection.php');
?>
<?php

$id_dh= $_GET['ma_don'];
$id = $_GET['id'];


$sql =  "UPDATE `don_hang` SET `trang_thai_don_hang` = 'Đã xác nhận' WHERE ((don_hang.thoi_gian = '$id_dh') and (don_hang.ten_dang_nhap = '$id')) ";
$result = mysqli_query($ketnoi, $sql);

?>
<h1> XÁC NHẬN THÀNH CÔNG</h1>
<meta http-equiv="refresh" content="1;'quan_ly_don_hang.php'">
<a href='quan_ly_don_hang.php'> Quản lý đơn </a>
