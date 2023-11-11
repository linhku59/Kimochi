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
        <title>Welcome to FlatShop</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
        <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
        <link href="css/style.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>

<link href="css/style.css" rel="stylesheet">
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-2">

                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo.png" alt="FlatShop">
                        </a>
                        <h3>Admin Page</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

            <?php
        if ((isset($_SESSION['ms']) && $_SESSION['ms']))
        {
            $compare = "0";
            $id = $_SESSION['ms'];
            $sql = " SELECT * FROM `don_hang` ";
            $result = mysqli_query($ketnoi, $sql);
            $row = mysqli_fetch_array($result); ?>

            <h4> <br> <br> Đơn chưa xác nhận </h4>
            <hr>

            <?php
            ?>

            <?php
            while ($row[2] != "")
            { ?>
                <?php
                if ($compare != $row[10] and $row[7]=="Chưa xác nhận") {
                    ?>

                    <a> Thời gian đặt [<?php echo $row[10] ?> ]</a>
                    <a> Tên <?php echo $row[8];?> Trạng thái: </a>
                    <b>   [<?php echo $row[7] ?>] </b>
                    <a> Địa chỉ <?php echo $row[6] ?></a>
                    <a> SĐT <?php echo $row[9] ?></a>
                    <a> Tiền <?php echo $row[12]/1000,".000" ?></a>
                    <a> TT <?php echo $row[5] ?></a>
                    <br> <br>
                    <form action='xem_don.php' method='GET'>
                        <input type="hidden" name="ma_don" value="<?php echo $row[10] ?>">
                        <input type="hidden" name="id" value="<?php echo $row[1] ?>">

                        <button type="submit">Xem chi tiết</button></td>
                    </form>
                    <br>
                    <form action='xac_nhan_don.php' method='GET'>
                        <input type="hidden" name="ma_don" value="<?php echo $row[10] ?>">
                        <input type="hidden" name="id" value="<?php echo $row[1] ?>">

                        <button type="submit">Xác nhận đơn</button></td>
                    </form>
                    <br>
                    <form action='huy_don.php' method='GET'>
                        <input type="hidden" name="ma_don" value="<?php echo $row[10] ?>">
                        <input type="hidden" name="id" value="<?php echo $row[1] ?>">

                        <button type="submit">Xóa đơn</button></td>
                    </form>
                    <br>
                    <hr>

                    <?php
                }
                ?>
                <?php
                $compare = $row[10];
                $row = mysqli_fetch_array($result);
                ?>
                <?php
            }
            ?>
            <?php
        }
        else
        {
            echo "Bạn không phải quản trị viên";
        }
        ?>




        <?php
        if ($_SESSION['ms']=="admin")
        {
            $compare = "0";
            $id = $_SESSION['ms'];
            $sql = " SELECT * FROM `don_hang` ";
            $result = mysqli_query($ketnoi, $sql);
            $row = mysqli_fetch_array($result); ?>

            <h4> <br> <br> Đơn hàng đã xác nhận  </h4>
            <hr>

            <?php
            ?>

            <?php
            while ($row[2] != "")
            { ?>
                <?php
                if ($compare != $row[10] and $row[7]=="Đã xác nhận")
                {
                    ?>

                    <a> Mã đơn hàng / Thời gian đặt [<?php echo $row[10] ?> ]</a>
                    <a> Tên người đặt <?php echo $row[8];?> </a>
                    <a> - Trạng thái <?php echo $row[7] ?></a>
                    <a> - giao tới <?php echo $row[6] ?></a>
                    <a> - SĐT <?php echo $row[9] ?></a>
                    <a> - Tổng tiền <?php echo $row[12]/1000,".000" ?></a>
                    <a> - Phương thức <?php echo $row[5] ?></a>
                    <br> <br>
                    <form action='xem_don.php' method='GET'>
                        <input type="hidden" name="ma_don" value="<?php echo $row[10] ?>">
                        <input type="hidden" name="id" value="<?php echo $row[1] ?>">

                        <button type="submit">Xem chi tiết</button></td>
                    </form>
                    <br>
                    <form action='hoan_thanh.php' method='GET'>
                        <input type="hidden" name="ma_don" value="<?php echo $row[10] ?>">
                        <input type="hidden" name="id" value="<?php echo $row[1] ?>">
                        <button type="submit">Hoàn thành</button></td>
                    </form>

                    <br>
                    <hr>

                    <?php
                }
                ?>
                <?php
                $compare = $row[10];
                $row = mysqli_fetch_array($result);
                ?>
                <?php
            }
            ?>
            <?php
        } ?>

        <?php
        if ($_SESSION['ms']=="admin")
        {
            $compare = "0";
            $id = $_SESSION['ms'];
            $sql = " SELECT * FROM `don_hang` ";
            $result = mysqli_query($ketnoi, $sql);
            $row = mysqli_fetch_array($result); ?>

            <h4> <br> <br> Đơn hàng đã hoàn thành </h4>
            <hr>

            <?php
            ?>

            <?php
            while ($row[2] != "")
            { ?>
                <?php
                if ($compare != $row[10] and $row[7]=="done")
                {
                    ?>

                    <a> Mã đơn hàng / Thời gian đặt [<?php echo $row[10] ?> ]</a>
                    <a> Tên người đặt <?php echo $row[8] ?> </a>
                    <a> - Trạng thái <?php echo $row[7] ?></a>
                    <a> - giao tới <?php echo $row[6] ?></a>
                    <a> - SĐT <?php echo $row[9] ?></a>
                    <a> - Tổng tiền <?php echo $row[12]/1000,".000" ?></a>
                    <a> - Phương thức <?php echo $row[5] ?></a>
                    <a> - Ghi chú <?php echo $row[4] ?></a>
                    <br> <br>
                    <form action='xem_don.php' method='GET'>
                        <input type="hidden" name="ma_don" value="<?php echo $madon=$row[10] ?>">
                        <input type="hidden" name="id" value="<?php echo $madon=$row[1] ?>">

                        <button type="submit">Xem chi tiết</button></td>



                    </form>
                    <br>
                    <hr>

                    <?php
                }
                ?>
                <?php
                $compare = $row[10];
                $row = mysqli_fetch_array($result);
                ?>
                <?php
            }
            ?>
            <?php
        } ?>



        <br>
        <hr>
    </div>
</body>
</html>