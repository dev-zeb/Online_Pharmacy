<?php
    session_start();
    $_SESSION['logged_in']=false ;
    if(isset($_POST['adminLogout']))
        echo    "<script>location.assign('adminLogin.php');</script>";
    else
        echo    "<script>location.assign('login.php')</script>";

?>

