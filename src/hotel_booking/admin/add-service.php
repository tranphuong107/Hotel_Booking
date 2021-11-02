<?php
    include 'header.php';
?>
    <h1><center>Thêm dịch vụ</center></h1>
    <div id = "content"> 
    <form action="add-service-process.php" method="POST" enctype="multipart/form-data">
          <div class = "container mb">
                Tên bài thi <input type="text" name = "ser-name" class = "form-control">
            </div>
        <div>
            Số người 
            <input type="number" name = "ser-room-size" min = "1"  class = "form-control">
        </div>
        <div>
            Giá tiền
            <input type="number"  name = "ser-price"  min = "1"class = "form-control">
        </div>
        <div>
            Mô tả
            <textarea name ="ser-des"  cols="30" rows="3" class = "form-control"></textarea>
        </div>
            Ảnh
            <input type="file" name="uploadfile" value="" />
  
            <div>
                <button type="submit"
                        name="upload">
                  UPLOAD
                </button>
            </div>

        
  </form>
</div>

<?php
    include 'footer.php';
?>