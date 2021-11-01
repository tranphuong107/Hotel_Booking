<?php
    include 'header.php';
?>
<div>
<?php
                   //bảo vệ tk user
 
        if(isset($_SESSION['loginUserOK'])){ 
        $ser_id = $_GET['id'];
        
?>
        
<style type="text/css" scoped>
    .ser-ord{
        background-image: url('https://www.xmple.com/wallpaper/gradient-brown-highlight-black-linear-1920x1080-c2-8b4513-000000-l-33-a-60-f-21.svg');
    }
    </style>
    <div class = "ser-ord">
        <div class = "container-fluid form-center" style = "padding: 14vh 56vh;" > 
                <form action="process-order-service.php" method = "post" class = "m-3 p-5 mx-auto shadow-lg" style = "background-color:#d2cebd5e">
                    <h1 style = "color:#9E6A0D" class = "mb-5">Đặt dịch vụ</h1>
            <?php    
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
                        $ser_image = $row['ser_images']; 
                    ?>
                    
                    <div class = "row"></div>
                            <div class = "m-1" style = "color:#d8ac75">
                                <h2> <?php echo $ser_name;?> </h2>
                            </div>
                            <div class = "m-1" style = "color:white">
                                Số người : <?php echo $ser_room_size;?>
                            </div>
                            <div class = "m-1" style = "color:white">
                                Giá dịch vụ : <input type = "number" id = "ser-price" value = "<?php echo $ser_price;?>" oninput="totalPrice()" readonly></input>
                            </div>
                            <div class = "m-1" style = "color:white">
                                Từ ngày : <input type="date" id="from-date" oninput="dateDiff()">
                                Đến ngày : <input type="date" id="to-date" oninput="dateDiff()">
                            </div>
                            <div  class = "m-1" id = "sum-date"  style = "color:white">
                                Số ngày:
                                <input type = "text" id = "demo" name = "demo" oninput="totalPrice()" readonly ></input>
                            </div>
                                <script>
                                    function dateDiff() {
                                    var x = new Date(document.getElementById("from-date").value);
                                    var y = new Date(document.getElementById("to-date").value);
                                    var diff = (y.getTime() - x.getTime())/(1000*3600*24)
                                    document.getElementById("demo").value = diff;
                                    }
                                </script>
                            <div class = "m-1"  style = "color:white">
                                Tổng số tiền : 
                                <input type = "number" id = "total" name = "total" readonly ></input>
                            </div>
                                <script>
                                    function totalPrice() {
                                        var price = document.getElementById("ser-price").value;
                                        // var day = document.getElementById("demo").value;
                                        // var sum = price * day
                                        document.getElementById("total").value = price;
                                    }
                                </script>
                            <button class = "btn" style = "background-color:#9E6A0D" id = "confirm">Xác nhận đặt</button>
                   
                    
            <?php
                }}}else{
                    header ('Location: login.php');
                    }
                ?>       
          
           </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src = "js/ser-js.js"></script>

<?php            
    include 'footer.php';

