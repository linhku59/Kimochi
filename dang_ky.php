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
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet">
</head>
<?php include 'header.html';
session_destroy();
?>
<div class="container_fullwidth">
    <div class="container shopping-cart">
        <div class="row">
            <div class="col-md-12">

                <div class="clearfix">
                </div>
                <h3>
                    <tr>
                        <td style="background-color: #c2f6d6" colspan="2" align="center">
                        <strong>Nhập đầy đủ thông tin nhé !</strong>
                         </td>
                    </tr>
                </h3>


                <form  action='xu_ly_dang_ky.php' method='POST'>
                    <tr>
                        <td style="background-color: #c2e6d6"><br>Tên đăng nhập *</td><br>
                        <td style="background-color: #c2e6d6"><br> <input type="text" name="dk_ten_dang_nhap" size="30"></td>

                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td style="background-color: #c2e6d6"><br> Mật khẩu *</td><br>
                        <td style="background-color: #c2e6d6"><br> <input type="password" name="dk_mat_khau" size="30"></td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td style="background-color: #c2e6d6"><br>Họ Tên *</td><br>
                        <td style="background-color: #c2e6d6"><br> <input type="text" name="dk_ho_ten" size="30"></td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td style="background-color: #c2e6d6"><br>Địa chỉ</td><br>
                        <td style="background-color: #c2e6d6"><br> <input type="text" name="dk_dia_chi" size="30"></td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td style="background-color: #c2e6d6"><br>Số điện thoại</td><br>
                        <td style="background-color: #c2e6d6"><br> <input type="text" name="dk_so_dien_thoai" size="30"></td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td style="background-color: #c2e6d6"><br>Email *</td>
                        <td style="background-color: #c2e6d6"><br> <input type="text" name="dk_email" size="30"></td>
                    </tr>
                    <br>
                    <br>
                    <h5>
                        <tr>
                            <td style="background-color: #c2f6d6" colspan="2" align="center">
                                <strong>Lưu ý : * không được để trống</strong>
                            </td>
                        </tr>
                    </h5>
                    <br>
                    <br>
                    <tr>
                        <td colspan="2" >
                            <button class="button add-cart" type="submit" name="dangky" value="Đăng nhập">
                                Đăng ký tài khoản
                            </button>
                        </td>
                    </tr>
                </form>
                <br>
                <br>
                <br>
                <br>
                <tr>





                    <h3>
                        <td style="background-color: #c2f6d6" colspan="2" align="center">
                            <strong>Đã có tài khoản hãy đăng nhập</strong>
                        </td>
                    </h3>
                </tr>
                <br>
                <br>
                <tr>
                    <a href="login.php">
                        <button class="button add-cart"  type="button">

                            Đăng nhập

                        </button>
                    </a>
                </tr>





                <div class="clearfix">
                </div>


            </div>
        </div>
    </div>
</div>

<?php
include 'footer.html';
?>