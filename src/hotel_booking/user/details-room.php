<?php include('../config.php'); ?>
<?php include('header.php'); ?>
<style>
    .float-container{
        position: relative;
        
    }
    .float-img{
        position: absolute;
        bottom: 45%;
        left:43%;
    }
    .breadcrumb-item + .breadcrumb-item::before         {
        color:white;
    }
</style>
    <div class="container-fluid float-container " style=" width:100%; margin:0px; padding:0px;">
    
    <img src="../images/b31.jpg" class="img-header " style="height: 260px; width:100% ;object-fit:cover;"alt="">
    <div class="col-md-8 pt-4 float-img " >
                
                <div class="jumbotron ">
                    <span class="text-white ms-4 fs-4">CHI TIẾT PHÒNG</span>
                    <nav aria-label="breadcrumb" style="margin-left:-40px">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                <a href="index.php">
                                    <span class="text-white fw-bold">TRANG CHỦ</span>
                                </a></li>
                            <li class="breadcrumb-item  ">
                                <a href="room.php">
                                    <span class="text-white fw-bold">PHÒNG</span>
                                </a></li>
                            <li class="breadcrumb-item active ">
                                <a href="#">
                                    <span class="text-white fw-bold">CHI TIẾT PHÒNG</span>
                                </a></li>
                        </ol>
                    </nav>
                    
                </div>
    </div>

    </div >
    <div class="row p-4">
               
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
        <div class="row m-3 " >             
            <div class="col-md-7  b-0  ">
                <!-- <img src="../images/<?php echo $row['room_image']?>" class="card-img-top" alt="..."> -->
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                        <img src="../images/<?php echo $row['room_image']?>" class="d-block w-100 card-img-top" style = "height: 400px ;object-fit: cover;"alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                        <img src="../images/<?php echo $row['room_image1']?>" class="d-block w-100 card-img-top" style = "height: 400px ;object-fit: cover;" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../images/<?php echo $row['room_image2']?>" class="d-block w-100 card-img-top" style = "height: 400px ;object-fit: cover;" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../images/<?php echo $row['room_image3']?>" class="d-block w-100 card-img-top" style = "height: 400px ;object-fit: cover;" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                
            </div>
            <div class="col-md-5 ml-7 bt-0" style="padding-left: 24px; padding-right:0px">                 
                    <h1 class="card-title pt-2 pb-1"><?php echo $row['room_type']?></h1>
                    <hr  width="10%" size="2px" align="center" />
                    <h5>Diện tích: <?php echo $row['room_size']?></h5>
                    <h5> Số người: <?php echo $row['room_amount_people']?> </h5>
                    <hr class='dotted' />
                    <h5>Mô tả:</h5>  
                    <p> <?php echo $row['room_description']?> </p>
                    <style>
                        .dotted {border: 1px dotted #ff0000; border-style: none none dotted; color: #fff; background-color: #fff; }
                    </style>
                    <hr class='dotted' />
                    
                     
                    
                    <h5 class="card-text">Giá: <?php echo number_format($row['room_price'])?>₫</h5>
                    <a href="show-order-room.php?id=<?php echo $room_id;?>" method = "GET" class="btn btn-warning mt-0 p-2 "  style="width:8rem; height:3rem;display: flex;align-items: center;justify-content: center;font-size:19px; margin-left: 19rem;">Đặt ngay</a>
            </div>                                 
        </div>
    
        <div class="row m-3">
                <div class="accordion accordion-flush" id="accordionExample">
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