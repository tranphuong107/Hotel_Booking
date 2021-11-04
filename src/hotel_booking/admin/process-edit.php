<?php
    include ('../config.php');
?>

<?php
        if(isset($_POST['btnsubmit']))
        {
            $room_type = $_POST['room_type'];
            $room_size = $_POST['room_size'];
            $room_description = $_POST['room_description'];
            $room_price = $_POST['room_price'];
            $room_amount_people = $_POST['room_amount_people'];
            $room_image = $_POST['room_image'];

            //chỉnh sửa thông tin
            $sql2 = "UPDATE db_employees SET 
                $room_type = 'room_type',
                $room_size = 'room_size',
                $room_description = 'room_description',
                $room_price = 'room_price',
                $room_amount_people = 'room_amount_people'
                WHERE $room_type = 'room_type';
                $result2 = mysqli_query($conn,$sql2);
                // echo $sql2;
               
                if($result2 > 0){
                    header('<location:index.php');
                }else{
                    echo 'lỗi';
                }
        }
?>