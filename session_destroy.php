<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<?php echo " Đang đăng xuất ..."   ?>
<hr>
<?php session_destroy();  ?>
<meta http-equiv="refresh" content="0;'index.php'">
<a href='index.php'> Quay lại </a>
</body>
</html>