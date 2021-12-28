<?php
    include ('header.php');
    include ('../config.php');
?>
<div class="content p-3">
    <div>
        <div class="">
            <h1 class="text-center pt-3">Danh sách Quản trị viên</h1>
        </div>
        <div class=" p-3 ">
            <form action="" method ="post">
                    <input type="search"  class="my-2 p-2 border-0 rounded-2 " name ="admin-name" style="width: 300px; background-color:#f1f2f6;" name="Search" placeholder="Tìm kiếm...">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: #D98E73 ">
                    <a href="admin-list.php" style="background-color:#D98E73; color: white;" class="py-2 btn btn-primary border-0">Làm mới</a>
                    <a href="add-admin.php"  style = "color:#D98E73;font-size: 2.5rem;float:right;"><i class="far fa-plus-square"></i></a>
                    <!--<div class="float-end py-3">
                    <a href="add-admin.php" style="background-color:#6ab04c; color: white;" class="py-2 btn btn-primary border-0">Thêm Quản trị viên</a>
                    </div>-->
            </form>
            
        </div>
    </div> 

            <table class="table my-3 py-5 border-light  text-aline table-light text-center" style="table-layout: auto;">
                <thead class="table-light">
                    <tr class =" border-dark">
                        <th scope="col" class="top">Mã Quản trị viên</th>
                        <th scope="col" class="top">Tên Quản trị viên</th>
                        <th scope="col" class="top" >Số điện thoại</th>
                        <th scope="col" class="top">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //1 .kết nối csdl 
                        
                        //2. Thực hiện truy vấn
                        if (isset($_POST['btn-search'])){
                            $admin_name = $_POST['admin-name'];
                            $sql = "SELECT *FROM tb_admins WHERE admin_name ='$admin_name'";
                             $result = mysqli_query($conn,$sql);
                             if(mysqli_num_rows($result)>0){
                                 while($row=mysqli_fetch_assoc($result)){
                                     echo '<tr>';
                                     echo '<th scope="row">'.$row['admin_id'].'</th>';
                                     echo '<td>'.$row['admin_name'].'</td>';
                                     echo '<td>'.$row['admin_mobile'].'</td>';
                                     echo '<td>'.$row['admin_email'].'</td>';
                                 }
                            }
                        }else{
                            $sql = "SELECT *FROM tb_admins";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<th scope="row">'.$row['admin_id'].'</th>';
                                    echo '<td>'.$row['admin_name'].'</td>';
                                    echo '<td>'.$row['admin_mobile'].'</td>';
                                    echo '<td>'.$row['admin_email'].'</td>';
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