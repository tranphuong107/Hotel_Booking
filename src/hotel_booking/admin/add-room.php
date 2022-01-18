<?php
    include ('header.php');
    include ('../config.php');
?>
<!-- Add room -->

<div class = "content px-3 ">
<div clas = "m-3 row">
            <a href="# " onclick="openForm4()" id = "close" class = "close" style = "color: #D98E73; text-decoration: none;float: right;font-size:1.5rem;"><i class="far fa-times-circle"></i></a>
            <?php
            include 'popup-cancel-add-room.php';
            ?>
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
                <a href="alert-add-room.php">
                <button type="submit" name="upload" style = "background: #D98E73; text-decoration: none; float: right;color: white" class = "border-0 p-2">
                    Thêm phòng
                    </button>
            </div>
    </form>
   
</div>
<!-- Add room end -->

<?php
    include ('footer.php');
?>