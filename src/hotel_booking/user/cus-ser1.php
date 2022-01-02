<!-- show order service -->
<div class="container pb-5"><!--#e1b12c-->
            <h4 class="fieldset pt-5 border-none align-middle" style="margin-left:100px; transform: translatey(28%);width: max-content;background: white;">ĐƠN DỊCH VỤ</h4>
            <div class="legend pb-5 mx-4 rounded"style ="background-color: white;border: #D99559 solid 2px; " >
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
                    echo'<div class="row px-3 mx-2">';
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
           <div class = "container-fluid p-2 py-5 pb-0 col-6 " >
                        <!-- right -->
                    <div class="p-1 py-3 rounded mx-auto " style="background-color:#F2DFA7;width:90%">
                    <div class="fs-5 px-0 ps-5" style="padding-left:15px;">
                            <div class="row"><label for="" class="col-lg-4 text-start">Mã đơn: </label><div class="col"><?php echo $ordser_id;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Tên dịch vụ: </label><div class="col"> <?php echo $ser_name;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Ngày nhận: </label><div class="col"> <?php echo $ordser_start;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Ngày trả : </label><div class="col"> <?php echo $ordser_end;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Số ngày: </label><div class="col"> <?php echo $ordser_total_day;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Tổng: </label><div class="col"> <?php echo number_format($ordser_total); echo' đ';?><br /></div></div>
                            <?php
                                if($ordser_status=='Chờ xác nhận'){
                                    echo'<div class="row"><label for="" class="col-lg-4 text-start">Tình trạng: </label><div class="col">  Đơn hàng chờ xác nhận<br /></div></div>';
                                }else{
                                    if($ordser_status=='Đã xác nhận'){
                                    echo'<div class="row"><label for="" class="col-lg-4 text-start">Tình trạng:</label><div class="col"> Đơn hàng đã xác nhận<br /></div></div>';
                                    }else{
                                    echo'<div class="row"><label for="" class="col-lg-4 text-start">Tình trạng:</label><div class="col"> Đơn hàng đã hủy<br /></div></div>'; 
                                    }
                                }
                            ?>
                    </div>
                </div>

            </div>
           
           
            <?php }
            echo '</div>';}else{
                echo'<h1 for="" class="text-center p-5" style="background-color:#f1f2f6;color:#747d8c;">Bạn không có đơn Dịch vụ nào !</h1>';
            } ?>
            </div>
            </div>