<?php
    session_start();
    if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && isset($_POST['cupon']))
    {
        $session_email = $_SESSION['email'];     
        include"database_connection.php";
        $mysql="SELECT * FROM `e_wallet` WHERE user_email='$session_email' ";
        try{
            $return = $conn->query($mysql);
            $table = $return->fetchAll();
            $row = $table[0];
            $reward_amount = $row['reward_amount']; 
            $cupon = $_POST['cupon']; 
            if ( $cupon =="leemon123")
            {
                $reward_amount += 250 ; 
                $mysql2="UPDATE `e_wallet` SET `reward_amount`='$reward_amount' WHERE user_email='$session_email'";
                $conn->exec($mysql2);
                echo"  <script>location.assign('e_wallet.php')</script>";
            }
            else 
            {
                echo"  <script>alert('Not valid cupon');</script>";
                echo"  <script>location.assign('reward.php')</script>";
            }    
        }
        catch(PDOException $ex){
            echo"  <script>alert('Not successful');</script>";
        } 
    }
    else 
        echo"  <script>location.assign('login.php')</script>";
?>