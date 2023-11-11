<?php session_start();
include('connection.php');
error_reporting(0);
?>
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

<?php include 'header.html';?>



<?php
$_SESSION["km"]="true";
$tong_tien=0;
$id_sp= $_GET['id'];
$action = $_GET['action'];
if ($id_sp != "" and $action == 'one')
    {
        for ($i = 1; $i < ($_SESSION["stt"] + 1); $i++) {
            if ($_SESSION["oder"][$i][1] == $id_sp) {
                $_SESSION["oder"][$i][2] = $_SESSION["oder"][$i][2] - 1 ;
                break;
            }
        }

    }
if ($id_sp != "" and $action == 'M')
{
    for ($i = 1; $i < ($_SESSION["stt"] + 1); $i++) {
        if ($_SESSION["oder"][$i][1] == $id_sp) {
            $_SESSION["oder"][$i][3] = "M" ;
            break;
        }
    }

}
if ($id_sp != "" and $action == 'XL')
{
    for ($i = 1; $i < ($_SESSION["stt"] + 1); $i++) {
        if ($_SESSION["oder"][$i][1] == $id_sp) {
            $_SESSION["oder"][$i][3] = "XL" ;
            break;
        }
    }

}
if ($id_sp != "" and $action == 'L')
{
    for ($i = 1; $i < ($_SESSION["stt"] + 1); $i++) {
        if ($_SESSION["oder"][$i][1] == $id_sp) {
            $_SESSION["oder"][$i][3] = "L" ;
            break;
        }
    }

}
if ($id_sp != "" and $action == 'all')
{
    for ($i = 1; $i < ($_SESSION["stt"] + 1); $i++) {
        if ($_SESSION["oder"][$i][1] == $id_sp) {
            $_SESSION["oder"][$i][2] = "0";
            break;
        }
    }
}
if ($action == "") {
    if ($_SESSION["stt"] == null and $id_sp != "") {
        $_SESSION["stt"] = 1;
        $_SESSION["oder"][$_SESSION["stt"]][1] = $id_sp;
        $_SESSION["oder"][$_SESSION["stt"]][2] = 1;
        $_SESSION["oder"][$_SESSION["stt"]][3] = "L";
        $da_them = 1;
    } else
        if ($id_sp != "") {

            {
                for ($i = 1; $i < ($_SESSION["stt"] + 1); $i++) {
                    if ($_SESSION["oder"][$i][1] == $id_sp) {
                        $_SESSION["oder"][$i][2] = $_SESSION["oder"][$i][2] + 1;
                        $da_them = 1;
                        break;
                    } else {
                        $da_them = 0;
                    }
                }

            }
        }
    if ($da_them == 0 and $id_sp != "") {
        $_SESSION["stt"] = $_SESSION["stt"] + 1;
        $_SESSION["oder"][$_SESSION["stt"]][1] = $id_sp;
        $_SESSION["oder"][$_SESSION["stt"]][2] = 1;
        $_SESSION["oder"][$_SESSION["stt"]][3] = "L";
    }
}
?>

