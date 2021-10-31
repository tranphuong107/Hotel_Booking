<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
      .nav-link:hover{
        color: #FFC40E !important;
      }
      .my-bg{
        background-color:#ffbe76;
      }
    </style>

  </head>
  <body>
  <section style = "background-color:white">
    <div class = "container" >
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top pt-3">
      <div class="container row align-items-center">
        <div class = "col-3">
          <a class="navbar-brand" href="index.php">
            <img src="http://mauweb.monamedia.net/howello/wp-content/uploads/2019/03/logo.png" alt=""class = "img-fluid">
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

                <?php
                   //bảo vệ tk user
                   session_start();// ở đây có dịch vụ bảo vệ
                   if(isset($_SESSION['loginUserOK'])){ 
                       echo '<a href="#" class = "nav-link fs-6 fw-bold text-decoration-none mx-2" style = "color:black">Đơn hàng</a>';
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
</section>

 
