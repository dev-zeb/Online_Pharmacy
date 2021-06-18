
<?php 

session_start();

if ( isset($_POST['email']) &&  isset($_POST['new_password']) && isset($_POST['name']) &&
        isset( $_POST['phone_number'])  && isset($_POST['address']  ) 
         )
{
    
    
    $old_email  =  $_SESSION['email']; 
    
    $email = $_POST['email'];
    $new_pass = $_POST['new_password']; 
    $new_name = $_POST['name']; 
    $new_phn =  $_POST['phone_number']; 
    $new_add = $_POST['address']; 
    
       include "database_connection.php"; 
    if ($new_pass ==NULL)
    {
        $mySql = "UPDATE `user_table` SET `Name`='$new_name',`email`='$email',`address`='$new_add',`phone_number`= '$new_phn' WHERE `email`='$old_email' ";
    }
    else
    {
        $mySql = "UPDATE `user_table` SET `Name`='$new_name',`email`='$email',`address`='$new_add',`phone_number`= '$new_phn',`password`='$new_pass' WHERE `email`='$old_email' "; 
    }
    
        
          try
         {
             //echo "$mysql";
            $conn->exec($mySql);
            echo"  <script>alert('successful');location.assign('profile.php'); </script>";
              
          // echo " $new_pass"; 
             
          }
         catch(PDOException $ex)
         {
             echo"   <script>alert(' not successful try again');
              location.assign('profile_info.php');
              </script>";
         }
    
    
    
    
}


?>
