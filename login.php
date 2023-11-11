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
?>
<div class="container_fullwidth">
    <div class="container shopping-cart">
        <div class="row">
            <div class="col-md-12">

                <div class="clearfix">
                </div>


                <form  action='xuly.php' method='POST'>
                    <tr>
                        <h3>
                        <td style="background-color: #c2f6d6" colspan="2" align="center">
                            <strong>VUI LÒNG ĐĂNG NHẬP</strong>
                        </td>
                        </h3>
                    </tr>
                    <br>
                    <br>
                    <br>
                    <br>
                    <tr>
                        <h4><td style="background-color: #c2e6d6">Username</td></h4>
                        <td style="background-color: #c2e6d6"> <input type="text" name="txtUsername" size="40"></td>

                    </tr>
                    <br>
                    <br>
                    <br>
                    <br>
                    <tr>
                        <h4><td style="background-color: #c2e6d6">Password</td></h4>
                        <td style="background-color: #c2e6d6"><input type="password" name="txtPassword" size="40"></td>
                    </tr>
                    <br>
                    <br>
                    <br>
                    <br>
                    <tr>
                        <td colspan="2" >
                            <button class="button add-cart" type="submit" name="dangnhap" value="Đăng nhập">
                                Đăng nhập
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
                            <strong>Chưa có tài khoản sao ?</strong>
                        </td>
                    </h3>
                </tr>
                <br>
                <br>
                <tr>
                    <a href="dang_ky.php">
                        <button class="button add-cart"  type="button">

                            Đăng  ký

                        </button>
                    </a>
                </tr>
                <a href="email_login.php">
                    <button class="button add-cart"  type="button">

                        Đăng  nhập bằng email

                    </button>
                </a>





                <div class="clearfix">
                </div>


            </div>
        </div>
    </div>
</div>






<?php
include 'footer.html';
?>




