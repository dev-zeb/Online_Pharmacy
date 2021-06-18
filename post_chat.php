<?php
  session_start();
  if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_POST['details'])
  {
      $session_email = $_SESSION['email']; 
      include"database_connection.php";
      $message = $_POST['details']; 
      date_default_timezone_set("Asia/Dhaka");
      $date = date("Y-m-d");
      $time = date("h:i:sa");
      $mysql="INSERT INTO `online_chat`( `customer_messege`, `chat_created_date`, `time`, `user_email`) VALUES ('$message','$date','$time','$session_email')"; 
      //echo" $mysql";
      try{
        $conn->exec($mysql);
        // echo "<script>alert('Successful')</script>";
        echo"<script>location.assign('online_chat.php')</script>";      
        //echo"try ";     
      }
      catch(PDOException $ex){
        echo "<script>alert('Not Successful')</script>";
        echo"<script>location.assign('online_chat.php')</script>";
        //echo "catch $date, $time "; 
      }
  }
  else 
      echo"  <script>location.assign('login.php')</script>";
?>