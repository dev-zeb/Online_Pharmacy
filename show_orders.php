
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset='utf-8'>
        <!-- The following meta tag makes the page responsive-->
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta http-equiv='x-ua-compatible' content='ie=edge'>
        
        <link rel='stylesheet' href='Node_modules/css/bootstrap.min.css'>
        <link rel='stylesheet' href='fontawesome-web/css/all.css'>

        <style>
          .orderHolder {
              box-shadow: 0 40px 100px 0 	rgb(153, 153, 153);
              max-width: 1050px;
              margin: auto;
              text-align: center;     
          }
          .title {
              color: black;
              font-size: 18px;
          }
          .center {
              display: block;
              margin-left: auto;
              margin-right: auto;           
          }   
        </style>
    </head>
    <body>    
        <?php include 'navbar.php'; ?>
        <?php include 'searchBox.php'; ?>
        <?php include 'cartView.php'; ?>
        
        <div class="card orderHolder">
            <img src="images/order_details.jpg" alt="Can't find your profile picture" class="center">
            <h1>User email: <?php echo $session_email; ?></h1>
        <?php 
            try{
                $conn = new PDO("mysql:host=localhost:3306;dbname=online_pharmacy","root","");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $ex){
                echo  "<script>location.assign('index.php')</script>";
            }
            // Get the orders from the `orders` table of current user
            $orders_sql = "SELECT * FROM `orders` WHERE ordered_by_user_email='$session_email' order by order_date desc";          
            $return = $conn->query($orders_sql);
            $table = $return->fetchAll();
            $i=0; 
            $j=0;
            // Traverse through each order
            for($i=0; $i< count($table); $i++)
            {
                $row = $table[$i];
                $order_id = $row['order_id'];
                $total_amount = $row['order_total_amouont'];
                $quantity = $row['order_total_quantity'];
                $order_date = $row['order_date'];
                $cart_id = $row['cart_id'];
                $pro_list = $row['product_ids_list'];
                $cart_time = $row['cart_addede_datetime'];
                if($i+1 % 2 == 0)
                    $bg_color = '#b3ffff';
                else
                    $bg_color = '#ffb3ff';      
        ?>
            <h5 class="title" style='background-color: lightgreen; color:black; height: 3rem; font-size: 30px;'> Order No: <?php echo $i+1; ?> </h5>
            <div class='panel panel-default' style='box-shadow:10px 10px 5px grey; background-color:<?php $bg_color; ?>;'>
                <div class="panel-body">
                    ...
                </div>
                <p style="font-size: 20px;font-weight: bold">  <?php echo"Order id: $order_id "?></p>
                <p style="font-size: 20px;font-weight: bold">  <?php echo"Total amount:  $total_amount Tk."?></p>
                <p style="font-size: 20px;font-weight: bold">  <?php echo"Total quantity:  $quantity  "?></p>
                <p style="font-size: 20px;font-weight: bold">  <?php echo"Order date:   $order_date  "?></p>
                <p style="font-size: 20px;font-weight: bold">  <?php echo"Cart added time:    $cart_time  "?></p>
                <p style="font-size: 20px;font-weight: bold"> 
            <?php 
                // Get the product list of each order
                $str = $pro_list; 
                $array = explode(",", $str); 
                $size = sizeof($array);
                $j=0; 
                for($j=1; $j<$size; $j++)
                {
                    $product_sql = "SELECT * FROM `product` WHERE pro_id='$array[$j]'";        
                    $return2 = $conn->query($product_sql);
                    $table_pic = $return2->fetchAll();
                    $row_pic = $table_pic[0];
                    $image_dir_product =$row_pic['image_dir'];
                    $product_name = $row_pic['pro_name'];
                    $product_price = $row_pic['price_per_unit'];
                    $product_brand = $row_pic['brand'];
                    $product_cat = $row_pic['pro_cat'];
            ?>
                <div class="media">
                    <img class="align-self-center mr-3"  style="margin: auto; width:10vw; height: 5vh:"src="<?php echo $image_dir_product ?>" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0"><?php echo $product_name; ?></h5>
                        <p>Price per unit: <?php echo $product_price ?><br>Product category: <?php echo $product_cat ?></p>
                    </div>
                </div>
            <?php            
                }
            ?>
                </p>
            </div>
            <br> 
            <br>
            <br> 
        <?php
            }
        ?>
        </div>
    </body>
</html>