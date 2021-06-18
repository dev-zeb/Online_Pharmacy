<?php
 session_start();
 $user_email =  $_SESSION['email']; 
if (isset($_GET['product_id'])) {

    $product_id = $_GET['product_id'];
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    try {
        $conn = new PDO("mysql:host=$servername;port=3306;dbname=online_pharmacy", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $add_to_cart_sql = "INSERT INTO carts (pro_id, user_name) VALUES ($product_id, '$user_email');";

        $conn->exec($add_to_cart_sql);
    }
    catch (PDOException $ex) {
        echo 'Error: ' . $ex->getMessage();
    }
}

$conn = null;

?>