<?php
    include ('header.php');
    include ('../config.php');
?>
<div class = "content px-3 ">
        <div clas = "m-3 row">
            <a href="room-show.php" id = "close" class = "close" style = "color: #D98E73; text-decoration: none;float: right;font-size:1.5rem;"><i class="far fa-times-circle"></i></a>
        </div>
    <?php
            $room_id = $_GET['id'];
            $sql1 = "SELECT * FROM tb_rooms WHERE room_id = '$room_id';";
            $result1 = mysqli_query($conn,$sql1);

            if($result1 == true){
                while($row = mysqli_fetch_assoc($result1)){?>
        
        <div class = "mt-5">
        <h1 class = "text-center">Chi tiết phòng</h1>
        </div>
        <form action="process-update-room.php" method = "post" class ="py-5 mb-3 w-75 mx-auto"  enctype="multipart/form-data"> 
            <input type="text" name = "room-id" value = "<?php echo $row['room_id']?>" hidden>          
            <div class = "my-3">
                Tên phòng <input type="text" name = "room-type" class = "form-control" value = "<?php echo $row['room_type'];?>">
            </div>
        <div class = "my-3">
            Diện tích <input type="text" name = "room-size" class = "form-control" value = "<?php echo $row['room_size'];?>"> 
            
        </div>       
        <div  class = "my-3">
            Mô tả
            <textarea name ="room-des"  cols="30" rows="3" class = "form-control" maxlength = "250"><?php echo $row['room_description'];?></textarea>
        </div>
        <div class = "my-3">
            Giá tiền <input type="number"  name = "room-price"  min = "1" class = "form-control" value = "<?php echo $row['room_price'];?>">     
        </div>
        <div class = "my-3">
            Số người <input type="number"  name = "room-amount-people"  min = "1" class = "form-control" value = "<?php echo $row['room_amount_people'];?>">
            
        </div>
        <div  class = "my-3 row">
            <div class="col-6">
            Ảnh hiện tại
            <img src="../images/<?php echo $row['room_image'];?>" alt="" style = "width: 10rem;height: 10rem;object-fit: contain;">
            
            </div>
            <div class="col-6 pt-5">
            Ảnh <input type="file" name="uploadfile" value=""/>
            </div>
        </div>
        
        <div  class = "my-3">
            Ảnh thêm 1
            <img src="../images/<?php echo $row['room_image1'];?>" alt="" style = "width: 10rem;height: 10rem;object-fit: contain;">
        </div>
        <div class = "my-3">
            Ảnh <input type="file" name="uploadfile1" value=""/>
        </div>
        <div  class = "my-3">
            Ảnh thêm 2
            <img src="../images/<?php echo $row['room_image2'];?>" alt="" style = "width: 10rem;height: 10rem;object-fit: contain;">
        </div>
        <div class = "my-3">
            Ảnh <input type="file" name="uploadfile2" value=""/>
        </div>
        <div  class = "my-3">
            Ảnh thêm 3
            <img src="../images/<?php echo $row['room_image3'];?>" alt="" style = "width: 10rem;height: 10rem;object-fit: contain;">
        </div>
        <div class = "my-3">
            Ảnh <input type="file" name="uploadfile3" value=""/>
        </div>

        <div class = "mt-3">
            <!-- <a href="" type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white" class = "border-5 p-2">Thêm</a> -->
            <button type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white;float: right;margin-bottom: 5rem;" class = "border-0 p-2">
                  Lưu phòng
                </button>
        </div>
                     <?php
                         }}else{
                            echo '<script>';
                            echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                            echo "location.href = 'index.php';";     
                            echo '</script>';
            }?>

            </form>
</div>
            <?php
    include ('footer.php');
?>