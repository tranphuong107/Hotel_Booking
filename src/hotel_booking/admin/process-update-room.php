<?php
     include '../config.php';
    $msg = "";
    if(isset($_POST['upload'])){
        $room_id = $_POST['room-id'];
        $room_type = $_POST['room-type'];
        $room_size = $_POST['room-size'];
        $room_des = $_POST['room-des'];
        $room_price = $_POST['room-price'];
        $room_amount_people = $_POST['room-amount-people'];
        //ảnh chính
        $sql = "SELECT room_image, room_image1,room_image2,room_image3 FROM tb_rooms WHERE room_id = '$room_id'";
            $result = mysqli_query($conn,$sql);

            if($result == true){
                while($row = mysqli_fetch_assoc($result)){
                    $room_img = $row['room_image'];   
                    $room_img1 = $row['room_image1']; 
                    $room_img2 = $row['room_image2']; 
                    $room_img3 = $row['room_image3'];  
                }
            }   
            $filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"]; 
            $folder = "../images/".$filename;

            $filename1 = $_FILES["uploadfile1"]["name"];
            $tempname1 = $_FILES["uploadfile1"]["tmp_name"];
            $folder1 = "../images/".$filename1; 

            $filename2 = $_FILES["uploadfile2"]["name"];
            $tempname2 = $_FILES["uploadfile2"]["tmp_name"]; 
            $folder2 = "../images/".$filename2;

            $filename3 = $_FILES["uploadfile3"]["name"];
            $tempname3 = $_FILES["uploadfile3"]["tmp_name"]; 
            $folder3 = "../images/".$filename3;
            
            // echo $filename;
            
                if($filename != "" && $filename2==""&&$filename3=="" &&$filename1=="" ){
                
                    if (move_uploaded_file($tempname, $folder))  {
                        echo $msg = "Image uploaded successfully";
                    }else{
                        echo $msg = "Failed to upload image";
                    }

                    $sql10 ="UPDATE tb_rooms SET 
                    room_type = '$room_type',
                    room_size = '$room_size',
                    room_description = '$room_des',
                    room_price = '$room_price',
                    room_amount_people = '$room_amount_people',
                    room_image = '$filename',
                    room_image1 = '$room_img1',
                    room_image2 = '$room_img2',
                    room_image3 = '$room_img3'
                    WHERE room_id = '$room_id'";

                    $result10 = mysqli_query($conn,$sql10);

                    if($result10 == true){
                        include 'alert-update-room.php';
                    }else{
                        // echo $sql1;
                        echo '<script>';
                        echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                        echo "location.href = 'room-show.php';";   
                        echo '</script>';
                    }
                
            } else if($filename1 != "" && $filename2==""&&$filename3=="" &&$filename=="" ){
                
                if (move_uploaded_file($tempname1, $folder1))  {
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }

                $sql11 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$room_img',
                room_image1 = '$filename1',
                room_image2 = '$room_img2',
                room_image3 = '$room_img3'
                WHERE room_id = '$room_id'";

                $result11 = mysqli_query($conn,$sql11);

                if($result11 == true){
                    include 'alert-update-room.php';
                }else{
                    
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }

            }else if($filename2 != "" && $filename1==""&&$filename3=="" &&$filename==""){
                
                if (move_uploaded_file($tempname2, $folder2))  {
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql12 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                
                room_image = '$room_img',
                
                room_image1 = '$room_img1',
                room_image2 = '$filename2',
                room_image3 = '$room_img3'
                WHERE room_id = '$room_id'";
    
                $result12 = mysqli_query($conn,$sql12);
    
                if($result12 == true){
                    include 'alert-update-room.php';
                }else{
                    // echo $sql1;
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }

            }else if($filename3 != "" && $filename2==""&&$filename1=="" &&$filename==""){
                
            if (move_uploaded_file($tempname3, $folder3))  {
                echo $msg = "Image uploaded successfully";
            }else{
                echo $msg = "Failed to upload image";
            }

            $sql13 ="UPDATE tb_rooms SET 
            room_type = '$room_type',
            room_size = '$room_size',
            room_description = '$room_des',
            room_price = '$room_price',
            room_amount_people = '$room_amount_people',
            room_image = '$room_img',    
            room_image1 = '$room_img1',
            room_image2 = '$room_img2',  
            room_image3 = '$filename3'
            WHERE room_id = '$room_id'";

            $result13 = mysqli_query($conn,$sql13);

            if($result13 == true){
                include 'alert-update-room.php';
            }else{
                
                echo '<script>';
                echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                echo "location.href = 'room-show.php';";   
                echo '</script>';
            }
        }else if($filename != "" && $filename1!=""&&$filename3=="" &&$filename2==""){
                if (move_uploaded_file($tempname, $folder)&&move_uploaded_file($tempname1, $folder1)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql14 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$filename',
                room_image1 = '$filename1',
                room_image2 = '$room_img2',
                room_image3 = '$room_img3'         
                WHERE room_id = '$room_id'";
    
                $result14 = mysqli_query($conn,$sql14);
    
                if($result14 == true){
                    include 'alert-update-room.php';
                }else{
                    // echo $sql1;
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }else if($filename != "" && $filename2!=""&&$filename3=="" &&$filename1==""){
                if (move_uploaded_file($tempname, $folder)&&move_uploaded_file($tempname2, $folder2)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql15 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$filename',
                room_image1 = '$room_img1',
                room_image2 = '$filename2',
                room_image3 = '$room_img3'         
                WHERE room_id = '$room_id'";
    
                $result15 = mysqli_query($conn,$sql15);
    
                if($result15 == true){
                    include 'alert-update-room.php';
                }else{
                    
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }else if($filename != "" && $filename3!=""&&$filename1=="" &&$filename2==""){
                if (move_uploaded_file($tempname, $folder)&&move_uploaded_file($tempname3, $folder3)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql16 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$filename',
                room_image1 = '$room_img1',
                room_image2 = '$room_img2',
                room_image3 = '$filename3'         
                WHERE room_id = '$room_id'";
    
                $result16 = mysqli_query($conn,$sql16);
    
                if($result16 == true){
                    include 'alert-update-room.php';
                }else{
                   
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }

            }else if($filename1 != "" && $filename2!=""&&$filename3=="" &&$filename==""){
                if (move_uploaded_file($tempname1, $folder1)&&move_uploaded_file($tempname2, $folder2)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql17 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$room_img',
                room_image1 = '$filename1',
                room_image2 = '$filename2',
                room_image3 = '$room_img3'         
                WHERE room_id = '$room_id'";
    
                $result17 = mysqli_query($conn,$sql17);
    
                if($result17 == true){
                    include 'alert-update-room.php';
                }else{
                   
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }else if($filename1 != "" && $filename3!=""&&$filename2=="" &&$filename==""){
                if (move_uploaded_file($tempname1, $folder1)&&move_uploaded_file($tempname3, $folder3)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql18 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$room_img',
                room_image1 = '$filename1',
                room_image2 = '$room_img2',
                room_image3 = '$filename3'         
                WHERE room_id = '$room_id'";
    
                $result18 = mysqli_query($conn,$sql18);
    
                if($result18 == true){
                    include 'alert-update-room.php';
                }else{
                   
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }else if($filename2 != "" && $filename3!=""&&$filename1=="" &&$filename==""){
                if (move_uploaded_file($tempname2, $folder2)&&move_uploaded_file($tempname3, $folder3)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql19 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$room_img',
                room_image1 = '$room_img1',
                room_image2 = '$filename2',
                room_image3 = '$filename3'         
                WHERE room_id = '$room_id'";
    
                $result19 = mysqli_query($conn,$sql19);
    
                if($result19 == true){
                    include 'alert-update-room.php';
                }else{
                   
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }else if($filename != "" && $filename1!=""&&$filename2!="" &&$filename3==""){
                if (move_uploaded_file($tempname0, $folder)&&move_uploaded_file($tempname1, $folder1)&&move_uploaded_file($tempname2, $folder2)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql20 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$filename',
                room_image1 = '$filename1',
                room_image2 = '$filename2',
                room_image3 = '$room_img3'         
                WHERE room_id = '$room_id'";
    
                $result20 = mysqli_query($conn,$sql20);
    
                if($result20 == true){
                    include 'alert-update-room.php';
                }else{
                   
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }else if($filename != "" && $filename2!=""&&$filename3!="" &&$filename1==""){
                if (move_uploaded_file($tempname, $folder)&&move_uploaded_file($tempname2, $folder2)&&move_uploaded_file($tempname3, $folder3)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql21 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$filename',
                room_image1 = '$room_img1',
                room_image2 = '$filename2',
                room_image3 = '$filename3'         
                WHERE room_id = '$room_id'";
    
                $result21 = mysqli_query($conn,$sql21);
    
                if($result21 == true){
                    include 'alert-update-room.php';
                }else{
                   
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }else if($filename != "" && $filename1!=""&&$filename3!="" &&$filename2==""){
                if (move_uploaded_file($tempname, $folder)&&move_uploaded_file($tempname1, $folder1)&&move_uploaded_file($tempname3, $folder3)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql22 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$filename',
                room_image1 = '$filename1',
                room_image2 = '$room_img2',
                room_image3 = '$filename3'         
                WHERE room_id = '$room_id'";
    
                $result22 = mysqli_query($conn,$sql22);
    
                if($result22 == true){
                    include 'alert-update-room.php';
                }else{
                   
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }else if($filename1 != "" && $filename2!=""&&$filename3!="" &&$filename==""){
                if (move_uploaded_file($tempname1, $folder1)&&move_uploaded_file($tempname2, $folder2)&&move_uploaded_file($tempname3, $folder3)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql23 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$room_img',
                room_image1 = '$filename1',
                room_image2 = '$filename2',
                room_image3 = '$filename3'         
                WHERE room_id = '$room_id'";
    
                $result23= mysqli_query($conn,$sql23);
    
                if($result23 == true){
                    include 'alert-update-room.php';
                }else{
                   
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }else if($filename1 != "" && $filename2!=""&&$filename3!="" &&$filename!=""){
                if (move_uploaded_file($tempname1, $folder1)&&move_uploaded_file($tempname2, $folder2)&&move_uploaded_file($tempname3, $folder3)&&move_uploaded_file($tempname, $folder)){
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }
    
                $sql25 ="UPDATE tb_rooms SET 
                room_type = '$room_type',
                room_size = '$room_size',
                room_description = '$room_des',
                room_price = '$room_price',
                room_amount_people = '$room_amount_people',
                room_image = '$filename',
                room_image1 = '$filename1',
                room_image2 = '$filename2',
                room_image3 = '$filename3'         
                WHERE room_id = '$room_id'";
    
                $result25= mysqli_query($conn,$sql25);
    
                if($result25 == true){
                    include 'alert-update-room.php';
                }else{
                   
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'room-show.php';";   
                    echo '</script>';
                }
            }
                
            
        else{
            $sql24 ="UPDATE tb_rooms SET 
            room_type = '$room_type',
            room_size = '$room_size',
            room_description = '$room_des',
            room_price = '$room_price',
            room_amount_people = '$room_amount_people',
            room_image = '$room_img',
            room_image1 = '$room_img1',
            room_image2 = '$room_img2',
            room_image3 = '$room_img3'
            
            WHERE room_id = '$room_id'";

            $result24 = mysqli_query($conn,$sql24);

            if($result24 == true){
                include 'alert-update-room.php';
            }else{
                // echo $sql1;
                echo '<script>';
                echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                echo "location.href = 'room-show.php';";   
                echo '</script>';
            }
        
            
        
        }  
        
    }
?>