<div class="container_fullwidth">
    <div class="container shopping-cart">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">
                    Giỏ hàng của bạn
                </h3>
                <div class="clearfix">
                </div>
                <table class="shop-table">
                    <thead>
                    <tr>
                        <th>
                            Ảnh
                        </th>
                        <th>
                            Chi tiết
                        </th>
                        <th>
                            Chọn cỡ
                        </th>
                        <th>
                            Số lượng
                        </th>
                        <th>
                            Thành tiền
                        </th>
                        <th>
                            Xóa
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $tong_so_luong=0;
                    for ($j = 1; $j < ($_SESSION["stt"]+1); $j++)
                        { $id_check = $_SESSION["oder"][$j][1];
                            $sql = "SELECT * FROM `san_pham` WHERE san_pham.ma_san_pham = '$id_check'";
                            $result = mysqli_query($ketnoi, $sql);
                            $all=mysqli_fetch_array($result);
                            if ($_SESSION["oder"][$j][2]<1)
                            {continue;}
                            ?>

                    <tr>
                        <td>
                            <img src="images/products/min/<?php echo $_SESSION["oder"][$j][1] ?>-1.jpg" alt="Hinh anh">
                        </td>
                        <td>
                            <div class="shop-details">
                                <div class="productname">
                                    <?php echo $all[1]; ?>
                                </div>
                                <div class="color-choser">
                          <span class="text">
                            Cỡ sản phẩm :
                          </span>
                                    <ul>
                                        <?php
                                            echo $_SESSION["oder"][$j][3];
                                        ?>
                                    </ul>
                                </div>
                                <p>
                                    Mã sản phẩm :
                                    <strong class="pcode">
                                        <?php echo $_SESSION["oder"][$j][1]; ?>
                                    </strong>
                                </p>
                                <p>
                                    Đơn giá:
                                    <strong class="pcode">
                                        <?php echo $all[3] ?>
                                    </strong>
                                </p>
                            </div>
                        </td>
                        <td>
                            <h5>
                                <a href="add_cart.php?id=<?php echo $_SESSION["oder"][$j][1] ?>&action=M">
                                    <img src="images/sizeM.png" alt="">
                                </a>
                                <a href="add_cart.php?id=<?php echo $_SESSION["oder"][$j][1] ?>&action=L">
                                    <img src="images/sizeL.png" alt="">
                                </a>
                                <a href="add_cart.php?id=<?php echo $_SESSION["oder"][$j][1] ?>&action=XL">
                                    <img src="images/sizeXL.png" alt="">
                                </a>
                            </h5>
                        </td>
                        <td>
                            <h5>
                                <?php echo $_SESSION["oder"][$j][2], " cái"; ?>
                                <a href="add_cart.php?id=<?php echo $_SESSION["oder"][$j][1] ?>&action=">
                                    <img src="images/plus.png" alt="">
                                </a>
                                <a href="add_cart.php?id=<?php echo $_SESSION["oder"][$j][1] ?>&action=one">
                                    <img src="images/reduction.png" alt="">
                                </a>

                            </h5>
                        </td>
                        <td>
                            <h5>
                                <strong class="red">
                                   <?php echo ($all[3]* $_SESSION["oder"][$j][2])/1000,".000 đ" ;
                                   $tong_tien = ($tong_tien + ($all[3]* $_SESSION["oder"][$j][2]));
                                   $tong_so_luong= $tong_so_luong +$_SESSION["oder"][$j][2];?>

                                </strong>
                            </h5>
                        </td>
                        <td>
                            <a href="add_cart.php?id=<?php echo $_SESSION["oder"][$j][1] ?>&action=all">
                                <img src="images/remove.png" alt="">
                            </a>
                        </td>
                    </tr>

                    <?php
                        }
                    ?>



                    </tbody>

                </table>
                <div class="clearfix">
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="shippingbox">
                            <h4>Chú ý ! <br> <br>
                                <a>Số lượng & kích cỡ nhé.</a>
                                <br>
                            </h4>
                            <h6>
                                <?php
                                if ( !(isset($_SESSION['ms']) && $_SESSION['ms']))
                                {
                                echo "<br> Có vẻ như bạn chưa đăng nhập, hãy đăng nhập để đặt hàng nhé! <br><br>"; ?>
                                <a href="login.php">
                                    <button>Đăng nhập</button>
                                    <?php
                                    }
                                else
                                {  ?>
                                    <br>
                                    <br>
                                    <a href="session_destroy.php" class="reg">
                                        Đăng xuất & Xóa giỏ hàng
                                    </a>
                                    <?php
                                }
                                ?>


                                </a>

                            </h6>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="shippingbox">
                            <h4>
                                <a>Bạn có mã giảm giá ?</a>
                                <br>
                                <br>
                            </h4>
                            <form>
                                <label>
                                    Nhập vào ô bên dưới nhé
                                </label>
                                <input type="text" name="">
                                <div class="clearfix">
                                </div>
                                <button onclick="alert('Voucher không hợp lệ')" >
                                    Kiểm tra
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div  class="shippingbox">
                            <h4 class="center-text">
                                <a> Đơn hàng của bạn : </a>
                                <br>
                                <br>
                            </h4>
                            <div class="subtotal">
                                <h5>
                                    Số lượng:
                                </h5>
                                <span>
                        <?php echo $tong_so_luong ; ?>
                      </span>
                            </div>

                            <div class="grandtotal">
                                <h5>
                                    Thành Tiền:
                                </h5>
                                <span>
                        <?php echo $tong_tien/1000, ".000 đ"?>
                      </span>
                            </div>

                        </div> <tfoot>
                        <tr>
                            <td colspan="6">
                                <a href="index.php">
                                    <button>Xem thêm sản phẩm</button>

                                </a>
                                <a href="dat_hang.php">
                                    <button class=" pull-right">Tiếp theo</button>
                                </a>
                            </td>
                        </tr>
                        </tfoot>
                    </div>

                </div>
            </div>
        </div>
        <?php
        $_SESSION["total"]=$tong_tien;
        ?>
        <div class="clearfix">
        </div>
        <div class="our-brand">
            <h3 class="title">
                <strong>
                    Our
                </strong>
                Brands
            </h3>
            <div class="control">
                <a id="prev_brand" class="prev" href="#">
                    &lt;
                </a>
                <a id="next_brand" class="next" href="#">
                    &gt;
                </a>
            </div>
            <ul id="braldLogo">
                <li>
                    <ul class="brand_item">
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/envato.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/themeforest.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/photodune.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/activeden.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/envato.png" alt="">
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="brand_item">
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/envato.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/themeforest.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/photodune.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/activeden.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="brand-logo">
                                    <img src="images/envato.png" alt="">
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


<?php include 'footer.html';?>






</html>
