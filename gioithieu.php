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
        Giới thiệu
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet">
</head>
<?php  if ( !(isset($_SESSION['km']))){include 'km.html';}?>

<div class="clearfix"></div>
<?php include 'header.html';?>
<body  style="background:url('images/background/full2.jpg');background-size:auto; background-attachment:fixed">
<div class="wrapper">
    <div class="container">

        <main>

            <br><br>

                  
                    <div  class="image">
                        <img data-v-60e8697e="" src="images/about/1.png" class="center-block" alt="our purpose">
                    </div><br><br>
                        <h3 data-v-60e8697e="">Kimochi Store là mô hình kinh doanh đầu tiên của chúng tôi dựa trên định hướng khởi nghiệp.</h3>
            <br><br><p data-v-60e8697e="" class="parag">Ra mắt năm tháng 10 năm 2019, Kimochi được xây dựng nhằm cung cấp cho người sử dùng những
                            trải nghiệm thú vị an toàn và nhanh chóng khi mua sắm trực tuyến thông qua sự hỗ trợ của các thanh viên trong Kimochi-team.</p>
                        <p data-v-60e8697e="" class="parag">Chúng tôi có triết lý kinh doanh rằng, tất cả các sản phẩm phải có chất lượng cao, tuy đơn giản nhưng mang đến cảm xúc thú vị.
                           Chính triết lý này đã đem tới thành công bước đầu cho kimochi store, truyền cảm hứng và thúc đẩy chúng tôi phấn đấu đem tới những sản phẩm tốt hơn mỗi ngày.</p>
                        <p data-v-60e8697e="">
                            <br><br><h3> Nhóm gồm 10 thành viên, luôn đoàn kết, vui vẻ, giúp đỡ lẫn nhau </h3>
            <br><br>



            <div  class="image">
                        <img data-v-60e8697e="" class="center-block" src="images/about/2.jpg" alt="our purpose">
                    </div><br><br>
                    <div data-v-60e8697e="" class="text"><h3 data-v-60e8697e="" class="title">Mục tiêu của nhóm chúng tôi</h3>
                        <br><br>   <p data-v-60e8697e="" class="parag">Chúng tôi thật sự tin tưởng vào sức mạnh khai triển của công nghệ và mong muốn tận dụng nó và kimochi chính là đứa con đầu tay của chúng tôi. Dù có thu được kết quả kinh doanh như nào thì chúng tôi vẫn rất vui vì những trải nghiệm đã đem lại trong suốt quá trình  gắn bó với dự án này</p>
                        <div data-v-60e8697e="" class="text"><h3 data-v-60e8697e="" class="title">Tính cách các thành viên</h3> </div>
                        <img data-v-60e8697e="" src="images/about/3.png" alt="our purpose">
                    </div>


                    <div data-v-60e8697e="" class="text"><h3 data-v-60e8697e="" class="title">Chúng tôi xin cam kết </h3>
                        <p data-v-60e8697e="" class="parag">Chúng tôi luôn hướng đến sự cam kết. Chúng tôi cam kết với giá trị của công ty, với quy định pháp luật, với khách hàng và các đối tác. Chúng tôi cam kết với nhau. Nhưng trên hết, chúng tôi cam kết sẽ làm tốt nhất và trở thành tốt nhất có thể.</p>
                       <div class="right-text">
                        
                       </div>
                        
                    </div>
                        
        </main>


    </div>
</div>


<?php include 'footer.html';?>
</body>
</html>

