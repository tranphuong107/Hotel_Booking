    <?php
            include ('header.php');  
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

    <!-- Introduction -->
    <section class = "p-5 m-5">
        <div class = "container" style = "padding: 0 15rem;">
            <h1 class = "subject" style = "color:#a48011"><center>Mona Media Resorts</center></h1>
            <p class = "introduction" style = "text-align:center;color:#272725e8; font-size: 20 !important;">Mona Media Resort tọa lạc ở vị trí đắc địa bên cạnh bờ biển Đà Nẵng, với bờ cát trải dài và không gian xanh lý tưởng, chúng tôi cung cấp những dịch vụ nghỉ dưỡng cao cấp, sang trọng.</p>
        </div>
    </section>
    <!-- Introduction end -->
        <!-- Hotel -->
        <section class = "p-4 bg-light container">
            <div class = "text-uppercase fw-bold m-5"> 
                <h1><center>Khách sạn</center></h1>
            </div>
            <div class = "row row-cols-1 row-cols-md-3 p-0 m-0"> 
                <style type = "text/css" scoped>
                    .ui-card{
                        position: relative;
                    }
                    .ui-card img{
                        transform: scale (1.3);
                        transition: all 0.3s ease-out;
                    }
                    .ui-card:hover img{
                        /* transform: scale(1.1) translateY(20px); */
                        opacity: 0.4;
                    }
                    .description {
                        position: absolute;
                        left: 0;
                        bottom: 0;
                        width: 100%;
                        padding: 15px;
                        text-align: center;
                        font-size: 19px;       
                    }
                    .description h5{
                        transform: translateY(30px);
                        opacity: 0;
                        transition: all 0.3s ease-out;
                    }
                    .description p{
                        transform: translateY(30px);
                        opacity: 0;
                        transition: all 0.3s ease-out;
                    }
                    .description a{
                        transform: translateY(30px);
                        opacity: 0;
                        transition: all 0.3s ease-out;
                    }
                    .ui-card:hover .description h5{
                        transform: translateY(0);
                        opacity: 1;
                    }
                    .ui-card:hover .description p{
                        transform: translateY(0);
                        opacity: 1;
                    }
                    .ui-card:hover .description a{
                        transform: translateY(0);
                        opacity: 1;
                    }
                </style>   
                <?php     
                    include '../config.php';   
                    $sql1 = "SELECT * FROM tb_rooms";
                    $result1 = mysqli_query($conn,$sql1);
                    if($result1 == true){
                        while($row1 = mysqli_fetch_assoc($result1)){
                            echo '<div class="col ui-card" style = "height:25rem !important; margin-bottom: 3rem;">';
                                echo '<img src="../images/'.$row1['room_image'].'" class="card-img h-100" alt="" style ="object-fit:cover">' ;
                                echo '<div class = "description">
                                        <h5 class="card-title text-uppercase fs-4 text-center">'.$row1['room_type'].'</h5>
                                        <p class = "p-3">'.$row1['room_description'].'</p>';
                                echo '<a href= "room.php" class="btn" style = "background-color:#987740;color:white;">Xem chi tiết';
                                echo '</a>';
                                echo '</div>';
                            echo '</div>';
              
                    }}
                    ?>
            </div>
        </section>
        <!-- Hotel end -->

    <!-- Service -->
    <section class = "py-5">
        <div class = "container py-2">
            <h1 class = "text-uppercase fw-bold"><center>Dịch vụ</center></h1>
            <!-- images -->
                <?php
                    $sql = "SELECT * FROM tb_services";
                    $result = mysqli_query($conn,$sql);
                    if($result == true){
                        while($row = mysqli_fetch_assoc($result)){?>
                            <div class = "row justify-content-center py-4" style = "border-bottom: 2px solid #cc9635c7;height: 20rem;" data-aos = "fade-left" data-aos-duration= "1000" data-aos-delay = "200">
                                <div class = "col-3">
                                <?php
                                 if($row['ser_image'] == ""){
                                    echo "<div class='error'>Image not Available.</div>";
                                }else{
                                 echo '<img src="../images/'.$row['ser_image'].'" alt="" style = "height: 17rem !important;padding: 0px; width: 100%;object-fit: cover;">';
                                }?>
                            </div>
                            <div class = "col-8 p-2">
                                <div><h2><?php echo $row['ser_name'];?></h2></div>
                                <div class = "ser-des"><p><?php echo $row['ser_description']; ?></p></div> 
                            <div>
                            <style type="text/css" scoped>
                                .ord:hover{
                                    color: black;
                                }
                            </style>
                                <a href="service.php" class = "ord text-decoration-none" style = "color:#9E6A0D" >Xem chi tiết >>></a></div>
                            </div>
                        </div>
                    <?php
                    }}
                  
                ?>
    </section>

     <!-- Service end -->
</main>
        <?php
            include ('footer.php');
        ?>
