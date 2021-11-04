<?php
   include '../config.php';
    $msg = "";
        if(isset($_POST['upload'])){
            $ser_id = $_POST['ser-id'];
            $ser_name = $_POST['ser-name'];
            $ser_size = $_POST['ser-room-size'];
            
            $ser_price = $_POST['ser-price'];
            $ser_des = $_POST['ser-des'];
        
            $sql = "SELECT ser_image FROM tb_services WHERE ser_ID = '$ser_id'";
            $result = mysqli_query($conn,$sql);

            if($result == true){
                while($row = mysqli_fetch_assoc($result)){
                    $ser_img = $row['ser_image'];
                }
            }
            
            
            $filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"]; 
            
            // echo $filename;
            if($filename == ""){
                $sql1 ="UPDATE tb_services SET 
                ser_name = '$ser_name',
                ser_room_size = '$ser_size',
                ser_description = '$ser_des',
                ser_image = '$ser_img',
                ser_price = '$ser_price'
                WHERE ser_ID = '$ser_id'";

                $result1 = mysqli_query($conn,$sql1);

                if($result1 == true){
                    echo '<script>';
                    echo 'alert ("Thay đổi dịch vụ thành công");';
                    echo "location.href = 'service-show.php';";   
                    echo '</script>';
                }else{
                    // echo $sql1;
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'service-show.php';";   
                    echo '</script>';
                }
                
            }else{
                $folder = "../images/".$filename;
                if (move_uploaded_file($tempname, $folder))  {
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
                }

                $sql1 ="UPDATE tb_services SET 
                ser_name = '$ser_name',
                ser_room_size = '$ser_size',
                ser_description = '$ser_des',
                ser_image = '$filename',
                ser_price = '$ser_price'
                WHERE ser_ID = '$ser_id'";

                $result1 = mysqli_query($conn,$sql1);

                if($result1 == true){
                    echo '<script>';
                    echo 'alert ("Thay đổi dịch vụ thành công");';
                    echo "location.href = 'service-show.php';";   
                    echo '</script>';
                }else{
                    // echo $sql1;
                    echo '<script>';
                    echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                    echo "location.href = 'service-show.php';";   
                    echo '</script>';
                }
            }
            
        //     $folder = "../images/".$filename;
              
        // if (move_uploaded_file($tempname, $folder))  {
        //             echo $msg = "Image uploaded successfully";
        //         }else{
        //             echo $msg = "Failed to upload image";
        //       }
        }

    ?>
