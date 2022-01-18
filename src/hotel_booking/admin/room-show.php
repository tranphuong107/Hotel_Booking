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
        height: 100rem;
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
<!-- Show room -->
<div class="room-form">
    <div class="">
        <div class="">
            <h1 class="text-center pt-3">Danh sách phòng</h1>
        </div>
        <div class=" p-3 ">
            <form action="" method ="post">
                    <input type="search"  class="my-2 p-2 border border-dark rounded-2 " style="width: 300px; background-color:#f1f2f6;" name="Search" placeholder="Tìm kiếm phòng...">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: #D98E73 ">
                    <a href="room-show.php" style="background-color:#D98E73; color: white;" class="py-2 btn btn-primary border-0">Làm mới</a>

                    <a href="#" id = "add-btn" style = "color:#D98E73;font-size: 2.5rem;float:right;"><i class="far fa-plus-square"></i></a>

            </form>
            
        </div>
    </div> 

            <table class="table my-3 py-5 border-light  text-aline table-light text-center" style="table-layout: auto;">
                <thead class="table-light">
                    <tr class =" border-dark">
                        <th scope="col" class="top">Mã phòng</th>
                        <th scope="col" class="top">Tên phòng</th>
                        <th scope="col" class="top">Diện tích</th>
                        <th scope="col" class="top" style="width:30rem">Mô tả</th>
                        <th scope="col" class="top">Giá tiền</th>
                        <th scope="col" class="top">Số người</th>
                        <th scope="col" class="top">Ảnh 1</th>
                        <th scope="col" class="top">Ảnh 2</th>
                        <th scope="col" class="top">Ảnh 3</th>
                        <th scope="col" class="top">Ảnh 4</th>
                        <th scope="col" class="top">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //1 .kết nối csdl 
                        
                        //2. Thực hiện truy vấn
                        if (isset($_POST['btn-search'])){
                            $room_type = $_POST['Search'];
                            $sql = "SELECT * FROM  tb_rooms
                            WHERE room_type LIKE '%$room_type%'";
                             $result = mysqli_query($conn,$sql);
                             if($result == true){
                                 while($row=mysqli_fetch_assoc($result)){
                                     if($row == "" OR $room_type == ""){

                                     }else{
                                        echo '<tr>';
                                        echo '<th scope="row">'.$row['room_id'].'</th>';
                                        echo '<td>'.$row['room_type'].'</td>';
                                        echo '<td>'.$row['room_size'].'</td>';
                                        echo '<td class="text-start">'.$row['room_description'].'</td>';
                                        echo '<td>'.number_format($row['room_price']).'đ</td>';
                                        echo '<td>'.$row['room_amount_people'].'</td>';
                                        echo '<td><img src="../images/'.$row['room_image'].'" class = "img-fluid" style = "width:10rem"></td>';
                                        echo '<td><img src="../images/'.$row['room_image1'].'" class = "img-fluid" style = "width:10rem"></td>';
                                        echo '<td><img src="../images/'.$row['room_image2'].'" class = "img-fluid" style = "width:10rem"></td>';
                                        echo '<td><img src="../images/'.$row['room_image3'].'" class = "img-fluid" style = "width:10rem"></td>';
                                        echo '<td>';?>
                                           <a href="update-room.php?id=<?php echo $row['room_id'];?>" id = "update-room"><i class="fas fa-edit text-success" style = "font-size: 1.5rem"></i></a>
                                           <!-- <a href="#"><i class="fas fa-trash-alt text-danger" style = "font-size: 1.5rem"></i></a> -->
                                       <?php echo '</td>';
                                        echo '</tr>';
                                     }
                                 }
                             }
                        }else{
                            $sql = "SELECT * FROM  tb_rooms";
                             $result = mysqli_query($conn,$sql);
                             if($result == true){
                                 while($row=mysqli_fetch_assoc($result)){
                                     echo '<tr>';
                                     echo '<th scope="row">'.$row['room_id'].'</th>';
                                     echo '<td>'.$row['room_type'].'</td>';
                                     echo '<td>'.$row['room_size'].'</td>';
                                     echo '<td class="text-start">'.$row['room_description'].'</td>';
                                     echo '<td>'.number_format($row['room_price']).'đ</td>';
                                     echo '<td>'.$row['room_amount_people'].'</td>';
                                     echo '<td><img src="../images/'.$row['room_image'].'" class = "img-fluid " style = "width:10rem"></td>';
                                     echo '<td><img src="../images/'.$row['room_image1'].'" class = "img-fluid " style = "width:10rem"></td>';
                                     echo '<td><img src="../images/'.$row['room_image2'].'" class = "img-fluid " style = "width:10rem"></td>';
                                     echo '<td><img src="../images/'.$row['room_image3'].'" class = "img-fluid " style = "width:10rem"></td>';
                                     echo '<td>';?>
                                        <a href="update-room.php?id=<?php echo $row['room_id'];?>" id = "update-room"><i class="fas fa-edit text-success" style = "font-size: 1.5rem"></i></a>
                                    <?php echo '</td>';
                                     echo '</tr>';
                        }}}
                            mysqli_close($conn);
                    ?>
                
                </tbody>
            </table>
