<?php
    include('../config.php');
?>
<?php
        //bảo vệ tài khoản admin
        session_start();
        if(isset($_POST['btnLoginAdmin']) && $_POST['txtName'] !='' && $_POST['txtPass'] != ''){
            $admin_name =$_POST['txtName'];
            $password = $_POST['txtPass'];
            $pass_hash = md5($password);
            //bước 2 truy vấn thông tin
            $sql = "SELECT *FROM tb_admins WHERE admin_name ='$admin_name' AND admin_pass ='$pass_hash'";
            $result = mysqli_query($conn,$sql);
            //bước 3 xác thực
            if(mysqli_num_rows($result)>0){
                //kiểm tra xác thực :
                $_SESSION['loginAdminOK']= $admin_name;//biến phiên như một thẻ làm việc hiệu lực 24h tên là loginOK
                header("location:index.php");

            }else{
                $_SESSION['thongbaoadmin']= 'Nhập sai tên tài khoản hoặc mật khẩu!';
                header("location:login.php");
            }
        }else{
            $_SESSION['thongbaoadmin']= 'Vui lòng nhập đủ thông tin!';
            header("location:login.php");
        }
 ?>