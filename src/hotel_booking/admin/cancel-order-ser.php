<?php
   include '../config.php'; 
?>
<?php
    if(isset($_GET['id'])){
        $order_id = $_GET['id'];
        //truy vấn
        $sql ="UPDATE tb_order_services SET ordser_status = 'Đã hủy' WHERE ordser_id = '$order_id'";
        $result = mysqli_query($conn,$sql);
        if($result>0){
            include 'alert-cancel-ordser.php';
        }else{
            echo '<script>';
            echo 'alert ("Có lỗi xảy ra");';  
            echo "location.href = 'ordser-show.php';";   
            echo '</script>';
        }
    }
?>