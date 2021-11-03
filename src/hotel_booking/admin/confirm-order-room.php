<?php
   include '../config.php'; 
?>
<?php
    if(isset($_GET['id'])){
        $order_id = $_GET['id'];
        //truy vấn
        $sql ="UPDATE tb_order_rooms SET ordroom_status = 'Đã xác nhận' WHERE ordroom_id = '$order_id'";
        $result = mysqli_query($conn,$sql);
        echo $sql;
        if($result>0){
            header("location: ordroom-show.php");

        }else{
            echo'lỗi';
        }
    }
?>