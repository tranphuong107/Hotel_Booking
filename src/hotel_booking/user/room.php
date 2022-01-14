<?php include('header.php'); ?>
<?php include('../config.php'); ?>

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
    
    <img src="../images/b3.jpg" class="img-header " style="height: 260px; width:100% ;object-fit:cover;"alt="">
    <div class="col-md-8 pt-5 float-img align-center">
                
                <div class="jumbotron">
                    <span class="text-white ms-5 fs-4">PHÒNG</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                <a href="index.php">
                                    <span class="text-white fw-bold" style="">TRANG CHỦ</span>
                                </a></li>
                            <li class="breadcrumb-item active ">
                                <a href="room.php">
                                    <span class="text-white fw-bold text-decoration-underline">PHÒNG</span>
                                </a></li>
                        </ol>
                    </nav>
                    
                </div>
            </div>
</div>
<div class="container " >
        <div class="row p-4  justify-content-end">
                  
            <div class="col-md-4  ms-4 ">
                    <form action="process-search.php" method="post">
                    
                        <div class="d-flex " >
                            <input class="form-cn me-2 mr-0" type="search" name="search" style="width:300px" placeholder="Bạn muốn phòng nào?" aria-label="Bạn muốn phòng nào?">
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
                echo'<div class="row row-cols-1 row-cols-md-3 g-5  px-4 pb-5">';
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
                        echo'.card-img{
                            object-fit:cover;
                        }
                        .btn:hover{
                            background-color: #ffc40ead;
                            color: black;}';
                    echo'</style>';
                    echo '<div class="col d-flex">';
                        echo'<div class="card flex-fill">';
                       echo'<div class="inner">';
                       echo ' <a href="details-room.php?id='.$row['room_id'].'" class="card-img " >';
                       echo'   <img src="../images/'.$row['room_image'].'" class="card-img-top" style = "height: 200px ;width 100%; object-fit: cover;" alt="...">';
                       echo' </a>';
                       echo'</div>';
                        echo'<div class="card-body">';
                        echo'   <h5 class="card-title">'.$row['room_type'].'</h5>';
                        echo'   <p class="card-text px-2 ">Giá: '.$row['room_price'].'₫</p>';
                        echo'  <a href="details-room.php?id='.$row['room_id'].'" class="btn btn-outline-dark" style = "float:right">Chi tiết...</a>';
                        echo'</div>';
                        echo'</div>';
                    echo'</div>';
               
                }
                echo'</div>';
            }

        ?> 
    
    
</div>
 

<?php include('footer.php'); ?>