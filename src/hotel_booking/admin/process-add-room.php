<?php
    $room_type = $_POST['room_type'];
    $room_size = $_POST['room_size'];
    $room_description = $_POST['room_description'];
    $room_price = $_POST['room_price'];
    $room_amount_people = $_POST['room_amount_people'];
    $room_image = $_POST['room_image'];
    $room_image1 = $_POST['room_image1'];
    $room_image2 = $_POST['room_image2'];
    $room_image3 = $_POST['room_image3'];



    include '../config.php';
    //bước 2
    $sql = "INSERT INTO tb_rooms(room_type, room_size, room_description, room_price, room_amount_people, room_image,room_image1,room_image2,room_image3)
             VALUES ('$room_type','$room_size','$room_description','$room_price','$room_amount_people','$room_image','$room_image1','$room_image2','$room_image3')";
    //bước 3: result là số bản ghi chèn thành công
    $result = mysqli_query($conn,$sql);
    //kiểm tra lệnh sql 
    echo $sql;
    if($result>0){
        header ("location:../index.php");
    }else{
        echo 'lỗi';
    }
    //bước 4
    
    mysqli_close($conn);
    
?>