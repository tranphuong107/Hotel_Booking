<?php
    include ('header.php');
    include ('../config.php');
?>
<div class = "content px-3 ">
        <div clas = "m-3 row">
            <a href="#" onclick="openForm3()" id = "close" class = "close" style = "color: #D98E73; text-decoration: none;float: right;font-size:1.5rem;"><i class="far fa-times-circle"></i></a>
            <?php
            include 'popup-exit-room.php';
            ?>
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
        <form action="process-update-room.php" method = "post" class ="pb-5 pt-3 mb-3  mx-auto" style="width:70%" enctype="multipart/form-data"> 
            <input type="text-left" name = "room-id" value = "<?php echo $row['room_id']?>" hidden>          
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2 text-left">Tên phòng:</div>
               <div class="col">
                   <input type="text" name = "room-type" class = "form-control" value = "<?php echo $row['room_type'];?>">
                </div>   
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2 text-left">Diện tích:</div>
               <div class="col">
                   <input type="text" name = "room-size" class = "form-control" value = "<?php echo $row['room_size'];?>"> 
                </div>   
                </div>
            </div>     
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2">Mô tả:</div>
               <div class="col">
            <textarea name ="room-des"  cols="30" rows="3" class = "form-control" maxlength = "250"><?php echo $row['room_description'];?></textarea>
            </div>   
                </div>
            </div>  
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2">Giá tiền:</div>
               <div class="col">
                   <input type="number"  name = "room-price"  min = "1" class = "form-control" value = "<?php echo $row['room_price'];?>">     
                   </div>   
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2">Số người:</div>
               <div class="col">
                    <input type="number"  name = "room-amount-people"  min = "1" class = "form-control" value = "<?php echo $row['room_amount_people'];?>">
                    </div>   
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2" style="margin: auto">Ảnh 1 hiện tại:</div>
               <div class="col">
            <img src="../images/<?php echo $row['room_image'];?>" alt="" style = "width: 10rem;height: 10rem;object-fit: contain;"> 
            Ảnh 1 thay thế: <input type="file" name="uploadfile" value=""/>
            </div>   
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2"style="margin: auto">Ảnh 2 hiện tại:</div>
               <div class="col">
            <img src="../images/<?php echo $row['room_image1'];?>" alt="" style = "width: 10rem;height: 10rem;object-fit: contain;">
            Ảnh 2 thay thế: <input type="file" name="uploadfile2" value=""/>
            </div>   
                </div>
            </div>
        <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2"style="margin: auto">Ảnh 3 hiện tại:</div>
               <div class="col">
            <img src="../images/<?php echo $row['room_image2'];?>" alt="" style = "width: 10rem;height: 10rem;object-fit: contain;">
            Ảnh 3 thay thế: <input type="file" name="uploadfile3" value=""/>
            </div>   
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2"style="margin: auto">Ảnh 4 hiện tại:</div>
               <div class="col">
            <img src="../images/<?php echo $row['room_image3'];?>" alt="" style = "width: 10rem;height: 10rem;object-fit: contain;">
            Ảnh 4 thay thế: <input type="file" name="uploadfile3" value=""/>
            </div>   
                </div>
            </div>

        <div class = "mt-3">
            <!-- <a href="" type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white" class = "border-5 p-2">Thêm</a> -->
            <a href="alert-update-room.php">
            <button type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white;float: right;margin-bottom: 5rem;" class = "border-0 p-2">
                  Lưu phòng
                </button>
                </a>
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