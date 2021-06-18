<?php
    session_start();
    if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_POST['details'] )
    {
        $session_email = $_SESSION['email'];
        $details = $_POST['details'] ; 
        include"database_connection.php";
        $mysql="INSERT INTO `refund`( `request_refund`, `user_email`, `status`) VALUES ('$details','$session_email','applied')";       
        try{
            $conn->exec($mysql);
            echo "<script>alert('Successful')</script>";
            echo"<script>location.assign('refund.php')</script>";
        }
        catch(PDOException $ex){
            echo "<script>alert('Not Successful')</script>";
            echo"<script>location.assign('refund.php')</script>";
        }
    }
    else 
    {
        echo  "<script>location.assign('login.php')</script>";
    }
?>