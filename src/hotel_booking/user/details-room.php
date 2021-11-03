<?php include('../config.php'); ?>
<?php include('header.php'); ?>
    <div class="container">
        <div class="row m-3">
            <div class="col-md-12">
                <div class="jumbotron">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                <a href="index.php">
                                    <span class="text-dark">TRANG CHỦ</span>
                                </a></li>
                            <li class="breadcrumb-item active ">
                                <a href="room.php">
                                    <span class="text-dark">PHÒNG</span>
                                </a></li>
                                <li class="breadcrumb-item active ">
                                <a href="#">
                                    <span class="text-dark">Chi tiết</span>
                                </a></li>
                        </ol>
                    </nav>                  
                </div>
            </div>
        </div>
        <?php
            if(isset($_GET['id'])){
                $room_id = $_GET['id'];
                //truy vấn
                $sql ="SELECT * FROM tb_rooms WHERE room_id ='$room_id'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    
                    while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="row m-3">             
            <div class="col-md-7 m-0 p-2 ">
                <img src="../images/<?php echo $row['room_image']?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-5 ">
                <div class="card-body">
                    <h1 class="card-title"><?php echo $row['room_type']?></h1>
                    <hr  width="10%" size="2px" align="center" />
                    <p class="card-text">Giá: <?php echo number_format($row['room_price'])?>₫</p>
                    <a href="show-order-room.php"class="btn btn-dark">Đặt ngay</a>
                    <style>
                        .dotted {border: 1px dotted #ff0000; border-style: none none dotted; color: #fff; background-color: #fff; }
                    </style>
                    <hr class='dotted' />
                    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                </div>
            </div>                                 
        </div>
        
                
        <div class="row m-3">
        <div class="accordion accordion-flush" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Mô tả
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- <strong>This is the first item's accordion body.</strong>  -->
                    <p>
                        <?php echo $row['room_description']?>
                    </p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Thông tin bổ sung
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Chưa có
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Đánh giá
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Chưa có đánh giá nào.
                </div>
                </div>
            </div>
            </div>
        </div>
        <?php      }} }?>
    </div>


<?php include('footer.php'); ?>