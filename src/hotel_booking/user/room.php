<?php include('header.php'); ?>
<?php include('../config.php'); ?>

<div class="container-fluid" style=" width:100%; margin:0px; padding:0px;">
    
    <img src="../images/Bg_room.jpg" class="img-header" style="height: 400px; width:100% "alt="">
    



</div>
<div class="container" >
        <div class="row">
                
            <div class="col-md-8 p-3">
                
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
            <div class="col-md-4 pt-2  ">
                    <form action="process-search.php" method="post">
                    <!-- <div class="input-group mb-3">
                            <input type="text" name="search" style="width:45%" placeholder="Bạn muốn phòng nào?" aria-label="Bạn muốn phòng nào?" >
                            <button class="btn btn-dark " type="submit" name="btnsearch">SEARCH</button>
                        </div> -->
                        <div class="d-flex " >
                            <input class="form-cn me-2 mr-0" type="search" name="search" style="width:100%" placeholder="Bạn muốn phòng nào?" aria-label="Bạn muốn phòng nào?">
                            <button class="btn btn-dark" type="submit" name="btnsearch">Search</button>
                        </div>
                    </form>
                    
            </div>
            
	    </div>
        <?php
            $sql = "SELECT * FROM tb_rooms";
            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả
            if(mysqli_num_rows($result) > 0){
                echo'<div class="row row-cols-1 row-cols-md-3 g-5">';
                while($row = mysqli_fetch_assoc($result)){
                    echo '<style type="text/css" scoped>';
                        echo'.inner{
                            overflow: hidden;
                        }';
                        echo'.inner img{
                            transition: all 1s ease;
                        }';
                        echo'.inner:hover img{
                            transform: scale(1.1);
                        }';
                    echo'</style>';
                    echo '<div class="col">';
                        echo'<div class="card">';
                       echo'<div class="inner">';
                       echo ' <a href="details-room.php" class="card-img " >';
                       echo'   <img src="../images/'.$row['room_image'].'" class="card-img-top" alt="...">';
                       echo' </a>';
                       echo'</div>';
                        echo'<div class="card-body">';
                        echo'   <h5 class="card-title">'.$row['room_type'].'</h5>';
                        echo'   <p class="card-text  ">Giá: '.$row['room_price'].'₫</p>';
                        echo'  <a href="details-room.php?id='.$row['room_id'].'" class="btn btn-outline-dark">Chi tiết>></a>';
                        echo'</div>';
                        echo'</div>';
                    echo'</div>';
               
                }
                echo'</div>';
            }

        ?> 
    
    
</div>
 

<?php include('footer.php'); ?>