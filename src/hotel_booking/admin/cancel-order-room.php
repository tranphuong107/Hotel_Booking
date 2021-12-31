<?php
   include '../config.php'; 
?>
<?php
    if(isset($_GET['id'])){
        $order_id = $_GET['id'];
        //truy vấn
        $sql ="UPDATE tb_order_rooms SET ordroom_status = 'Đã hủy' WHERE ordroom_id = '$order_id'";
        $result = mysqli_query($conn,$sql);
        if($result>0){
           include 'alert-success-cancel.php';
        }else{
            echo '<script>';
            echo 'alert ("Có lỗi xảy ra");';  
            echo "location.href = 'ordroom-show.php';";   
            echo '</script>';
        }
    }
?>