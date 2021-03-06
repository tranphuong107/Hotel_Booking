<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <style>
      .nav-link:hover{
        color: #FFC40E !important;
      }
      .my-bg{
        background-color:#ffbe76;
      }
      body{
        font-family: arial;
      }
    </style>

  </head>
  <body>

    <div class = "" style = "padding: 0.1rem 5%">
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top pt-3 navbar-scroll">
      <div class="container-fluid row align-items-center">
        <div class = "col-2">
          <a class="navbar-brand" href="index.php">
            <img src="http://mauweb.monamedia.net/howello/wp-content/uploads/2019/03/logo.png" alt="" style = "width: 14rem">
          </a></div>
        <div class = "col-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav mx-4">
                <a class="nav-link active fw-bold fs-6 text-decoration-none mx-2" style = "color:black" aria-current="page" href="index.php">Trang chủ</a>
                <a href="room.php" class = "nav-link fs-6 fw-bold text-decoration-none  mx-2" style = "color:black">Phòng</a>
                <a href="service.php" class = "nav-link  fs-6 fw-bold text-decoration-none mx-2" style = "color:black">Dịch vụ</a>
                <a href="cus-order.php" class = "nav-link fs-6 fw-bold text-decoration-none mx-2" style = "color:black">Đơn hàng</a>
                <?php
                   //bảo vệ tk user
                   session_start();// ở đây có dịch vụ bảo vệ
                   if(isset($_SESSION['loginUserOK'])){ 
                       echo '<a href="logout.php" class = "nav-link fs-6 fw-bold text-decoration-none mx-2" style = "color:black">Đăng xuất</a>';
                       echo '<label for="" class ="fs-6 fw-bold text-decoration-none mx-2 text-uppercase my-bg p-2 py-auto rounded-pill text-white">'.$_SESSION['loginUserOK'].'</label>';
                   }else
                   {
                    echo '<a href="login.php" class = "nav-link fs-6 fw-bold text-decoration-none mx-2" style = "color:black">Đăng nhập</a>';
                    echo '<a href="register.php" class = "nav-link fs-6 fw-bold text-decoration-none mx-2" style = "color:black">Đăng ký</a>';
                   }  
                ?>
                 
              </div>
            </div>
        </div>
      </div>
    </nav>
  </div>


 
