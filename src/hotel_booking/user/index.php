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
        <div class = "container">
        <div class="card-group p-0">
            <a href= "#" class="card text-white m-3" style = "width:15rem">
                <img src="../images/wedding.jpg" class="card-img h-100" alt="">
                <div class="card-img-overlay">
                    <h5 class="card-title text-uppercase fs-4 text-center ">wedding</h5>
                </div>
            </a>
            <a href= "#" class="card bg-image hover-zoom text-white m-3" style = "width:15rem">
                <img src="../images/restaurant.jpg" class="card-img h-100" alt="">
                <div class="card-img-overlay">
                    <h5 class="card-title text-uppercase fs-4 text-center ">restaurant</h5>
                </div>
            </a>
            <a href= "#" class="card bg-image hover-zoom text-white m-3" style = "width:15rem">
                <img src="../images/massage.jpg" class="card-img h-100" alt="">
                <div class="card-img-overlay">
                    <h5 class="card-title text-uppercase fs-4 text-center">massage</h5>
                </div>
            </a>
            <a href= "#" class="card bg-image text-white m-3">
                <img src="../images/meeting-room.jpg" class="card-img h-100" alt="">
                <div class="card-img-overlay">
                    <h5 class="card-title text-uppercase fs-4 text-center">meeting room</h5>
                </div>
            </a>
            
            </div>
        </div>
        </div>
    </section>
     <!-- Service end -->

        <!-- Hotel -->
        <section class = "bg-light p-4">
            <div class = "text-uppercase fw-bold m-5" style = "color:#FFC40E"> 
                <h1><center>Khách sạn</center></h1>
            </div>
            <div class = "container content-justify-center">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#room1">
                        <h1>Nhà 1</h1></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#room2">
                        <h1>Nhà 2</h1></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#room2">
                        <h1>Nhà 3</h1></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#room2">
                        <h1>Nhà 4</h1></a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Hotel end -->
</main>
        <?php
            include ('footer.php');
        ?>
