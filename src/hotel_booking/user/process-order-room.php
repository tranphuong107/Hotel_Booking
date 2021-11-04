<?php
     session_start();//bảo vệ tk admin
     if(isset($_SESSION['loginUserOK'])){
          $cus_name = $_SESSION['loginUserOK'];
          $room_id = $_POST['room-type'];
          $total = $_POST['total'];
          $room_total_day = $_POST['demo'];
          $order_start = $_POST['from-date'];
          $order_end = $_POST['to-date'];
          $cus_id = "";
          include '../config.php';
     
          $sql = "SELECT cus_id FROM tb_customers WHERE cus_name = '$cus_name'";
          $result = mysqli_query($conn,$sql);
          if($result == true){
               while($row = mysqli_fetch_assoc($result)){
                    $cus_id = $row['cus_id'];
               }
          }else{
               echo "Lỗii";
          }

          $sql1 = "INSERT INTO tb_order_rooms (ordroom_total, ordroom_total_day, ordroom_start, ordroom_end, ordroom_status, room_id, cus_id)
               VALUES ('$total', '$room_total_day', '$order_start', '$order_end','0','$room_id','$cus_id' )";
               // echo $sql1;
          $result = mysqli_query($conn,$sql1);

          if($result == true){
               echo '<script>';
               echo 'alert ("Đặt phòng thành công!!!");';
               echo "location.href = 'index.php';";     
               echo '</script>';
          }else{
               echo '<script>';
               echo 'alert ("Có lỗi gì đó cả ra. Vui lòng thử lại!!!");';
               echo "location.href = 'index.php';";     
               echo '</script>';
          }

      }else{
          header ("location:login.php");
      }
?>
