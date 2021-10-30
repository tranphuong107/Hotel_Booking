<?php
    include 'header.php';
?>
<div>
    <h1><center>Thêm dịch vụ</center></h1>
    <form action="" method="post">
        <div>
            Tên dịch vụ
            <input type="text" id = "ser-name">
        </div>
        <div>
        Số người 
        <input type="number" min = "1" id = "ser-room-size"></div>
        <div>
        Giá tiền
        <input type="number" min = "1"  id = "ser-price"></div>
        <div>
        Mô tả
        <textarea name="" id="ser-des" cols="30" rows="3"></textarea>
        <div>
        Ảnh
        <input type="file" id="ser-picture"></div>
        <button>Thêm </button>
    </form>
</div>
<?php
    include 'footer.php';
?>