<?php
   include('../config.php')
?>
<?php
        session_start();
        if(isset($_POST['btnadd']) && $_POST['txtAdmin'] !='' && $_POST['txtMobile'] != '' 
        && $_POST['txtEmail'] != '' && $_POST['txtPass01'] != ''  && $_POST['txtPass02'] != ''){
            $admin = $_POST['txtAdmin'];
            $mobile =$_POST['txtMobile'];
            $email = $_POST['txtEmail'];
            $pass01= $_POST['txtPass01'];
            $pass02 = $_POST['txtPass02'];
            if($pass01 != $pass02){
                $_SESSION['thongbao'] = 'Mật khẩu không trùng nhau!';
                header('location:add-admin.php'); 
            }else{
                $sql = "SELECT * FROM tb_admins WHERE admin_name ='$admin'";
                $result = mysqli_query($conn,$sql);
                //Xử lý kết quả
                if(mysqli_num_rows($result) > 0){
                    $_SESSION['thongbao'] = 'Tên tài khoản đã tồn tại!';
                    header('location:add-admin.php');  
                }else{
                    //Truy vấn dữ liệu để kiểm tra email
                    $sql2 = "SELECT * FROM tb_admins WHERE admin_email ='$email'";
                    $result2 = mysqli_query($conn,$sql2);
                    //Xử lý kết quả
                    if(mysqli_num_rows($result2) > 0){
                        $_SESSION['thongbao'] = 'Email đã tồn tại!';
                        header('location:add-admin.php'); 
                    }else{
                    //băm mật khẩu
                        $pass_hash = md5($pass01);
                        $sql3 = "INSERT INTO tb_admins(admin_name,admin_mobile,admin_email,admin_pass) 
                        VALUES('$admin','$mobile','$email','$pass_hash');";
                        $result3 = mysqli_query($conn,$sql3);
                        if($result3 >= 1){// nếu đăng ký thành công chuyển sang bảng admin
                            header ('location:admin-list.php');
                        }
                    }
                }
            }
        }else{
            $_SESSION['thongbao'] = 'Vui lòng nhập đủ thông tin!';
            header('location:add-admin.php');
        }
            
    ?>   