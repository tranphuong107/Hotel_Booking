<?php
    include ('header.php');
    include ('../config.php');
?>
<div class="content p-3">
    <div>
        <div class="">
            <h1 class="text-center pt-3">Danh sách đơn dịch vụ</h1>
        </div>
        <div class=" p-3 ">
            <form action="" method ="post">
                    <input type="search"  class="my-2 p-2 border border-dark rounded-2 " name ="cus-name" style="width: 300px; background-color:#f1f2f6;" name="Search" placeholder="Tìm kiếm khách...">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: #D98E73 ">
                    <a href="ordser-show.php" style="background-color:#D98E73; color: white;" class="py-2 btn btn-primary border-0">Làm mới</a>
            </form>
        </div>
    </div> 

            <table class="table my-3 py-5 border-light  text-aline table-light text-center" style="table-layout: auto;">
                <thead class="table-light">
                    <tr class =" border-dark">
                        <th scope="col" class="top">Mã Đơn</th>
                        <th scope="col" class="top">Tên Khách </th>
                        <th scope="col" class="top" >Mã dịch vụ</th>
                        <th scope="col" class="top">Tên dịch vụ</th>
                        <th scope="col" class="top">Từ ngày</th>
                        <th scope="col" class="top">Đến ngày</th>
                        <th scope="col" class="top">Tổng </th>
                        <th scope="col" class="top">Tình trạng đơn</th>
                        <th scope="col" class="top">Xác nhận </th>
                        <th scope="col" class="top">Hủy </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //1 .kết nối csdl 
                        
                        //2. Thực hiện truy vấn
                        if (isset($_POST['btn-search'])){
                            $cus_name = $_POST['cus-name'];
                            $sql = "SELECT o.ordser_id,o.ordser_total,o.ordser_end,o.ordser_start,o.ordser_status,s.ser_name,s.ser_id,c.cus_name
                            FROM  tb_order_services o ,tb_services s ,tb_customers c
                            WHERE  o.ser_id = s.ser_id AND o.cus_id =c.cus_id AND c.cus_name ='$cus_name'";
                             $result = mysqli_query($conn,$sql);
                             if(mysqli_num_rows($result)>0){
                                 while($row=mysqli_fetch_assoc($result)){
                                     echo '<tr>';
                                     echo '<th scope="row">'.$row['ordser_id'].'</th>';
                                     echo '<td>'.$row['cus_name'].'</td>';
                                     echo '<td>'.$row['ser_id'].'</td>';
                                     echo '<td>'.$row['ser_name'].'</td>';
                                     echo '<td>'.$row['ordser_start'].'</td>';
                                     echo '<td>'.$row['ordser_end'].'</td>';
                                     echo '<td class="float-end">'.number_format($row['ordser_total']).' đ</td>';
                                     echo '<td>'.$row['ordser_status'].'</td>';
                                     if($row['ordser_status']=='Đã hủy'){
                                        echo '<td><a href =""><i class="fas fa-window-close" style ="color:#eb2f06;"></i></i></a></td>';
                                    }else{
                                        echo '<td><a href ="confirm-order-ser.php?id='.$row['ordser_id'].'"><i class="fas fa-check-circle" style ="color:#6ab04c;"></i></i></a></td>';
                                    }
                                    echo '<td><a href ="cancel-order-ser.php?id='.$row['ordser_id'].'"><i class="fas fa-window-close" style ="color:#eb2f06;"></i></i></a></td>';
                                    echo '</tr>';
                                 }
                             }
                        }else{
                            $sql = "SELECT o.ordser_id,o.ordser_total,o.ordser_end,o.ordser_start,o.ordser_status,s.ser_name,s.ser_id,c.cus_name
                            FROM  tb_order_services o ,tb_services s ,tb_customers c
                            WHERE  o.ser_id = s.ser_id AND o.cus_id =c.cus_id ";
                             $result = mysqli_query($conn,$sql);
                             if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                     echo '<tr>';
                                     echo '<th scope="row">'.$row['ordser_id'].'</th>';
                                     echo '<td>'.$row['cus_name'].'</td>';
                                     echo '<td>'.$row['ser_id'].'</td>';
                                     echo '<td>'.$row['ser_name'].'</td>';
                                     echo '<td>'.$row['ordser_start'].'</td>';
                                     echo '<td>'.$row['ordser_end'].'</td>';
                                     echo '<td class="text-end">'.number_format($row['ordser_total']).' đ</td>';
                                     echo '<td>'.$row['ordser_status'].'</td>';
                                    if($row['ordser_status']=='Đã hủy'){
                                        echo '<td><a href ="#"><i class="fas fa-times-circle" style ="color:#eb2f06;"></i></a></td>';
                                        echo '<td><a href ="#"><i class="fas fa-times-circle" style ="color:#eb2f06;"></i></a></td>';
                                    }else if($row['ordser_status']=='Chờ xác nhận'){
                                        echo '<td><a href ="#" onclick="openForm1()"><i class="fas fa-check-circle" style ="color:#535c68;"></i></a></td>';
                                        echo '<td><a href ="#" onclick="openForm2()"><i class="fas fa-times-circle" style ="color:#535c68;"></i></a></td>';
                                    }
                                    else{
                                        echo '<td><a href ="#" ><i class="fas fa-check-circle" style ="color:#6ab04c;"></i></a></td>';
                                        echo '<td><a href ="#" onclick="openForm2()"><i class="fas fa-times-circle" style ="color:#535c68;"></i></a></td>';
                                    }
                                    echo '</tr>';
                                    include ('popup-confirm-ser.php');
                                    include ('popup-cancel-ser.php');  
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