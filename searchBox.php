<?php
	if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] == true) {
    	session_start();
		$session_email = $_SESSION['email'];
	}
    else if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
		$session_email = $_SESSION['email'];
    }
	else {
		echo"  <script>location.assign('login.php')</script>";
	}
			
?>
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
            #search{
                margin: 0 auto;
            }
            #search:hover{
                border: 1px solid black;
                background-color: orange;
            }
        </style>
    </head>
    <body>
        <!-- Search Box Code Begins Here -->
        <div action='index.php' class='container-fluid'>
            <form method='GET'>
                <div class='form-group'>
                    <div class='row' style="padding: 1.5rem;">
                        <div class='col-md-1 offset-md-1'><p style="font-size: 1.5rem; text-align: center;">Search</p></div>
                        <div class='col-md-6 offset-md-1'>
                            <input type='text' class='form-control' id='name' name='name' placeholder='Enter Product Name To Search'>
                        </div>
                        <div class='col-md-2' style="">
                            <input type='submit' id='search' name='search' class='btn btn-primary btn-block' value='Search'>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Search Box Code Ends Here -->
        <!-- If anything is searched -->
        <?php
            // Get the current user's user_name that is save in $session_email
            $session_email = $_SESSION['email'];
            
            // Build the DB Connection (Procedural)
            $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

            // For DB Connection (PDO)
            $servername = 'localhost';
            $username = 'root';
            $password = '';

            // Build the DB Connection (PDO)
            $conn = new PDO("mysql:host=$servername;port=3306;dbname=online_pharmacy", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(isset($_GET['add']) || isset($_GET['remove'])){
                if(isset($_GET['add'])){
                    $add_id = $_GET['add'];

                    // echo    "<h1 style='margin-top: 10rem;'>$id --> $session_email</h1>";
                    $add_query = "INSERT INTO carts(pro_id, user_name) VALUES('$add_id', '$session_email')";

                    $res_add = $conn->query($add_query);

                    if($res_add){
                        echo    "<script>
                                    window.alert('Item added to cart');
                                </script>";
                    }
                }
                else{
                    $remove_id = $_GET['remove'];
                    $remove_query = "DELETE FROM carts WHERE pro_id = '$remove_id' AND user_name = '$session_email'";
                    $res_remove = $conn->query($remove_query);
                    echo    "<script>
                                window.alert('Item Removed from cart');
                            </script>";
                }
            }
            $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

            if(!$dbconnect){
                die('Could not connect' . mysql_error());
            }

            // If the search button is clicked
            if(isset($_GET['search']))
            {
                $searched = $_GET['name'];
                if($searched != ''){
                    
                    $sql = "SELECT * FROM product WHERE pro_name REGEXP '$searched' OR pro_cat REGEXP '$searched' OR brand REGEXP '$searched'";
                    $result = mysqli_query($dbconnect, $sql);
                    $result1 = mysqli_query($dbconnect, $sql);
                    
                    if(!$result){
                        echo '<h1>FAILING AT RESULT </h1>';
                    }
                    $row1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
                    $length = count($row1);
                    echo	"<div class='container' style='margin-bottom: 2rem;'>
                                <h3 style='color: black; background-color: lime; font-size: 2rem; text-align: center;'> $length Result(s) Found for '$searched' </h3>";
                    if($length > 0){
                        echo	"<div class='card-columns' style='background-color: teal; padding: 5px; border: 2px solid black; margin-bottom: 2.5rem;'>";
                        while($row = mysqli_fetch_array($result)){
                            echo 	"<div class='card' style='max-width: 100%; height: 5hv; padding: 1rem 3rem 1rem 3rem;'>
                                        <div class='card-body text-center' >
                                            <img class='card-img-top' style='max-width: 100%; height: 25vh; padding: 0.5rem;' src='$row[image_dir]' alt='Card image'>
                                            <h4 class='card-title'>$row[pro_name]</h4>
                                            <h6 class='card-text'>Brand: $row[brand]</h6>
                                            <h6 class='card-text'>Category: $row[pro_cat]</h6>
                                            <h6 class='card-text'>PPU: $row[price_per_unit]/-</h6>";
                            
                            $temp = mysqli_fetch_array(mysqli_query($dbconnect, "SELECT * FROM carts WHERE user_name = '$session_email' AND pro_id = '$row[pro_id]'"));
                            if($temp){
                                echo    "<button class='btn btn-success btn-block'>
                                            ADDED
                                        </button>
                                        <form action='searchBox.php' method='GET'>
                                            <button type='submit' name='remove' value='$row[pro_id]' class='btn btn-danger btn-block' style='margin-top: 0.75rem;'>
                                                Click to Remove
                                            </button>
                                        </form>";
                            }
                            else{
                                echo    "<form action='searchBox.php' method='GET'>
                                            <button type='submit' name='add' value='$row[pro_id]' class='btn btn-primary btn-block' style='margin-top: 1.5rem; margin-bottom: 1.5rem;'>
                                                Add to Cart
                                            </button>
                                        </form>";
                            }
                            echo	"</div> <!-- card-body -->
                                </div>";
                        }
                        echo  "</div>"; // card-columns
                    }
                    echo "</div>"; // container
                }
                echo "<hr><hr>";
            }
        ?>
    </body>
</html>