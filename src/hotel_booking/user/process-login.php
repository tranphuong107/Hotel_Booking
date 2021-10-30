<?php
        //bảo vệ tài khoản admin
        session_start();
        if(isset($_POST['btnLoginuser'])){
            $cus_name =$_POST['txtName'];
            $password = $_POST['txtPass'];

            //bước 1 tạo kết nối
            $conn = mysqli_connect('localhost','root','1234','hotel_booking');
            if(!$conn){
                die("không thể kết nối");
            }
            //bước 2 truy vấn thông tin
            $sql = "SELECT *FROM tb_customers WHERE cus_name ='$cus_name' AND cus_pass ='$password'";
            $result = mysqli_query($conn,$sql);
            //bước 3 xác thực
            if(mysqli_num_rows($result)>0){
                //kiểm tra xác thực :
                $_SESSION['loginuOK']= $cus_name;//biến phiên như một thẻ làm việc hiệu lực 24h tên là loginOK
                header("location:index.php");

            }else{
                header("location:login.php");
            }
        }
 ?>