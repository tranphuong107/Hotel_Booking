<?php
     session_start();//bảo vệ tk admin
     if(isset($_SESSION['loginUserOK'])){
          $cus_name = $_SESSION['loginUserOK'];
          $ser_id = $_POST['service-id'];
          $total = $_POST['total'];
          $ser_total_day = $_POST['demo'];
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
          if($cus_id != ""){
          $sql1 = "INSERT INTO tb_order_services (ordser_total, ordser_total_day, ordser_start, ordser_end, ordser_status, ser_id, cus_id)
               VALUES ('$total', '$ser_total_day', '$order_start', '$order_end','Chờ xác nhận','$ser_id','$cus_id' )";
               // echo $sql1;
          $result = mysqli_query($conn,$sql1);
          
          if($result == true){
               echo '<script>';
               echo 'alert ("Đặt dịch vụ thành công!!!");';
               echo "location.href = 'index.php';";     
               echo '</script>';
          }else{
               // echo $sql1;
               echo '<script>';
               echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
               echo "location.href = 'index.php';";     
               echo '</script>';
          }
          }else{
               echo '<script>';
               echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng đăng nhập lại!!!");';
               echo "location.href = 'index.php';";     
               echo '</script>';  
                    }
      }else{
          header ("location:login.php");
      }
?>