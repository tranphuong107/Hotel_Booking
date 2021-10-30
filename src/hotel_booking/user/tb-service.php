
<?php
    include 'header.php';
?>
<main>
     <!-- Kết thúc thêm nhân viên -->

     <!-- Danh sách nhân viên -->
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Knox_ID</th>
        <th scope="col">Email</th>
        <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../config.php';

            // Thực hiện truy vấn

            $sql = "SELECT * FROM tb_services";
            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo  '<th scope="row">'.$row['ser_ID'].'</th>';
                echo  '<td>'.$row['ser_name'].'</td>';
                echo  '<td>'.$row['ser_room_size'].'</td>';
                echo  '<td>'.$row['ser_description'].'</td>';
                echo   '<td>'.$row['ser_price'].'</td>';
                echo   '</tr>';
                }
            }
        ?>
    </tbody>
    </table>
    <!-- Kết thúc danh sách nhân viên -->
</main>

<?php
    include 'footer.php';
?>

