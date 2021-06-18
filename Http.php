<?php
    session_start();
    if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
        $session_email = $_SESSION['email'];
        $conn = mysqli_connect("localhost", "root", "", "online_pharmacy");

        $b=0;
        for ($a = 0; $a < count($_FILES["images"]["name"]); $a++)
        {
            $path = "images/" . $_FILES["images"]["name"][$a];
            date_default_timezone_set("Asia/Dhaka");
            
            $date = date("Y-m-d");

            mysqli_query($conn, "INSERT INTO `upload_prescription`(`image_dir`,  `user_email`, `up_date`) VALUES ('$path','$session_email ','$date')");
            move_uploaded_file($_FILES["images"]["tmp_name"][$a], $path);
        }
        echo "Done";
    }
    else 
    {
        echo"  <script>location.assign('login.php')</script>";
    }
?>