</div>
<!-- Show room end -->

<!-- Add room -->
<div class = "add-popup" id = "add-popup">
    <div class = "add-content p-5">
        <div clas = "m-3">
            <a href="room-show.php" id = "close" class = "close" style = "color: #D98E73; text-decoration: none;float: right;font-size:1.5rem;"><i class="far fa-times-circle"></i></a>
        </div>
        <h1 class="text-center" style = "color: black;">Thêm phòng</h1>
        <form action="process-add-room.php" method="POST" class ="pb-5 pt-3 mb-3  mx-auto" style="width:70%" enctype="multipart/form-data">
            <div class = "my-3">
                <div class="row">
                    <div class="col-lg-2 pt-2 text-begin">Tên phòng:</div>
                    <div class="col">
                        <input type="text" name = "room-type" class = "form-control">
                    </div>
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
                    <div class="col-lg-2 pt-2 text-begin">Diện tích:</div>
                    <div class="col">
                        <input type="text" name = "room-size"  class = "form-control">
                    </div>
                </div>
            </div>
            <div  class = "my-3">
                <div class="row">
                    <div class="col-lg-2 pt-2 text-begin">Mô tả:</div>
                    <div class="col">
                        <textarea name ="room-des"  cols="30" rows="3" class = "form-control" maxlength = "250"></textarea>
                    </div>
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
                    <div class="col-lg-2 pt-2 text-begin">Giá tiền:</div>
                    <div class="col">
                        <input type="number"  name = "room-price"  min = "1"class = "form-control">   
                    </div>
                </div>
            </div>
            <div class = "my-3">

                <div class="row">
                    <div class="col-lg-2 pt-2 text-begin">Số người:</div>
                    <div class="col">
                        <input type="number"  name = "room-amount-people"  min = "1"class = "form-control">
                    </div>

                </div>
            </div>
            <div class = "row my-3"> 
                <div class="col-md-6">
                    Ảnh 1: <input type="file" name="uploadfile" value=""/>
                </div>
                <div class = "col-md-6">
                    Ảnh 2: <input type="file" name="uploadfile1" value=""/>
                </div>
            </div>

            
            
            <div class = "row my-3">
                <div class="col-md-6">
                    Ảnh 3: <input type="file" name="uploadfile2" value=""/>
                </div>
                <div class = "col-md-6">
                    Ảnh 4: <input type="file" name="uploadfile3" value=""/>
            </div>

            </div>
            
            <div class = "mt-3">
                <!-- <a href="" type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white" class = "border-5 p-2">Thêm</a> -->
                <button type="submit" name="upload" style = "background: #D98E73; text-decoration: none; float: right;color: white" class = "border-0 p-2">
                    Thêm phòng
                    </button>
            </div>
    </form>
    </div>
</div>
<!-- Add room end -->


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
                      