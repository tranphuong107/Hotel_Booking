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

    <!-- Service -->
    <section class = "p-5">
    <style type="text/css" scoped>
        .card:hover{
            opacity: 0.8;
            transform: scale(1.1);
            transition: transform 0.2s ease;
        }
        
    </style>
        <div class = "text-uppercase fw-bold m-5" style = "color:black">
            <h1><center>Dịch vụ</center></h1>
        </div>
      
            
            <div class = "row row-cols-1 row-cols-md-4 p-0">
          
                    
                <?php 
                    include '../config.php';

                    $sql = "SELECT * FROM tb_services";
                    $result = mysqli_query($conn,$sql);

                    if($result == true){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<div class="col" style = "height:30rem !important; margin-bottom: 3rem;">';
                            echo '<a href= "service.php" class="card bg-image text-white m-3 h-100">';
                            echo '<img src="../images/'.$row['ser_image'].'" class="card-img h-100" alt="" style ="object-fit:cover">' ;
                            echo '<div class="card-img-overlay">
                                    <h5 class="card-title text-uppercase fs-4 text-center">'.$row['ser_name'].'</h5>
                                </div>';
                            echo '</a>';
                            echo '</div>';
                        }
                    }
                ?>
            
       
        </div>
    </section>

     <!-- Service end -->

        <!-- Hotel -->
        <section class = "bg-light p-4">
            <div class = "text-uppercase fw-bold m-5" style = "color:#FFC40E"> 
                <h1><center>Khách sạn</center></h1>
                </div>
        <?php        
            $sql1 = "SELECT * FROM tb_rooms";
            $result1 = mysqli_query($conn,$sql1);
             if($result1 == true){
                while($row1 = mysqli_fetch_assoc($result1)){?>
            <div class = "container content-justify-center">
                    <ul class="nav nav-tabs nav-fill mb-3" role="tablist">
                        <?php
                        echo '<li class="nav-item" role="presentation">
                                            <a class="nav-link active" aria-current="page" id = "room-'.$row1['room_id'].'" href="#rooms-'.$row1['room_id'].'">
                                            <h1>'.$row1['room_type'].'</h1></a>
                                        </li>';
                        
                        ?>
                    </ul>

                <div class = "tab-content"> 
                <?php
              
                             echo' <div
                                class="tab-pane fade show active"
                                id="rooms-'.$row1['room_id'].'"
                                role="tabpanel"
                                aria-labelledby="room-'.$row1['room_id'].'"
                                >
                        '.$row1['room_description'].'
                            </div>';
                     
                       
                    ?>
                </div>
            </div>
            <?php
                }}
                ?>
        </section>
        <!-- Hotel end -->
</main>
        <?php
            include ('footer.php');
        ?>
