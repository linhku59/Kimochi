<?php
$ketnoi=mysqli_connect('localhost', 'root','');     // Kết nối mySQLite
mysqli_select_db($ketnoi,'kimochi');       //chọn data base
mysqli_set_charset($ketnoi,"utf8")
?>