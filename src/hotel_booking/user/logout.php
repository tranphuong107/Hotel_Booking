<?php
    session_start();//bảo vệ tk admin
    if(isset($_SESSION['loginuOK'])){
        unset($_SESSION['loginuOK']);
        header ("location:index.php");
    }
?>