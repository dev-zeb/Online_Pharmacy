<!DOCTYPE html>
<html>
    <head>
        <title>All Products Page</title>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <?php include 'searchBox.php'; ?>
        <?php include 'cartView.php'; ?>
        <!-- Breadcrumb Code Begins Here-->
        <div class='container-fluid' style="margin-top: 1rem;">
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item' aria-current='page'><a href='index.php' style='text-decoration: none;'> Home </a></li>
                    <li class='breadcrumb-item active' aria-current='page'>All Products</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb Code Ends Here-->
        <div class="container">
            <h2 class="slider-title">
                <span class="inline-title">All Products</span>
                <span class="line"></span>
                <hr>
            </h2>
            <br>
            <div class="card-columns">
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
                try {

                    $product_query = "SELECT * FROM product";

                    $res = $conn->query($product_query); // $res object
                    $products = $res->fetchAll(); ///extracting the table 

                    for ($i = 0; $i < count($products); $i++) {
                        $row = $products[$i]; // Extract each row
                            
                        echo    "<div class='card' style='max-width: 90%; margin-bottom: 1rem;'>
                                    <img class='card-img-top' style='max-width: 100%;' src='$row[image_dir]' alt='Card image cap'>
                                    <div class='card-body'>
                                        <h4 style='text-align: center;' class='card-title'> $row[pro_name] </h4>
                                        <h6 style='text-align: center;' class='card-text'>Price: $row[price_per_unit]/-</h6>
                                        <h6 style='text-align: center;' class='card-text'>Brand: $row[brand]</h6>";
                        $temp = mysqli_fetch_array(mysqli_query($dbconnect, "SELECT * FROM carts WHERE user_name='$session_email' AND pro_id = '$row[pro_id]'"));     
                        if($temp){
                                echo    "<button class='btn btn-success btn-block'>
                                            ADDED
                                        </button>
                                        <form action='products.php' method='GET'>
                                            <button type='submit' name='remove' value='$row[pro_id]' class='btn btn-danger btn-block' style='margin-top: 0.75rem;'>
                                                Click to Remove
                                            </button>
                                        </form>";
                        }
                        else{
                            echo      "<form action='products.php' method='GET'>
                                            <button type='submit' name='add' value='$row[pro_id]' class='btn btn-primary btn-block' style='margin-top: 1.5rem; margin-bottom: 1.5rem;'>
                                                Add to Cart
                                            </button>
                                        </form>";
                        }
                            echo    "</div>
                                </div>";
                    }
                }
                catch( Exception $e ) {
                    echo    "<script>
                                alert('Database Connection Error!!');
                            </scrip>";
                }
                $conn = null;
            ?>
            </div>
        </div>
        <br>
		<hr>
		<hr>
		<!-- Footer Code Starts Here -->
		<footer class='footer bg-dark text-light'>
			<div class='container'>
				<div class='row'>             
					<div class='col-sm-6'>
						<p style='text-align: center; font-size: 1.5rem; margin-top: 1rem; margin-bottom: .5rem;'><b> Links </b></p>
						<ul class='list-unstyled' style='display: inline'>
							<li><a href='index.php'>Home</a></li>
						</ul>
						<i class='fa fa-phone fa-lg' class='font_awsome'></i> &nbsp; &nbsp;  +8801521466157 <br>
						<i class='fas fa-at fa-lg' class='font_awsome'></i> &nbsp; &nbsp;  azhossain.aj@gmail.com<br>
					</div>
					<div class='col-sm-6'>
						<p style='text-align: center; font-size: 1.5rem'>About Us</p>
						<address style='text-align: center;'>
							This website is basically made for the Project of our
							System Analysis and Design Laboratory course.
							It's an online platform where people can buy medicines,
							Healthcare and Babycare products and more.
						</address>
					</div>
				</div> <!-- END row -->
				<div class='row justify-content-center'>             
					<div class='col-auto'>
						<p>© Copyright 2020 Online Pharmacy</p>
					</div>
				</div> <!-- END row justify-content-center -->
			</div> <!-- END container -->
		</footer>
		<!-- Footer Code Ends Here -->
    </body>
</html>