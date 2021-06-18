<?php 
//1.recieve data

// check data exits in var or not 
if (isset($_POST['uname']) && isset($_POST['uemail'])&& isset($_POST['uaddress']) && isset($_POST['uphone_number'])  && isset($_POST['uuser_name'])   && isset($_POST['upassword']) && isset($_POST['udate_joined'])   && $_FILES["uimage"]   )
{
    $name =$_POST['uname']; 
    $email = $_POST['uemail']; 
    $add = $_POST['uaddress'];
    $phone = $_POST['uphone_number'];
    $user_name = $_POST['uuser_name'];
    $pass = $_POST['upassword'];
    $dob = $_POST['udate_joined'];
    //$image = $_['uimage_dir'];
    // database connection
   
    // sql
    
    //$mysql="select * from user_table where email='$email' and password='$pass' ";
    
    //echo "ashce $dob"; 
    //image handleing start 
    
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["uimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["uimage"]["tmp_name"]);
        if($check !== false) {
           // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
        else {
           // echo "File is not an image.";
            $uploadOk = 0;
        }
                                }

// Check if file already exists
if (file_exists($target_file)) {
     //   echo "Sorry, file already exists.<br>";
        echo $target_file;  
        $uploadOk = 0;
    echo "<script>alert('Image already uploaded before here before! please try another')</script>";
    }

// Check file size
if ($_FILES["uimage"]["size"] > 50000000) {
 // echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
//  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["uimage"]["tmp_name"], $target_file)) {
   // echo "The file ". basename( $_FILES["uimage"]["name"]). " has been uploaded.";
  } else {
   // echo "Sorry, there was an error uploading your file.";
  }
}

    
    //stop 
    date_default_timezone_set("Asia/Dhaka");
    
    $date = date("Y-m-d");
    
    include"database_connection.php"; 
    $mysql="INSERT INTO `user_table`(`Name`, `email`, `dob`, `address`, `phone_number`, `user_name`, `password`, `date_joined`, `user_cat`, `image_dir`) VALUES ('$name' ,'$email','$dob','$add','$phone','$user_name','$pass','$date','customer','$target_file')"; 
      //  echo" $mysql";
    
    $mysql2 = "  INSERT INTO `e_wallet`( `balance`, `total_withdraw`, `reward_amount`, `user_email`) VALUES ('0','0','0','$email') "; 
     
        try{
            
          $conn->exec($mysql);
            $conn->exec($mysql2); 
        echo "<script>alert('Successful')</script>";
        echo"<script>location.assign('Login.php')</script>";
        
          
    }
    catch(PDOException $ex){
        
        echo "<script>alert('Not Successful')</script>";
        
        echo"<script>location.assign('signup.php')</script>";
                            }
    
}
else {
   echo "isset e problem ";
  //  echo"<script>location.assign('login.php')</script>";
}


    


?>

