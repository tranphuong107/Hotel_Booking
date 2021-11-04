<?php
    session_start();//bảo vệ tk admin
    if(!isset($_SESSION['loginAdminOK'])){
        header ("location:login.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang quản lý</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <input type="checkbox" id ="check">
    <!-- header start  -->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar-btn"></i>
      </label>
      <label for="check">
        <h3></h3>
      </label>
          <div class="left-area">
          <a href="index.php">Trang Quản Lý</a>
          </div>
          <div class="right-area">
            <a href="logout.php" class="logout-btn">Đăng xuất</a>
          </div>
    </header>
    <!-- header end -->
    <!-- sidebar start -->
    <div class="sidebar">
      <ul>
        <li><a href=""><i class='fas fa-bed'></i><span>Phòng</span></a></li> 
        <li><a href=""><i class="fas fa-concierge-bell"></i><span>Dịch vụ</span></a></li>
        <li><a href="cus-show.php"><i class="fas fa-user"></i><span>Khách hàng</span></a></li>
        <li><a href="ordroom-show.php"><i class="fas fa-clipboard"></i><span>Đơn phòng</span></a></li>
        <li><a href="ordser-show.php"><i class="fas fa-clipboard"></i><span>Đơn dịch vụ</span></a></li>
        <li><a href=""><i class="fas fa-tools"></i><span>Giao diện</span></a></li>
        <li><a href="../user/index.php"><i class="fas fa-home"></i><span>Trang chủ</span></a></li>
      </ul>
    </div>
    <!-- sidebar end -->
    