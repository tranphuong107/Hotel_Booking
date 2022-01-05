<?php
    include ('header.php');
    include ('../config.php');
?>
<div class="content p-3">
    <div>
        <div class="">
            <h1 class="text-center pt-3">Danh sách Khách hàng</h1>
        </div>
        <div class=" p-3 ">
            <form action="" method ="post">
                    <input type="search"  class="my-2 p-2 border border-dark rounded-2 " name ="search" style="width: 300px; background-color:#f1f2f6;" name="Search" placeholder="Tìm kiếm khách...">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: #D98E73 ">
                    <a href="cus-show.php" style="background-color:#D98E73; color: white;" class="py-2 btn btn-primary border-0">Làm mới</a>
            </form>
        </div>
    </div> 

            <table class="table my-3 py-5 border-light  text-aline table-light text-center" style="table-layout: auto;">
                <thead class="table-light">
                    <tr class =" border-dark">
                        <th scope="col" class="top">Mã Khách</th>
                        <th scope="col" class="top">Tên khách hàng</th>
                        <th scope="col" class="top" >Số điện thoại</th>
                        <th scope="col" class="top">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //1 .kết nối csdl 
                        
                        //2. Thực hiện truy vấn
                        if (isset($_POST['btn-search'])){
                            $search = $_POST['search'];
                            $sql = "SELECT * FROM tb_customers WHERE cus_name ='$search' OR cus_id ='$search'";
                             $result = mysqli_query($conn,$sql);
                             if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                     echo '<tr>';
                                     echo '<th scope="row">'.$row['cus_id'].'</th>';
                                     echo '<td>'.$row['cus_name'].'</td>';
                                     echo '<td>'.$row['cus_mobile'].'</td>';
                                     echo '<td>'.$row['cus_email'].'</td>';  
                                }
                            }
                        }else{
                            $sql = "SELECT * FROM tb_customers ";
                             $result = mysqli_query($conn,$sql);
                             if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                     echo '<tr>';
                                     echo '<th scope="row">'.$row['cus_id'].'</th>';
                                     echo '<td>'.$row['cus_name'].'</td>';
                                     echo '<td>'.$row['cus_mobile'].'</td>';
                                     echo '<td>'.$row['cus_email'].'</td>';  
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