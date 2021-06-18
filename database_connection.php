<?php 
 
    try{
        
        $conn= new PDO("mysql:host=localhost:3306;dbname=online_pharmacy","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
    }
    catch(PDOException $ex){
        
         echo"  <script>location.assign('index.php')</script>";
    }
    

?>