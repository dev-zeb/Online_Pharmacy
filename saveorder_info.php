<?php
    session_start();
    $session_email = $_SESSION['email'];
    
    try{
        $conn = new PDO("mysql:host=localhost:3306;dbname=online_pharmacy","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex){
        echo  "<script>location.assign('index.php')</script>";
    }

    // First Get the items from the cart
    $items_sql = "SELECT * FROM carts WHERE user_name = '$session_email'";
    $return = $conn->query($items_sql);
    $cart_items = $return->fetchAll();
    $i = 0;                 // To iterate the products
    $total_price = 0;       // To store the total price of the products
    $concat_pro_ids = "0";  // To store all the item ids as a string
    for($i=0; $i< count($cart_items); $i++){
        $row = $cart_items[$i];
        $cart_id = $row['id'];
        $product_id  = $row['pro_id'];
        $datetime_cart = $row['cart_added'];
        
        // Get the details of each item from the `product` table
        $product_sql = "SELECT * FROM `product` WHERE pro_id = '$product_id'";
        $return2 = $conn->query($product_sql);
        $table2 = $return2->fetchAll();
        $row2 = $table2[0];
        $product_price = $row2['price_per_unit'];
        $total_price = $total_price + $product_price; 
        $concat_pro_ids .= ", " . $product_id;         
    }

    date_default_timezone_set("Asia/Dhaka");
    $date_currrent = date("Y-m-d h:i:s");
    
    // Insert the order info into the `orders` table and remove the items from the cart
    $place_order_sql = "INSERT INTO `orders`( `ordered_by_user_email`, `order_total_amouont`, `order_total_quantity`, `order_date`, `cart_id`, `product_ids_list`, `cart_addede_datetime`) VALUES ('$session_email','$total_price','$i','$date_currrent','$cart_id',' $concat_pro_ids','$datetime_cart')";
    $delete_cart_sql = "DELETE FROM `carts` WHERE user_name='$session_email'";
    try{
        $conn->exec($place_order_sql);
        $conn->exec($delete_cart_sql);
        echo "<script>alert('Order Placed Successfully!');</script>";
        echo  "<script>location.assign('show_orders.php')</script>";
    }
    catch(PDOException $ex){
        echo "<script>alert('Couldn't place the order!');</script>";
        echo  "<script>location.assign('show_orders.php')</script>";
    }
?>