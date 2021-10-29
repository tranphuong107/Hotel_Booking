<?php
        if(isset($_POST['btnRegister'])){
            $user = $_POST['txtUser'];
            $mobile =$_POST['txtMobile'];
            $email = $_POST['txtEmail'];
            $pass01= $_POST['txtPass01'];
            $pass02 = $_POST['txtPass02'];
        }
        $conn = mysqli_connect('localhost','root','123456789','hotel_booking');
            //Truy vấn dữ liệu để kiểm tra email
            $sql = "SELECT * FROM tb_customers WHERE cus_email ='$email'";
            
            $result = mysqli_query($conn,$sql);
            //Xử lý kết quả
            if(mysqli_num_rows($result) > 0){
                echo 'Email đã tồn tại';
            }
            else{
                //băm mật khẩu
                $pass_hash = password_hash($pass01,PASSWORD_DEFAULT);
                $sql2 = "INSERT INTO tb_customers(cus_name,cus_mobile,cus_email,cus_pass) 
                VALUES('$user','$mobile','$email','$pass_hash');";
                
                $result2 = mysqli_query($conn,$sql2);
                if($result2 >= 1){
                    header ('location:login.php');
                    }else{
                        echo 'lỗi';
                    }
            }
    ?>   
