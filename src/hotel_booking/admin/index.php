<?php
    include ('header.php');
    include ('../config.php');
?>
<div class="content p-3">
    <div class="container-fluid mx-auto">
        <div class="col-6 text-center  p-5 m-4 fw-bold float-start" style="width:36%; background-color:#f1f2f6;">

            <?php 
                //Sql Query 
                $sql = "SELECT * FROM tb_rooms";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
                
            ?>
        <h1><?php echo $count; ?></h1>
        <br />
        <label for="" class="fs-4">PHÒNG</label>
        </div>

        <div class="col-6 text-center p-5 m-4 fw-bold float-start " style="width:36%; background-color:#f1f2f6;">

            <?php 
                //Sql Query 
                $sql = "SELECT * FROM tb_services";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
            ?>

        <h1><?php echo $count; ?></h1>
        <br />
        <label for="" class="fs-4">DỊCH VỤ</label>
        </div>

        <div class="col-6 text-center p-5 m-4 fw-bold float-start" style="width:36%; background-color:#f1f2f6;">

            <?php 
                //Sql Query 
                $sql = "SELECT * FROM tb_customers";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
            ?>

        <h1><?php echo $count; ?></h1>
        <br />
        <label for="" class="fs-4">KHÁCH</label>
        </div>
        <div class="col-6 text-center p-5 m-4 fw-bold float-start" style="width:36%; background-color:#f1f2f6;">

            <?php 
                //Sql Query 
                $sql = "SELECT * FROM tb_order_rooms";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);

                $sql = "SELECT * FROM tb_order_services";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count1 = mysqli_num_rows($res);
                $tong = $count +$count1;

            ?>

        <h1><?php echo $tong; ?></h1>
        <br />
        <label for="" class="fs-4">ĐƠN HÀNG</label>
        </div>
    </div>
    
</div>


<?php
    include ('footer.php');
?>