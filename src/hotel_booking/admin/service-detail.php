<?php
    include ('header.php');
    include ('../config.php');
?>
<div class = "content px-3 ">
        <div clas = "m-3 row">
            <a href="service-show.php" id = "close" class = "close" style = "color: #D98E73; text-decoration: none;float: right;font-size:1.5rem;"><i class="far fa-times-circle"></i></a>
        </div>
    <?php
            $ser_id = $_GET['id'];
            $sql1 = "SELECT * FROM tb_services WHERE ser_id = '$ser_id';";
            $result1 = mysqli_query($conn,$sql1);

            if($result1 == true){
                while($row = mysqli_fetch_assoc($result1)){?>
        
        <div class = "mt-5">
        <h1 class = "text-center">Chi tiết dịch vụ</h1>
        </div>
        <form action="update-service-process.php" method = "post" class ="py-5 mb-3"  enctype="multipart/form-data"> 
            <input type="text" name = "ser-id" value = "<?php echo $row['ser_ID']?>" hidden>          
            <div class = "my-3">
                Tên dịch vụ <input type="text" name = "ser-name" class = "form-control" value = "<?php echo $row['ser_name'];?>">
            </div>
        <div class = "my-3">
            Số người <input type="number" name = "ser-room-size" min = "1"  class = "form-control" value = "<?php echo $row['ser_room_size'];?>"> 
            
        </div>
        <div class = "my-3">
            Giá tiền <input type="number"  name = "ser-price"  min = "1" class = "form-control" value = "<?php echo $row['ser_price'];?>">
            
        </div>
        <div  class = "my-3">
            Mô tả
            <textarea name ="ser-des"  cols="30" rows="3" class = "form-control" maxlength = "250"><?php echo $row['ser_description'];?></textarea>
        </div>
        <div  class = "my-3">
            Ảnh hiện tại
            <img src="../images/<?php echo $row['ser_image'];?>" alt="" style = "width: 10rem;height: 10rem;object-fit: contain;">
        </div>
        <div class = "my-3">
            Ảnh <input type="file" name="uploadfile" value=""/>
        </div>
        <div class = "mt-3">
            <!-- <a href="" type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white" class = "border-5 p-2">Thêm</a> -->
            <button type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white;float: right;margin-bottom: 5rem;" class = "border-0 p-2">
                  Lưu dịch vụ
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