<?php
    // check data exits in var or not 
    if (isset($_POST['user_email']) && isset($_POST['password']))
    {
        $email = $_POST['user_email'];
        $pass = $_POST['password'];
        
        $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

        if(!$dbconnect){
            die('Could not connect' . mysql_error());
        }
        $sql="select * from user_table where email='$email' and password='$pass' ";
        $result = mysqli_query($dbconnect, $sql);
        // if i found 1 person
        if ($result)
        { 
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email;
            echo"  <script>location.assign('index.php')</script>";
        }
        else
        {
          session_start();
          $_SESSION['logged_in'] = false;
          echo "<script>location.assign('login.php')</script>";
        }
        
    }
    else {
        echo "<script>location.assign('login.php')</script>";
    }
?>