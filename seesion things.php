
<?php
session_start();
if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
{
    $session_email = $_SESSION['email']; 
    
    ?>

<!--  Your code goes here  -->

<?php
}
else 
{
    echo"  <script>location.assign('login.php')</script>";
}
?>