<?php
   include '../config.php'; 
?>
<?php
    if(isset($_GET['id'])){
        $emp_id = $_GET['id'];
        //truy vấn
        $sql ="DELETE FROM tb_rooms WHERE room_id ='$room_id'";
        $result = mysqli_query($conn,$sql);
        if($result>0){
            header("location: index.php");

        }else{
            echo'lỗi';
        }
    }
?>
 