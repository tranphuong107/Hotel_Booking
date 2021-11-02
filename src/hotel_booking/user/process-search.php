<?php include('header.php'); ?>
<?php include('../config.php'); ?>

<main>
    <div class="header-inner">
        <img src="../images/Bg_room.jpg" class="img-fluid w-100 h-100" alt="">
    </div>


</main>
    <div class="container" >
        <div class="row">
            <div class="col-md-5 p-3">
                
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
                        </ol>
                    </nav>
                    
                </div>
            </div>
            <div class="col-md-6 pt-2  ">
                    <form action="process-search.php" method="post">
                        <div class="input-group">
                            <input type="text" name="search" style="width:45%" placeholder="Bạn muốn phòng nào?"  >
                            <!-- <select class="form-select" id="inputGroupSelect02" style="width:20%; padding:0px">
                                <option selected>LOẠI PHÒNG</option>
                                <option value="1">Single Room</option>
                                <option value="2">Double Room</option>
                                <option value="3">Family Room</option>
                            </select>
   -->
                            <button class="btn btn-dark " type="submit" name="btnsearch">SEARCH</button>
                        </div>
                    </form>
                    
            </div>
            
	    </div>
        
        <?php 
                if(isset($_POST['btnsearch'])){
                    $search = $_POST['search'];
                }
               
                $sql = "SELECT * FROM tb_rooms WHERE room_type LIKE '%$search%' ";
              
                //Execute the Query
                $result = mysqli_query($conn, $sql);

           
                if(mysqli_num_rows($result) > 0){
                    echo'<div class="row row-cols-1 row-cols-md-3 g-5 ">';
                    while($row = mysqli_fetch_assoc($result)){
                        
                        echo '<div class="col">';
                            echo'<div class="card">';
                            echo ' <a href="details-room.php" class="card-img " >';
                            echo'   <img src="../images/'.$row['room_image'].'" class="card-img-top" alt="...">';
                            echo' </a>';
                            echo'<div class="card-body">';
                            echo'   <h5 class="card-title">'.$row['room_type'].'</h5>';
                            echo'   <p class="card-text  ">Giá: '.$row['room_price'].'₫</p>';
                            echo'  <a href="details-room.php" class="btn btn-outline-dark">Chi tiết>></a>';
                            echo'</div>';
                            echo'</div>';
                        echo'</div>';
                   
                    }
                    echo'</div>';
                }else
                {
                    //Food Not Available
                    echo "<div class='error'>Room not found.</div>";
                }
    
           
            ?>

        
    
    <!-- <div class="row row-cols-1 row-cols-md-3 g-5">
        <div class="col">
            <div class="card">
                <a href="#" class="card-img " >
                    <img src="../images/single_room.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Superior Single Room</h5>
                    <p class="card-text  ">Giá: 2,000,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../images/double_room.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Deluxe Double Room</h5>
                    <p class="card-text">Giá: 2,500,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../images/family_room.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Luxury Family Room Suite</h5>
                    <p class="card-text">Giá: 3,500,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../images/single_room2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Luxury Single Room Art</h5>
                    <p class="card-text">Giá: 900,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../images/single_room3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Prenium Deluxe Double Room</h5>
                    <p class="card-text">Giá: 3,000,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div> -->
        <!-- <div class="col">
            <div class="card">
            <img src="../images/single_room4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Prenium Double Room Suite</h5>
                <p class="card-text">Giá: 1,000,000₫</p>
                <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
            </div>
            </div>
        </div> -->
    <!-- </div>-->
</div>
 

<?php include('footer.php'); ?>