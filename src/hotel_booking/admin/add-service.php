<?php
    include ('header.php');
    include ('../config.php');
?>
<!-- Add service -->
<div class = "content px-3 ">
    <div clas = "m-3 row">
            <?php
            include 'popup-cancel-add-service.php';
            ?>
            <a href="#" onclick="openForm5()" id = "close" class = "close" style = "color: #D98E73; text-decoration: none;float: right;font-size:1.5rem;"><i class="far fa-times-circle"></i></a>
        </div>
        <h1 class = "text-center" style = "color: black;">Thêm dịch vụ</h1>
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
            <a href="alert-add-service.php">
            <button type="submit" name="upload" style = "background: #D98E73; text-decoration: none;float:right; color: white" class = "border-0 p-2">
                  Thêm dịch vụ
                </button>
        </div>
    </form>
    </div>
</div>
<!-- Add service end -->



<?php
    include ('footer.php');
?>