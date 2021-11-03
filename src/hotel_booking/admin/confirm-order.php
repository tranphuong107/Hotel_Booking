<?php
   include '../config.php'; 
?>
<?php
    if(isset($_GET['id'])){
        $order_id = $_GET['id'];
        //truy vấn
        $sql ="UPDATE tb_order_rooms SET ordroom_status = 1 WHERE ordroom_id = '$order_id'";
        $result = mysqli_query($conn,$sql);
        echo $sql;
        if($result>0){
            header("location: order-show.php");

        }else{
            echo'lỗi';
        }
    }
?>