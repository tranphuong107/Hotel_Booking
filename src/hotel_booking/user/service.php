<?php
    include 'header.php'
?>
<main>
       <!-- Banner -->

       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="../images/b.jpg" class="d-block w-100 h-100" alt="">
            </div>
            <div class="carousel-item">
            <img src="../images/banner1.jpg" class="d-block w-100 h-100" alt="">
            </div>
            <div class="carousel-item">
            <img src="../images/banner2.jpg" class="d-block w-100 h-100" alt="">
            </div>
            <div class="carousel-item">
            <img src="../images/banner3.jpg" class="d-block w-100 h-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>


    <!-- Banner end -->
<div class = "m-5">
    <div class = "text-uppercase fw-bold m-5 pt-3" style = "color:black">
        <h1><center>Dịch vụ</center></h1>
    </div>
    <div class = "container">
    <!-- List service -->
    <form action="show-service-order.php" method="get">
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
    <?php
        include '../config.php';

        $sql = "SELECT * FROM tb_services";
        $result = mysqli_query($conn,$sql);


        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $ser_id = $row['ser_ID'];
                $ser_name = $row['ser_name'];
                $ser_room_size = $row['ser_room_size'];
                $ser_description = $row['ser_description'];
                $ser_price = $row['ser_price'];
                $ser_image = $row['ser_image']; 
            
    ?>
    
        <div class="col-5 m-5">
            <div class="card border-white h-100 lg-dark">
            <style type="text/css" scoped>
                .img-resize{
                    height: 300px !important;
                    padding-bottom: 10px;
                    object-fit: cover;
                    border-bottom : 3px solid #68541c;
                }
                .inner {
                    overflow: hidden;
                }
                .inner img{
                    transition: all 1.5s ease;
                }
                .inner:hover img{
                    transform: scale(1.5);
                }
            </style>
            <div class = "inner">
                <img src="../images/<?php echo $ser_image;?>" class="card-img-top img-resize img-fluid" alt="">
            </div>
            <div class="card-body">
                <h2 class="card-title"><?php echo $ser_name;?></h2>
                <p class="card-text m-1">Số người: <?php echo $ser_room_size;?></p>
                <p class="card-text m-1">Giá dịch vụ: <?php echo $ser_price;?></p>
                <p class="card-text m-1"><?php echo $ser_description;?></p>
                <a href="show-order-service.php?id=<?php echo $ser_id;?>" method = "GET" class = "text-decoration-none m-1" style = "color: #967824">Đặt dịch vụ >>></a>

            </div>
            </div>
        </div>
    
   <?php }} ?>
    </div></form></div>
</div>
    <!-- List service end -->
</main>
<?php
    include 'footer.php'
?>