<?php
   include '../config.php'; 
?>
<?php
    if(isset($_GET['id'])){
        $emp_id = $_GET['id'];
        //truy vấn
        $sql ="DELETE FROM db_employees WHERE emp_id ='$emp_id'";
        $result = mysqli_query($conn,$sql);
        if($result>0){
            header("location: index.php");

        }else{
            echo'lỗi';
        }
    }
?>