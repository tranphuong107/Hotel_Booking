<?php
    include 'header.php'
  
?>

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
    <div class="col-md-8 pt-4 float-img ">
                
                <div class="jumbotron ">
                    <span class="text-white ms-5 fs-4">DỊCH VỤ</span>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                <a href="index.php">
                                    <span class="text-white fw-bold">TRANG CHỦ</span>
                                </a></li>
                            <li class="breadcrumb-item active ">
                                <a href="service.php">
                                    <span class="text-white fw-bold">DỊCH VỤ</span>
                                </a></li>
                        </ol>
                    </nav>
                    
                </div>
    </div>
</div>
<div class="container" >
        <div class="row p-5">
               
	    </div>
        <?php
            include '../config.php';
            $sql = "SELECT * FROM tb_services";
            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả
            if(mysqli_num_rows($result) > 0){
                echo'<div class="row row-cols-1 row-cols-md-3 g-5 px-4 pb-5">';
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
                       echo'   <img src="../images/'.$row['ser_image'].'" class="card-img-top" style = "height: 200px ;width 100%; object-fit: cover;" alt="...">';
                      
                       echo'</div>';
                        echo'<div class="card-body">';
                        echo'   <h5 class="card-title">'.$row['ser_name'].'</h5>';
                        echo'   <p class="card-title px-2 fs-6">Số người: '.$row['ser_room_size'].'</p>';
                        echo'   <p class="card-title px-2 fs-6">Số tiền: '.number_format($row['ser_price']).'đ</p>';
                        echo'   <p class="card-text text-muted px-2">'.$row['ser_description'].'</p>';
                        echo'  <a href="show-order-service.php?id='.$row['ser_ID'].'" class="btn btn-outline-dark align-bottom;" style = " float:right">Đặt dịch vụ...</a>';
                        echo'</div>';
                        echo'</div>';
                    echo'</div>';
               
                }
                echo'</div>';
            }

        ?> 
    
    
</div> 
    

<?php
    include 'footer.php'
?>