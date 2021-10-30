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

    <!-- List service -->
    <?php
        include '../config.php';

        $sql = "SELECT * FROM tb_services";
        $result = mysqli_query($conn,$sql);


        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $ser_name = $row['ser_name'];
                $ser_room_size = $row['ser_room_size'];
                $ser_description = $row['ser_description'];
                $ser_price = $row['ser_price'];
                $ser_image = $row['ser_images']; 
            
    ?>
    <div class = "container py-2">
        <div class = "row py-3" style = "border-bottom: 2px solid #FFC40E">
            <div class = "col col-3">
            <!-- images -->
                <?php
                    if($ser_image == ""){
                        echo "<div class='error'>Image not Available.</div>";
                    }else{
                    echo '<img src="../images/'.$ser_image.'" alt="" class = "img-fluid h-100 w-100">';
        
                    }
                ?>
            </div>

            <!-- name and more -->
            <div class = "col ">
                    <div>
                        <h2><?php echo $ser_name; ?></h2>
                    </div>
                    <div>Số người: <?php echo $ser_room_size;?></div>
                    <div>Giá tiền: <?php echo $ser_price;?> VNĐ</div>
                    <div><p><?php echo $ser_description; ?></p></div> 
                    <div>
                    <style type="text/css" scoped>
                        .ord:hover{
                            color: black;
                        }
                    </style>
                        <a href="show-order-service.php" class = "ord text-decoration-none " style = "color:#9E6A0D">Đặt dịch vụ >>></a></div>
                    
            </div>

        </div>
    </div>
    <?php }} ?>
</div>
    <!-- List service end -->
</main>
<?php
    include 'footer.php'
?>