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
                        <div class="input-group mb-3">
                            <input type="text" name="search" style="width:45%" placeholder="Bạn muốn phòng nào?" aria-label="Bạn muốn phòng nào?" >
                            <button class="btn btn-dark " type="submit" name="btnsearch">SEARCH</button>
                        </div>
                    </form>
                    
            </div>
            
	    </div>
        <?php
            $sql = "SELECT room_image,room_type, room_price FROM tb_rooms";
            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả
            if(mysqli_num_rows($result) > 0){
                echo'<div class="row row-cols-1 row-cols-md-3 g-5">';
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
            }

        ?> 
    
    
</div>
 

<?php include('footer.php'); ?>