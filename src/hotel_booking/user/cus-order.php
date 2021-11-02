<?php
    include ('header.php');
    include ('../config.php');
    if(!isset($_SESSION['loginUserOK'])){
        header ("location:login.php");
    }
?>
    <main>
        <div style ="height: 100vh; background-color: #f1f2f6; " >
            <div class="wapper">
                <h3 class="text-center p-5 ">ĐƠN HÀNG CỦA BẠN</h3>
                <div class="container">
                    <div class="col-6 text-center  p-5 m-5 fw-bold float-start" style =" width:40%; background-color:white;">
                        <h3>đơn 1</h3>
                    </div>
                    <div class="col-6 text-center  p-5 m-5 fw-bold float-start"style ="width:40%; background-color:white;" >
                        <h3>đơn 2</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include('footer.php');
?>