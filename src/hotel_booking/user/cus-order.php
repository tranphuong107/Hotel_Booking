<?php
    include ('header.php');
    include ('../config.php');
    if(!isset($_SESSION['loginUserOK'])){
        header ("location:login.php");
    }
?>
    <main>
        <div class="header-inner">
            <img src="../images/show-order1.jpg" class="d-block w-100 h-100" alt="">
        </div>
        <div style =" " ></div>
        <!-- show order room -->
            <?php
            //1 .lấy id_cus     
            if(isset($_SESSION['loginUserOK'])){ 
            $id = $_SESSION['idCus'];}
            //2. Thực hiện truy vấn
            $sql = "SELECT o.ordroom_id,o.ordroom_total,o.ordroom_total_day,o.ordroom_start,o.ordroom_end,o.ordroom_status,r.room_type,r.room_image
            FROM  tb_order_rooms o ,tb_rooms r 
            WHERE  o.room_id = r.room_id AND o.cus_id =$id";
            $result = mysqli_query($conn,$sql);
            //echo '<div class="ps-5 pb-5">';
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        $ordroom_id=$row['ordroom_id'];
                        $room_type=$row['room_type'];
                        $ordroom_start=$row['ordroom_start'];
                        $ordroom_end=$row['ordroom_end'];
                        $ordroom_total_day=$row['ordroom_total_day'];
                        $ordroom_total=$row['ordroom_total'];
                        $ordroom_status=$row['ordroom_status'];
                        $room_image =$row['room_image'];
            ?>
            <div class = "container-fluid p-5">
                <div class = "row">
                    <div class="col-6 px-0   my-auto">
                        <!-- left -->
                        <?php
                            if($room_image == ""){
                                echo "<div class='text-center error'>Image not Available.</div>";
                            }else{
                                echo '<img src="../images/'.$room_image.'" alt="" class = "img-fluid "> ';
                            }
                        ?>
                    </div>

                        <!-- rright -->
                    <div class="col-6 ps-5" style="background-color:#f1f2f6;">
                        <div>
                            <h2 class="text-center pt-5 pb-4">ĐƠN PHÒNG</h2>
                        </div>
                        <div class="fs-5 px-0 ps-5" style="padding-left:15px;">
                            <label for="" class="fw-bold">Mã đơn: </label> <?php echo $ordroom_id;?><br />
                            <label for="" class="fw-bold">Loại phòng: </label> <?php echo $room_type;?><br />
                            <label for="" class="fw-bold">Ngày nhận phòng: </label> <?php echo $ordroom_start;?><br />
                            <label for="" class="fw-bold">Ngày trả phòng: </label> <?php echo $ordroom_end;?><br />
                            <label for="" class="fw-bold">Số ngày: </label> <?php echo $ordroom_total_day;?><br />
                            <label for="" class="fw-bold">Tổng hóa đơn: </label> <?php echo $ordroom_total; echo' VNĐ';?><br />
                            <?php
                                if($ordroom_status=='Chờ xác nhận'){
                                    echo'<label for="" class="fw-bold">Tình trạng đơn: </label>  Đơn hàng chờ xác nhận<br />';
                                }else{
                                    if($ordroom_status=='Đã xác nhận'){
                                    echo'<label for="" class="fw-bold">Tình trạng đơn:</label> Đơn hàng đã xác nhận<br />';
                                    }else{
                                    echo'<label for="" class="fw-bold">Tình trạng đơn:</label> Đơn hàng đã hủy<br />'; 
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php }}else{
                echo'<h1 for="" class=" text-center p-5 mb-0" style="background-color:#f1f2f6; color:#747d8c;">Bạn không có đơn Phòng nào !</h1>';
            } ?>
            <!-- show order service -->
            <?php
            //1 .lấy id_cus     
            if(isset($_SESSION['loginUserOK'])){ 
            $id = $_SESSION['idCus'];}
            //2. Thực hiện truy vấn
            $sql = "SELECT o.ordser_id,o.ordser_total,o.ordser_total_day,o.ordser_start,o.ordser_end,o.ordser_status,s.ser_name,s.ser_image
            FROM  tb_order_services o ,tb_services s 
            WHERE  o.ser_id = s.ser_id AND o.cus_id =$id";
            $result = mysqli_query($conn,$sql);
            //echo '<div class="ps-5 pb-5">';
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        $ordser_id=$row['ordser_id'];
                        $ser_name=$row['ser_name'];
                        $ordser_start=$row['ordser_start'];
                        $ordser_end=$row['ordser_end'];
                        $ordser_total_day=$row['ordser_total_day'];
                        $ordser_total=$row['ordser_total'];
                        $ordser_status=$row['ordser_status'];
                        $ser_image =$row['ser_image'];
            ?>
            <div class = "container-fluid p-5">
                <div class = "row">
                    <div class="col-6 px-0 my-auto">
                        <!-- left -->
                        <?php
                            if($ser_image == ""){
                                echo "<div class='text-center  error'>Image not Available.</div>";
                            }else{
                                echo '<img src="../images/'.$ser_image.'" alt="" class = "img-fluid "> ';
                            }
                        ?>
                    </div>

                        <!-- rright -->
                    <div class="col-6 ps-5 " style="background-color:#f1f2f6;">
                        <div>
                            <h2 class="text-center pt-5 pb-4">ĐƠN DỊCH VỤ</h2>
                        </div>
                        <div class="fs-5 px-0 ps-5 pb-5">
                            <label for="" class="fw-bold">Mã đơn: </label> <?php echo $ordser_id;?><br />
                            <label for="" class="fw-bold">Tên dịch vụ: </label> <?php echo $ser_name;?><br />
                            <label for="" class="fw-bold">Ngày nhận phòng: </label> <?php echo $ordser_start;?><br />
                            <label for="" class="fw-bold">Ngày trả phòng: </label> <?php echo $ordser_end;?><br />
                            <label for="" class="fw-bold">Số ngày: </label> <?php echo $ordser_total_day;?><br />
                            <label for="" class="fw-bold">Tổng hóa đơn: </label> <?php echo $ordser_total; echo' VNĐ';?><br />
                            <?php
                                if($ordroom_status=='Chờ xác nhận'){
                                    echo'<label for="" class="fw-bold">Tình trạng đơn: </label>  Đơn hàng chờ xác nhận<br />';
                                }else{
                                    if($ordroom_status=='Đã xác nhận'){
                                    echo'<label for="" class="fw-bold">Tình trạng đơn:</label> Đơn hàng đã xác nhận<br />';
                                    }else{
                                    echo'<label for="" class="fw-bold">Tình trạng đơn:</label> Đơn hàng đã hủy<br />'; 
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php }}else{
                echo'<h1 for="" class="text-center p-5" style="background-color:#f1f2f6;color:#747d8c;">Bạn không có đơn Dịch vụ nào !</h1>';
            } ?>
    </main>
<?php
    include('footer.php');
?>