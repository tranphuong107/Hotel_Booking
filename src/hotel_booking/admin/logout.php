<?php
    session_start();//bảo vệ tk admin
    if(isset($_SESSION['loginAdminOK'])){
        unset($_SESSION['loginAdminOK']);
        header ("location:../user/index.php");
    }
?>