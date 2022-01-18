<?php
    include ('header.php');
    include ('../config.php');
?>
<div class="content p-3">
<style type="text/css" scoped>
   
    .add-popup{
        background: rgba(0,0,0,0.6);
        width: 100%;
        height: 100%;
        position: absolute;
        top : 0;
        display: none;
        justify-content: center;
        align-items: center;
    }
    .add-content{
        background : white;
        width: 100%; 
        height: 70rem;
        position: absolute;
        top : 0;
    }
    .detail-popup{
        background: rgba(0,0,0,0.6);
        width: 100%;
        height: 100%;
        position: absolute;
        top : 0;
        display: none;
        justify-content: center;
        align-items: center;
    }
    .show-detail{
        background: white;
    }
</style>

<!-- Show service -->
<div class = "service-form">
    <div class = "">
        <div class="">
            <h1 class="text-center pt-3">Danh sách dịch vụ</h1>
        </div>
        <div class="p-3">
            <form action="" method ="post">
                    <input type="search"  class="my-2 p-2 border border-dark  rounded-2 " style="width: 300px; background-color:#f1f2f6;" name="Search" placeholder="Tìm kiếm dịch vụ...">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: #D98E73 ">
                    <a href="service-show.php" style="background-color:#D98E73; color: white;" class="py-2 btn btn-primary border-0">Làm mới</a>
                    <a href="#" id = "add-btn" style = "color:#D98E73;font-size: 2.5rem;float:right;"><i class="far fa-plus-square"></i></a>
            </form>
            
        </div>
    </div> 
    
            <table class="table my-3 py-5 border-light text-center text-aline table-light " style="table-layout: auto;">
                <thead class="table-light ">
                    <tr class =" border-dark">
                        <th scope="col" class="top">Mã dịch vụ</th>
                        <th scope="col" class="top">Tên dịch vụ</th>
                        <th scope="col" class="top" >Sức chứa</th>
                        <th scope="col" class="top " style ="width:38%">Mô tả</th>
                        <th scope="col" class="top">Giá dịch vụ</th>
                        <th scope="col" class="top">Ảnh</th>
                        <th scope="col" class="top">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //1 .kết nối csdl 
                        
                        //2. Thực hiện truy vấn
                       
                        if (isset($_POST['btn-search'])){
                            $ser_name = $_POST['Search'];
                            $sql = "SELECT * FROM  tb_services
                            WHERE  ser_name LIKE '%$ser_name%'";
                             $result = mysqli_query($conn,$sql);
                             if($result == true){
                                 while($row=mysqli_fetch_assoc($result)){
                                     if($row == "" OR $ser_name == ""){

                                     }else{
                                        echo '<tr>';
                                        echo '<th scope="row">'.$row['ser_ID'].'</th>';
                                        echo '<td>'.$row['ser_name'].'</td>';
                                        echo '<td>'.$row['ser_room_size'].'</td>';
                                        echo '<td class="text-start">'.$row['ser_description'].'</td>';
                                        echo '<td style="width:15%" class="text-center">'.number_format($row['ser_price']).' đ</td>';
                                        echo '<td><img src="../images/'.$row['ser_image'].'" class = "img-fluid" style = "width:10rem"></td>';
                                        echo '<td>';?>
                                           <a href="service-detail.php?id=<?php echo $row['ser_ID'];?>" id = "ser-detail"><i class="fas fa-edit text-success" style = "font-size: 1.5rem"></i></a>
                                           <!-- <a href="#"><i class="fas fa-trash-alt text-danger" style = "font-size: 1.5rem"></i></a> -->
                                       <?php echo '</td>';
                                        echo '</tr>';
                                     }
                                 }
                             }
                        }else{
                            $sql = "SELECT ser_ID, ser_name, ser_room_size, ser_description, ser_price, ser_image
                            FROM  tb_services";
                             $result = mysqli_query($conn,$sql);
                             if($result == true){
                                 while($row=mysqli_fetch_assoc($result)){
                                     echo '<tr>';
                                     echo '<th scope="row">'.$row['ser_ID'].'</th>';
                                     echo '<td>'.$row['ser_name'].'</td>';
                                     echo '<td>'.$row['ser_room_size'].'</td>';
                                     echo '<td class="text-start">'.$row['ser_description'].'</td>';
                                     echo '<td style="width:15%" class="text-center">'.number_format($row['ser_price']).' đ</td>';
                                     echo '<td><img src="../images/'.$row['ser_image'].'" class = "img-fluid" style = "width:10rem"></td>';
                                     echo '<td>';?>
                                        <a href="service-detail.php?id=<?php echo $row['ser_ID'];?>" id = "ser-detail"><i class="fas fa-edit text-success" style = "font-size: 1.5rem"></i></a>
                                    <?php echo '</td>';
                                     echo '</tr>';
                        }}}
                            mysqli_close($conn);
                    ?>
                
                </tbody>
            </table>
</div>
<!-- Show service end -->

<!-- Add service -->
<div class = "add-popup" id = "add-popup">
    <div class = "add-content p-5">
        <div clas = "m-3">
            <a href="service-show.php" id = "close" class = "close" style = "color: #D98E73; text-decoration: none;float: right;font-size:1.5rem;"><i class="far fa-times-circle"></i></a>
        </div>
        <h1 class = "text-center" style = "color: #D98E73;">Thêm dịch vụ</h1>
        <form action="add-service-process.php" method="POST" class ="pb-5 pt-3 mb-3  mx-auto" style="width:70%" enctype="multipart/form-data">
            <div class = "my-3">
                <div class="row">
                    <div class="col-lg-2 pt-2 text-begin">Tên dịch vụ:</div>
                    <div class="col">
                        <input type="text" name = "ser-name" class = "form-control">
                    </div>   
                </div>
            </div>
        <div  class = "my-3">
            <div class="row">
                <div class="col-lg-2 pt-2 text-begin">Mô tả:</div>
                <div class="col">                   
                    <textarea name ="ser-des"  cols="30" rows="3" class = "form-control" maxlength = "250"></textarea>
                </div>
            </div>
        </div>
        <div class = "my-3">
            <div class="row">
                <div class="col-lg-2 pt-2 text-begin">Số người:</div>
                <div class="col">
                    <input type="number" name = "ser-room-size" min = "1"  class = "form-control">
                </div>   
            </div>
        </div>
        <div class = "my-3">
            <div class="row">
                <div class="col-lg-2 pt-2 text-begin">Giá tiền:</div>
                    <div class="col">
                        <input type="number"  name = "ser-price"  min = "1"class = "form-control">
                    </div>
                </div>
        </div>
        
        <div class = "my-3">
            <div class="row">
                <div class="col-lg-2 pt-2 text-begin">Ảnh :</div>
                <div class="col">                   
                    <input type="file" name="uploadfile" value=""/>
                </div>
            </div>
        </div>
        <div class = "mt-3">
            <!-- <a href="" type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white" class = "border-5 p-2">Thêm</a> -->
            <button type="submit" name="upload" style = "background: #D98E73; text-decoration: none;float:right; color: white" class = "border-0 p-2">
                  Thêm dịch vụ
                </button>
        </div>
    </form>
    </div>
</div>
<!-- Add service end -->


<script>
    document.getElementById("add-btn").addEventListener("click",function(){
        document.querySelector(".add-popup").style.display = "flex";
    })

    document.querySelector(".close").addEventListener("click",function(){
        document.querySelector(".add-popup").style.display = "none";
    })
</script>
<?php
    include ('footer.php');
?>