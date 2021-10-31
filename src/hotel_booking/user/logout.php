<?php
    session_start();//bảo vệ tk admin
    if(isset($_SESSION['loginUserOK'])){
        unset($_SESSION['loginUserOK']);
        header ("location:index.php");
    }
?>