<?php
    include ('header.php');
    include ('../config.php');
    if(!isset($_SESSION['loginUserOK'])){
        header ("location:login.php");
    }
?>
    
    <style>
    td{
        height: 40px;
    }
    .float-container{
        position: relative;
        
    }
    .float-img{
        position: absolute;
        bottom: 45%;
        left:43%;
    }
</style>
    <div class="container-fluid float-container " style=" width:100%; margin:0px; padding:0px;">
    
    <img src="../images/b31.jpg" class="img-header " style="height: 260px; width:100% ;object-fit:cover;"alt="">
    <div class="col-md-8 pt-4 float-img ">
                
                <div class="jumbotron ">
                    <span class="text-white ms-5 fs-4">ĐƠN HÀNG</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                <a href="index.php">
                                    <span class="text-white fw-bold">TRANG CHỦ</span>
                                </a></li>
                            <li class="breadcrumb-item active ">
                                <a href="#">
                                    <span class="text-white fw-bold">ĐƠN HÀNG</span>
                                </a></li>
                        </ol>
                    </nav>
                    
                </div>
    </div>

    </div >
        <!--<div class="container">
            
            <h4 class="fieldset pt-5 border-none align-middle" style="margin-left:100px; transform: translatey(28%);width: max-content;background: white;">ĐƠN PHÒNG</h4>
            <div class="legend pb-5 mx-4 rounded"style ="background-color: white;border: #D99559 solid 2px; " >-->
            <!-- start show order room -->
            <h4 class="container fs-4 pb-0 p-5 px-1"  style = " margin-left:150px; width: max-content; transform: translatey(28%); background: white;">Đơn hàng của bạn</h4>
            <div class="container  pb-3 rounded" style ="background-color: white;border-top: #D99559 solid 2px;  " ></div>
            <table class="container table table-striped table-warning my-3 py-5 border-light  text-aline  text-center" style="table-layout: auto;">
                <thead class="">
                    <tr class ="  ">
                        <th scope="col" class="top ">Loại đơn</th>
                        <th scope="col" class="top">Mã Đơn</th>
                        <th scope="col" class="top">Tên phòng</th>
                        <th scope="col" class="top">Ngày nhận </th>
                        <th scope="col" class="top">Ngày trả </th>
                        <th scope="col" class="top">Tổng </th>
                        <th scope="col" class="top">Tình trạng đơn </th>
                    </tr>
                </thead>
                <tbody>
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
                        echo '<tr>';
                                     echo  '<td scope="row">Đơn phòng</th>';
                                     echo '<th scope="row">'.$row['ordroom_id'].'</th>';
                                     echo '<td>'.$row['room_type'].'</td>';
                                     echo '<td>'.$row['ordroom_start'].'</td>';
                                     echo '<td>'.$row['ordroom_end'].'</td>';
                                     echo '<td class="text-end">'.number_format($row['ordroom_total']).' đ</td>';
                                     echo '<td>'.$row['ordroom_status'].'</td>';
                        echo '</tr>';
            
            //đơn dịch vụ
            
            ?>
          
            <!--<div class = "container-fluid p-2 pt-5 pb-0 col-6" >
                #E8D9B6
                         right 
                    <div class="p-1 py-3 rounded mx-auto " style="background-color:#F2DFA7;width:90%">
                        <div class="fs-5 px-0 ps-5" style="padding-left:15px;">
                            <div class="row"><label for="" class="col-lg-4 text-start">Mã đơn: </label><div class="col"><?php echo $ordroom_id;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Loại phòng: </label><div class="col"> <?php echo $room_type;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Số ngày: </label><div class="col"> <?php echo $ordroom_total_day;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Ngày nhận: </label><div class="col"> <?php echo $ordroom_start;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Ngày trả: </label><div class="col"> <?php echo $ordroom_end;?><br /></div></div>
                            <div class="row"><label for="" class="col-lg-4 text-start">Tổng: </label><div class="col"> <?php echo number_format($ordroom_total) ; echo' đ';?><br /></div></div>
                        </div>
                    </div>
               
            </div>-->
            <?php }}else{
                echo'<h1 for="" class=" text-center p-5 mb-0" style=" color:#747d8c;">Bạn không có đơn Phòng nào !</h1>';
            } ?>
            <?php 
            if(isset($_SESSION['loginUserOK'])){ 
                $id = $_SESSION['idCus'];}
            $sql = "SELECT o.ordser_id,o.ordser_total,o.ordser_total_day,o.ordser_start,o.ordser_end,o.ordser_status,s.ser_name,s.ser_image
            FROM  tb_order_services o ,tb_services s 
            WHERE  o.ser_id = s.ser_id AND o.cus_id =$id";
            $result = mysqli_query($conn,$sql);
            //echo '<div class="ps-5 pb-5">';
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>';
                                     echo '<td scope="row">Đơn dịch vụ</th>';
                                     echo '<th scope="row">'.$row['ordser_id'].'</th>';
                                     echo '<td>'.$row['ser_name'].'</td>';
                                     echo '<td>'.$row['ordser_start'].'</td>';
                                     echo '<td>'.$row['ordser_end'].'</td>';
                                     echo '<td class="text-end">'.number_format($row['ordser_total']).' đ</td>';
                                     echo '<td>'.$row['ordser_status'].'</td>';
                        echo '</tr>';
                    }}else{
                        echo'<h1 for="" class=" text-center p-5 mb-0" style=" color:#747d8c;">Bạn không có đơn Phòng nào !</h1>';
                    } ?>
              </tbody>
            </table>
            <!--
            </div>
            </div>-->
            <!-- end show order room -->
          <div style="height:200px;"></div>
            
<?php
    include('footer.php');
?>