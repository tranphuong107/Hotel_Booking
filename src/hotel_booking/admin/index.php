<?php
    include ('header.php');
    include ('../config.php');
?>
<div class="content p-3">
    <div class="container-fluid mx-auto">
        <div class="col-4 text-center  p-5 m-3 fw-bold float-start" style="width:30%; background-color:#f1f2f6;">

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

        <div class="col-4 text-center p-5 m-3 fw-bold float-start " style="width:30%; background-color:#f1f2f6;">

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

        <div class="col-4 text-center p-5 m-3 fw-bold float-start" style="width:30%; background-color:#f1f2f6;">

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

        <div class="col-4 text-center p-5 m-3  fw-bold float-start" style="width:30%; background-color:#f1f2f6;">
            <?php 
                //Sql Query 
                $sql = "SELECT * FROM tb_order_rooms";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
            ?>
            <h1><?php echo $count; ?></h1>
            <br />
            <label for="" class="fs-4">ĐƠN PHÒNG</label>
        </div>

        <div class="col-4 text-center p-5 m-3  fw-bold float-start" style="width:30%; background-color:#f1f2f6;">
            <?php 
                $sql = "SELECT * FROM tb_order_services";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
            ?>
            <h1><?php echo $count; ?></h1>
            <br />
            <label for="" class="fs-4">ĐƠN DỊCH VỤ</label>
        </div>

        <div class="col-4 text-center p-5 m-3  fw-bold float-start" style="width:30%; background-color:#f1f2f6;">
            <label for="" class="fs-4 mb-1">TỔNG</label>
            <?php 
                $sql1 = "SELECT SUM(ordroom_total) AS Total1 FROM tb_order_rooms WHERE ordroom_status= 'Đã xác nhận'";

                //Execute the Query
                $res1 = mysqli_query($conn, $sql1);

                //Get the VAlue
                $row1 = mysqli_fetch_assoc($res1);
                
                //GEt the Total REvenue
                $sql2 = "SELECT SUM(ordser_total) AS Total2 FROM tb_order_services WHERE ordser_status= 'Đã xác nhận'";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //Get the VAlue
                $row2 = mysqli_fetch_assoc($res2);
                
                //GEt the Total REvenue
                $Total = $row1['Total1'] + $row2['Total2'];
            ?>
            <h1 class=><?php echo $Total; ?></h1> <?php echo 'VNĐ';?>
            <br />
        </div>

    </div>
    
</div>


<?php
    include ('footer.php');
?>