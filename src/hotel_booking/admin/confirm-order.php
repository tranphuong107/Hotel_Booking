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
            echo '<script>';
            echo 'alert ("Có lỗi gì đó cả ra. Vui lòng thử lại!!!");';
            echo "location.href = 'ordroom-show.php';";     
            echo '</script>';
        }
    }else{
        if(isset($_GET['ids'])){
            $order_id = $_GET['ids'];
        //truy vấn
        $sql ="UPDATE tb_order_services SET ordser_status = 1 WHERE ordser_id = '$order_id'";
        $result = mysqli_query($conn,$sql);
        echo $sql;
        if($result>0){
            header("location: ordser-show.php");
        }else{
            echo '<script>';
            echo 'alert ("Có lỗi gì đó cả ra. Vui lòng thử lại!!!");';
            echo "location.href = 'order-show.php';";     
            echo '</script>';
        }
        }
    }
?>