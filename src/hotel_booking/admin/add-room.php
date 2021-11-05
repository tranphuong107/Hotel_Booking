<?php
    include '../header.php';
    include '../config.php';
?>
    <main class="container">
        <h2 class="py-3">Thêm thông tin phòng</h2>
        <form action="process-add-room.php" method="post">
            <div class="form-group row">
                <label for="room_type" class="col-sm-2 col-form-label">Tên phòng: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="room_type" name="room_type" >
                </div>
            </div>
            <div class="form-group row">
                <label for="room_size" class="col-sm-2 col-form-label">Kích thước: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="room_size" name="room_size">
                </div>
            </div>
            <div class="form-group row">
                <label for="room_description" class="col-sm-2 col-form-label">Mô tả: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="room_description" name="room_description">
                </div>
            </div>
            <div class="form-group row">
                <label for="room_price" class="col-sm-2 col-form-label">Giá tiền: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="room_price" name="room_price">
                </div>
            </div>

            <div class="form-group row">
                <label for="room_amount_people" class="col-sm-2 col-form-label">Số người: </label>
                <div class="col-sm-10 ">
                <input type="text" class="form-control" id="room_amount_people" name="room_amount_people">                     
                </div>
            </div>
            <div class="form-group row">
                <label for="room_image" class="col-sm-2 col-form-label">Hình ảnh: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="room_image" name="room_image">
                </div>
            </div>
            <div class="form-group row">
                <label for="room_image1" class="col-sm-2 col-form-label">Hình ảnh thêm 1: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="room_image1" name="room_image1">
                </div>
            </div>
            <div class="form-group row">
                <label for="room_image2" class="col-sm-2 col-form-label">Hình ảnh thêm 2: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="room_image2" name="room_image2">
                </div>
            </div>
            <div class="form-group row">
                <label for="room_image3" class="col-sm-2 col-form-label">Hình ảnh thêm 3: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="room_image3" name="room_images3">
                </div>
            </div>


            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <!-- <a href="../index.php"  type="submit" class="btn btn-primary bg-warning my-3 border-0  " >Lưu lại</a> -->
                    <button type="submit" class="btn btn-warning">Lưu lại</button>
                </div>
            </div>
        </form>
    </main>

<?php
    include '../footer.php';
?>