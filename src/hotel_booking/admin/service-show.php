<?php
    include ('header.php');
    include ('../config.php');
?>
<div class="content p-3">
    <div>
        <div class="">
            <h1 class="text-center pt-3">Danh sách dịch vụ</h1>
        </div>
        <div class=" p-3 ">
            <form action="" method ="post">
                    <input type="search"  class="my-2 p-2 border-0 rounded-2 " name ="ser-name" style="width: 300px; background-color:#f1f2f6;" name="Search" placeholder="Tìm kiếm khách...">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: #D98E73 ">
                    <a href="ordser-show.php" style="background-color:#D98E73; color: white;" class="py-2 btn btn-primary border-0">Làm mới</a>
            </form>
            <a href="add-service-process.php"><i class="far fa-plus-square"></i></a>
        </div>
    </div> 

            <table class="table my-3 py-5 border-light  text-aline table-light text-center" style="table-layout: auto;">
                <thead class="table-light">
                    <tr class =" border-dark">
                        <th scope="col" class="top">Mã dịch vụ</th>
                        <th scope="col" class="top">Tên dịch vụ</th>
                        <!-- <th scope="col" class="top" >Mã dịch vụ</th> -->
                        <th scope="col" class="top">Số lượng:</th>
                        <th scope="col" class="top">Giá dịch vụ</th>
                        <th scope="col" class="top">Mô tả</th>
                        <th scope="col" class="top">Thao tác</th>
                        <th scope="col" class="top">Tình trạng đơn</th>
                        <th scope="col" class="top">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //1 .kết nối csdl 
                        
                        //2. Thực hiện truy vấn
                        if (isset($_POST['btn-search'])){
                            $cus_name = $_POST['cus-name'];
                            $sql = "SELECT o.ordser_id,o.ordser_total,o.ordser_total_day,o.ordser_start,o.ordser_end,o.ordser_status,r.ser_type,r.ser_id,c.cus_name
                            FROM  tb_order_services o ,tb_rooms r ,tb_customers c
                            WHERE  o.ser_id = r.ser_id AND o.cus_id =c.cus_id AND c.cus_name ='$cus_name'";
                             $result = mysqli_query($conn,$sql);
                             if($result == true){
                                 while($row=mysqli_fetch_assoc($result)){
                                     if($row == "" OR $cus_name == ""){

                                     }else{
                                     echo '<tr>';
                                     echo '<th scope="row">'.$row['ordroom_id'].'</th>';
                                     echo '<td>'.$row['cus_name'].'</td>';
                                    //  echo '<td>'.$row['ser_id'].'</td>';
                                     echo '<td>'.$row['ser_name'].'</td>';
                                     echo '<td>'.$row['ordser_start'].'</td>';
                                     echo '<td>'.$row['ordser_total_day'].'</td>';
                                     echo '<td>'.$row['ordser_total'].'</td>';
                                     if($row['ordser_status'] == 1){
                                         echo '<td class = "text-success">Đã xác nhận</td>';
                                     }else{
                                        if($row['ordser_status'] == 0){
                                        echo '<td><a href ="confirm-order.php?ids='.$row['ordser_id'].'" class = "text-decoration-none text-warning">Đang chờ xác nhận</a></td>';
                                        }else{
                                            echo '<td class = "text-danger">Đã hủy</td>';
                                        }
                                     }
                                     
                                     echo '<td><a href ="delete-order.php?ids='.$row['ordroom_id'].'"><i class="fas fa-info"></i></a></td>';
                                     echo '</tr>';
                                     }
                                 }
                             }
                        }
                            mysqli_close($conn);
                    ?>
                
                </tbody>
            </table>
</div>


<?php
    include ('footer.php');
?>