<?php
    include 'header.php';
?>
<div>
<?php
                   //bảo vệ tk user
 
        if(isset($_SESSION['loginUserOK'])){ 
            $ser_id = $_GET['id'];
            include '../config.php';
                    
                    $sql = "SELECT * FROM tb_services WHERE ser_ID = $ser_id";
                    $result = mysqli_query($conn,$sql);

                    if($result == true){
                        while($row = mysqli_fetch_assoc($result)){
                            $ser_id = $row['ser_ID'];
                            $ser_name = $row['ser_name'];
                            $ser_room_size = $row['ser_room_size'];
                            $ser_description = $row['ser_description'];
                            $ser_price = $row['ser_price'];
                            $ser_image = $row['ser_image']; 
?>
        
<style type="text/css" scoped>
    .ser-ord{
        background-image: url('https://www.xmple.com/wallpaper/gradient-brown-highlight-black-linear-1920x1080-c2-8b4513-000000-l-33-a-60-f-21.svg');
    }
    </style>
    <div class = "ser-ord">
        <div class = "container-fluid form-center" style = "padding: 14vh 50vh;" > 
            <form action="process-order-service.php" method = "post" class = "m-3 p-0 mx-auto shadow-lg" style = "background-color:#e0e0cd47">
                <div style >
                    <img src="../images/<?php echo $ser_image;?>" alt="" style = "object-fit:cover;width:100%;height:20rem;">
                </div>
                            
                            <h1 style = "color:#5c3215" class = "ms-5 mt-5">Đặt dịch vụ</h1>
                            <input id = "ser-id" name = "service-id" value = "<?php echo $ser_id;?>" hidden >
                            <div class = "ms-5" style = "color:#d8ac75">
                                <h2><?php echo $ser_name;?> </h2>
                            </div>

                                <div class = "ms-5 my-1 row" style = "color:white">
                                    <div class = "col-3">
                                        Số người :
                                    </div> 
                                    <div class = "col-4 ms-3">
                                        <?php echo $ser_room_size;?>
                                    </div>
                                </div>
                                <div class = "ms-5 my-1 row" style = "color:white">
                                    <div class = "col-3">
                                        Giá dịch vụ :
                                    </div>
                                    <div class = "col-6 ms-3"> 
                                        <input type = "text" id = "ser-price" value = "<?php echo $ser_price;?>" style = "background-color: #ffffff00 !important;border: none !important; color:white;">
                                    </div>
                                </div>
                                <div class = "ms-5 my-1 row" style = "color:white">
                                    <div class = "col-3">
                                        Từ ngày : 
                                        <input type="date" id="from-date" name = "from-date" required>
                                    </div>
                                    <div class = "col-4 ms-3">
                                        Đến ngày : 
                                        <input type="date" id="to-date" name = "to-date" onchange = "myFunction()" required>
                                    </div> 
                                </div>
                                <script type = "text/javascript" scr = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
                                    <script type = "text/javascript">
                                        var fromdate;
                                        $('#from-date').on('change', function() {
                                            alert ("hello!!!");
                                            fromdate = $(this).val();
                                            $('#to-date').prop('min', function() {
                                                return fromdate;
                                            })
                                        });
                                    </script>
                                <div  class = "ms-5 my-1 row" style = "color:white">
                                    <div class = "col-3">
                                        Số ngày:
                                    </div> 
                                    <div class = "col-6 ms-3">
                                        <input type = "text" id = "demo" name = "demo" readonly style = "background-color: #ffffff00 !important;border: none !important; color:white;"></input>
                                    </div> 
                                </div>
                                    <div class = "ms-5 my-1 row"  style = "color:white">
                                    <div class = "col-3">
                                        Tổng số tiền : 
                                    </div> 
                                    <div class = "col-6 ms-3 ">
                                        <input type = "text" id = "total" name = "total" readonly style = "background-color: #ffffff00 !important;border: none !important; color:white; "></input>
                                        <span>VNĐ</span>
                                    </div> 
                                </div>
                                <script>
                                    function myFunction() {
                                        var x = new Date(document.getElementById("from-date").value);
                                        var y = new Date(document.getElementById("to-date").value);
                                        var diff = (y.getTime() - x.getTime())/(1000*3600*24);
                                        document.getElementById("demo").value = diff;
                                        var price = document.getElementById("ser-price").value;
                                        var day = document.getElementById("demo").value;
                                        document.getElementById("total").value = price * day;
                                    }
                                </script>
                            <div>
                                <style type = "text/css" scoped>
                                    .btn:hover{
                                        color:#784f27;
                                    }
                                </style>
                                <button class = "btn m-5" style = "background-color:#b8ab8147" id = "confirm"><h6 class = "mt-2">Xác nhận đặt</h6></button>
                            </div>
                           
                    
            <?php
                }}}else{
                    header ('Location: login.php');
                    }
                ?>       
          
           </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src = "js/ser-js.js"></script>

<?php             
    include 'footer.php';

