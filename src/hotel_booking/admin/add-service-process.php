 <?php
    $msg = "";
        if(isset($_POST['upload'])){

            $ser_name = $_POST['ser-name'];
            $ser_size = $_POST['ser-room-size'];
            
            $ser_price = $_POST['ser-price'];
            $ser_des = $_POST['ser-des'];
        
    
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "../images/".$filename;
              
        if (move_uploaded_file($tempname, $folder))  {
                    echo $msg = "Image uploaded successfully";
                }else{
                    echo $msg = "Failed to upload image";
              }

        include '../config.php';

        $sql = "INSERT INTO tb_services(ser_name, ser_room_size, ser_description, ser_price, ser_image) 
                VALUES ('$ser_name','$ser_size','$ser_des','$ser_price','$filename');";
        $result = mysqli_query($conn,$sql);
        
      
        if($result == true){
            echo 'thành công';
        }else{
            echo $sql;
        }
    }

    ?>
<!--     
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
          
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO image (filename) VALUES ('$filename')";
  
        // Execute query
        // mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
    //     if (move_uploaded_file($tempname, $folder))  {
    //         $msg = "Image uploaded successfully";
    //     }else{
    //         $msg = "Failed to upload image";
    //   }
      echo $sql;
  }

  ?>` -->