<?php
	session_start();
	if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
	{
		$session_email = $_SESSION['email'];
	}
	else 
	{
		#echo"  <script>location.assign('login.php')</script>";
	}
			
?>

<!DOCTYPE html>
<html lang='en'>
  <head>
		<!-- Required meta tags always come first -->
		<meta charset='utf-8'>
		<!-- The following meta tag makes the page responsive-->
		<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
		<meta http-equiv='x-ua-compatible' content='ie=edge'>
		
		<link rel='stylesheet' href='Node_modules/css/bootstrap.min.css'>
		<link rel='stylesheet' href='fontawesome-web/css/all.css'>
		
		<title>Home Page</title>

		<style>
			#field:hover{
				border: 1px solid green;
			}
			#search:hover{
				border: 1px solid black;
				background-color: orange;
			}
			.carousel-item.active,
			.carousel-item-next,
			.carousel-item-prev {
				display: block;
			}
			/* style for the indicators starts here */
			.carousel-indicators li {
				display: inline-block;
				text-indent: 0;
				cursor: pointer;
				border: 1px solid black;
			
				border-radius: 20%;
				width: 40px;
				height: 20px;
				
				margin-top: 40px;
				background-color: navy;
				box-shadow: inset 1px 1px 1px 1px rgba(0,0,0,0.5);    
			}
			.carousel-indicators .active {
				border: 1px solid black;
			
				border-radius: 20%;
				width: 40px;
				height: 20px;
				
				background-color: black;
			}
			
			
			/* style for the carousel-control starts here */
			.carousel-control-prev-icon,
			.carousel-control-next-icon {
				background-image: none;
			}

			.carousel-control-next-icon:after
			{
				content:'>';
				font-size: 55px;
				color: black;
			}

			.carousel-control-prev-icon:after {
				content:'<';
				font-size: 55px;
				color: black;
			}
			.col-sm{
				margin-right: 1rem;
				padding: 1rem;
			}
			.dbox{
				border: 5px solid yellow;
			}
			.dbox2{
				margin-top: 3.5rem;
			}
			.cbox{
				border: 3px solid black;
				height: 380px;
			}
			.cbox2{
				border: 3px solid black;
				height: 300px;
				margin-bottom: 5%;
			}
			#aText{
				margin-left: 45%;
				margin-top: 3%;
				color: black;
			}
		</style>
	</head>
    
  <body>
		<!-- Navbar Code Begins Here-->
      <div class="col-sm">
			<nav class="navbar navbar-expand-md fixed-top" style="background-color: lightblue;">
				<button class="navbar-toggler navbar-light" style="border-color: black; border-width: 2px; opacity: 100%;" data-toggle="collapse" data-target="#navbarMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand mr-auto" href="home.php"><img src="images/logo1.png" height="30" width="41"></a>
				<div class="collapse navbar-collapse" id="navbarMenu">
					<ul class="navbar-nav mr-auto"> 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" style="color: black; margin-left: 10px;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								MENU
							</a>
							<div class="dropdown-menu" style="width: 200px; background-color: lightblue;" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="profile.php" style="color: black;">My Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="show_orders.php" style="color: black;">Order History</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="online_chat.php" style="color: black;">Online chat</a>       
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="e_wallet.php" style="color: black;">eWallet</a>
								<div class="dropdown-divider"></div>
								<a href="uploadMerge.php" class="dropdown-item" href="uploadMerge.php" style="color: black;">Upload Prescription</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="show_up_pres.php" style="color: black;">Uplaoded prescriptions</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="reward.php" style="color: black;">Reward</a>
                <div class="dropdown-divider"></div>
								<a class="dropdown-item" href="refund.php" style="color: black;">Refund</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php" style="color: black;">Logout</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active" style="margin-right: 10px;">
							<a href="home.php" class="nav-link" style="color: black;">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown" style="margin-right: 10px;">
							<a class="nav-link dropdown-toggle" href="#" style="color: black;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Products
							</a>
							<div class="dropdown-menu" style="width: 200px; background-color: lightblue;" aria-labelledby="navbarDropdown">
								<a href="medicine.php" class="dropdown-item" style="color: black;">Medicines</a>
								<div class="dropdown-divider"></div>
								<a href="healthcare_cart.php" class="dropdown-item" style="color: black;">Health Care</a>
								<div class="dropdown-divider"></div>
								<a href="babycare.php" class="dropdown-item" style="color: black;">Baby Care</a>
							</div>
						</li>
						<li class="nav-item dropdown" style="margin-right: 10px;">
							<a class="nav-link dropdown-toggle" href="#" style="color: black;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Posts
							</a>
							<div class="dropdown-menu" style="width: 200px; background-color: lightblue;" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="healthcare_posts.php" style="color: black;">Health Care</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="blog.php" style="color: black;">Blogs</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="offer.php" style="color: black;">Offers</a>
							</div>
						</li>
						<li class="nav-item" style="margin-right: 15px;">
							<a class="nav-link" href="logout.php" style="color: black;">Log Out</a>
						</li>
            <li class="nav-item dropdown" style="margin-right: 10px;">
              <a type="button" class="nav-link" id="view-cart" style='color: blue;' data-toggle="modal" data-target="#cart-modal"><i id='view_cart' style='color: green; font-size: 2rem;' class="fas fa-shopping-cart"></i></a>
            </li>
					</ul>
				</div>
			</nav>
		</div>
    <!-- navbar ends -->

		<!-- Breadcrumb Code Begins Here-->
		<div class='container-fluid dbox2'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb'>
					<li class='breadcrumb-item active' aria-current='page'>Home</li>
				</ol>
			</nav>
		</div>
		<!-- Breadcrumb Code Ends Here-->
		
		<!-- Search Box Code Begins Here -->
		<div action='index.php' class='container-fluid'>
			<form method='GET'>
				<div class='form-group offset-md-1'>
					<div class='row'>
						<div class='col-2'><h4>Search</h4></div>
						<div class='col-7'>
							<input type='text' class='form-control' id='name' name='name' placeholder='Enter Product Name To Search'>
						</div>
						<div class='col-3 col-sm-2'>
							<input type='submit' id='search' name='search' class='btn btn-primary' value='Search'>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- Search Box Code Ends Here -->
		<br>
		<div class="container" style='display: none'>
		</div>
		<?php
        $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

        if(!$dbconnect){
            die('Could not connect' . mysql_error());
        }
        //$val_from_prev_page = $_GET['id'];

        // If the search button is clicked
        if(isset($_GET['search']) || isset($_GET['addToCart']))
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
						echo	"<div class='container' style='margin-bottom: 20px;'>
										<h3 style='color: white; background-color: black; text-align: center; height: 3rem;'> $length Result(s) Found for '$searched' </h3>";
						if($length > 0){
							echo		"<div class='card-columns' style='background-color: grey;padding: 5px; border: 2px solid black; margin-bottom: 2.5rem;'>";
							while($row = mysqli_fetch_array($result)){
								echo "<div class='card' style='min-height: 20rem; width: 20rem; margin-top: 3rem; margin-right: 1rem; margin-left: .7rem; margin-bottom: 1rem;'>
									<div class='card-body text-center' >
											<img class='card-img-top' style='min-height: 15rem; width: 16rem; padding: 5px;' src='$row[image_dir]' alt='Card image'>
											<h4 class='card-title'>$row[pro_name]</h4>
											<h6 class='card-text'>Brand: $row[brand]</h6>
											<h6 class='card-text'>Category: $row[pro_cat]</h6>
											<h6 class='card-text'>PPU: $row[price_per_unit]/-</h6>
											<input formaction='new.php' class='btn btn-primary btn-block' type='hidden' id='proId' value='$row[pro_id]'>
											<input type='submit' onclick='addToCart()' class='btn btn-primary btn-block' id='addToCart' name='addToCart' value='Add To Cart'>
									</div> <!-- card-body -->
								</div>";
							}
							echo  "</div>"; // card-columns
						}
						echo "</div>"; // container
					}
					echo "<hr><hr>";
				}
				
		?>
		<script type="text/javascript">
			function addToCart(){
				var z = document.getElementById('addToCart');
				z.value = 'Added';
				z.style = 'background-color: lime; color: black;';
				var y = document.getElementById('proId');
			}
		</script>
		
		<h1 style="margin-bottom: 5px; margin-left: 40%;">TOP OFFERS</h1>
		<!-- Image slider for Top Offers code starts here -->
		<div class='container'>
			<div class='col-sm-12 cbox'>
				<div id='medicineSlideShow' class='carousel slide carousel-fade'  style='float: none; margin: 0 auto;' data-ride='carousel'>
					<!--<ol class='carousel-indicators'>
						<li class='active' data-target='#medicineSlideShow' data-slide-to='0'></li>
						<li class='' data-target='#medicineSlideShow' data-slide-to='1'></li>
						<li class='' data-target='#medicineSlideShow' data-slide-to='2'></li>
					</ol>-->
					<div class='carousel-inner'>
						<div class='carousel-item active'>
							<a href="#"><img class='img-fluid' src='images/Offers/offer1.jpg' style='width: 30vw; height: 30vh; margin-left: 27%; margin-top: 3%;'></a>
						</div><!-- carousel-item -->
						<div class='carousel-item'>
							<a href="#"><img class='img-fluid' src='images/Offers/offer2.jpg' style='width: 30vw; height: 30vh; margin-left: 27%; margin-top: 3%;'></a>
						</div><!-- carousel-item -->
					</div><!-- carousel-inner  -->
					<a href='#medicineSlideShow' class='carousel-control-prev' role='button' data-slide='prev'>
						<span class='carousel-control-prev-icon'></span>
						<span class='sr-only'>Previous</span>
					</a>
					<a href='#medicineSlideShow' class='carousel-control-next' role='button' data-slide='next'>
						<span class='carousel-control-next-icon'></span>
						<span class='sr-only'>Next</span>
					</a>
				</div><!-- carousel slide -->
				<a href='#' id='aText' style='text-decoration: none;'>See All Offers</a>
			</div><!-- col-sm -->
		</div><!-- container-fluid -->
		<!-- Image slider for Top Offers code ends here -->
		
		<br><br><hr><hr>
        <?php
      $sql1 = "SELECT * FROM post WHERE post_cat = 'blogs' ORDER BY published_date DESC";
      $sql2 = "SELECT * FROM post WHERE post_cat = 'healthcare' ORDER BY published_date DESC";
      $sql3 = "SELECT * FROM post WHERE post_cat = 'offer' ORDER BY published_date DESC";

      $row1 = mysqli_fetch_array(mysqli_query($dbconnect, $sql1));
      $row2 = mysqli_fetch_array(mysqli_query($dbconnect, $sql2));
      $row3 = mysqli_fetch_array(mysqli_query($dbconnect, $sql3));
    ?>
		<h1 style="margin-bottom: 5px; margin-left: 43%;">TOP POSTS</h1>
		<!-- Top Posts part begins here -->
		<div class='container'>
			<div class='col-sm-12 cbox2'>
				<!-- Post-tabs-->
				<nav class='bg-light text-light'>
					<div class='nav nav-tabs' id='nav-tab' role='tablist'>
						<a class='nav-item nav-link active' href='#medicines' data-toggle='tab' role='tab'>Blogs</a>
						<a class='nav-item nav-link' href='#healthCare' data-toggle='tab' role='tab'>Health Care</a>
						<a class='nav-item nav-link' href='#babyCare' data-toggle='tab' role='tab'>Offers</a>
					</div>
				</nav>

				<div class='tab-content' id='nav-tabContent'>
					<div class='tab-pane fade show active' id='medicines' role='tabpanel'>
						<!-- Medicines -->
						<div class="row" style='margin-top: 30px; margin-left: 20px;'>
              <div class="col-sm-4">
                <a href="blog.php"><img src="<?php echo $row1['image_dir']; ?>" alt="Post Image"></a>
              </div>
              <div class="col-sm-6">
                <h1><?php echo $row1['topic_name']; ?></h1>
                  <p>
                    <?php echo substr($row1['details'], 0, 250); ?>....<a href='blog.php'>Read More</a>
                  </p>
              </div>
            </div>
					</div><!-- tab-pane -->
					<div class='tab-pane fade' id='healthCare' role='tabpanel'>
						<div class="row" style='margin-top: 30px; margin-left: 20px;'>
              <div class="col-sm-4">
                <a href="blog.php"><img src="<?php echo $row2['image_dir']; ?>" alt="Post Image"></a>
              </div>
              <div class="col-sm-6">
                <h1><?php echo $row2['topic_name']; ?></h1>
                  <p>
                    <?php echo substr($row2['details'], 0, 250); ?>....<a href='blog.php'>Read More</a>
                  </p>
              </div>
            </div>
					</div><!-- tab-pane -->
					<div class='tab-pane fade' id='babyCare' role='tabpanel'>
						<!-- Baby Care -->
						<div class="row" style='margin-top: 30px; margin-left: 20px;'>
              <div class="col-sm-4">
                <a href="blog.php"><img src="<?php echo $row3['image_dir']; ?>" alt="Post Image"></a>
              </div>
              <div class="col-sm-6">
                <h1><?php echo $row3['topic_name']; ?></h1>
                  <p>
                    <?php echo substr($row3['details'], 0, 250); ?>....<a href='blog.php'>Read More</a>
                  </p>
              </div>
            </div>
					</div><!-- tab-pane -->
				</div><!-- tab-content -->
			</div>
		</div>
		<!-- Top Posts part ends here -->
    <br><br><hr><hr>


		<h1 style="margin-bottom: 5px; margin-left: 40%;">TOP PRODUCTS</h1>
		<!-- Image slider for Top Medicines & Post Tabs code starts here -->
		<div class='container'>
			<div class='col-sm-12 cbox'>
				<div id='medicineSlideShow' class='carousel slide carousel-fade'  style='float: none; margin: 0 auto;' data-ride='carousel'>
					<div class='carousel-inner'>
						<div class='carousel-item active'>
							<img class='img-fluid' src='images/Products/dettolHandSanitizer.jpg' style='width: 40vw; height: 40vh; margin-left: 22%; margin-top: 3%;'>
						</div><!-- carousel-item -->
						<div class='carousel-item'>
							<img class='img-fluid' src='images/Products/image10.jpg' style='width: 40vw; height: 40vh; margin-left: 22%; margin-top: 3%;'>
						</div><!-- carousel-item -->
						<div class='carousel-item'>
							<img class='img-fluid' src='images/Products/image12.jpg' style='width: 40vw; height: 40vh; margin-left: 22%; margin-top: 3%;'>
						</div><!-- carousel-item -->
					</div><!-- carousel-inner  -->
					<a href='#medicineSlideShow' class='carousel-control-prev' role='button' data-slide='prev'>
						<span class='carousel-control-prev-icon'></span>
						<span class='sr-only'>Previous</span>
					</a>
					<a href='#medicineSlideShow' class='carousel-control-next' role='button' data-slide='next'>
						<span class='carousel-control-next-icon'></span>
						<span class='sr-only'>Next</span>
					</a>
				</div><!-- carousel slide -->
				<a href='allProducts.php' id='aText' style='text-decoration: none;'>See All Products</a>
			</div><!-- col-sm -->
		</div><!-- container-fluid -->
		<!-- Image slider for Top Medicines & Post Tabs code ends here -->
		
    <br><br>

		<!-- Footer Code Starts Here -->
		<footer class='footer bg-dark text-light'>
        <div class='container'>
            <div class='row'>             
                <div class='col-5 offset-1 col-sm-5'>
                    <h5>Links</h5>
                    <ul class='list-unstyled'>
                        <li><a href='index.php'>Home</a></li>
										</ul>
										<i class='fa fa-phone fa-lg'></i> : +880 1111143457<br>
                </div>
                <div class='col-6 col-sm-6'>
                    <h5 style='margin-left: 30%;'>About Us</h5>
                    <address>
												This website is basically made for the Project of our <br>
												System Analysis and Design Laboratory course. <br>
												It's an online platform where people can buy medicines, <br>
												Healthcare and Babycare products and more.<br>
										</address>
                </div>
           </div>
           <div class='row justify-content-center'>             
                <div class='col-auto'>
                    <p>© Copyright 2020 Online Pharmacy</p>
                </div>
           </div>
        </div>
    </footer>
		<!-- Footer Code Ends Here -->
		
		<script src='Node_modules/jquery/dist/jquery.slim.min.js'></script>
		<script src='Node_modules/popper.js/dist/umd/popper.min.js'></script>
		<script src='Node_modules/js/bootstrap.min.js'></script>

    <!---->
    <?php
  ///database connection, mysqli(procedure, object), PDO(object)
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  try {
    ///try to build up the connection
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=online_pharmacy", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $mysqlquery = "SELECT * FROM product";

    $ret = $conn->query($mysqlquery); ///$ret object
    ///$ret->rowCount() 
    $table = $ret->fetchAll(); ///extracting the table 

    $cartQuery = "SELECT * FROM cart";
    $cartQueryReturn = $conn->query($cartQuery);
    $cartItems = $cartQueryReturn->fetchAll();
    //$cartItems = array_unique($cartItems);

    if (count($cartItems) > 0) {
      ?>
      <!-- Modal Starts -->
      <div class="modal" id="cart-modal" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Cart</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">

                      <?php
                        for ($j = 0; $j < count($cartItems); $j++) {
                            for ($k = 0; $k < count($table); $k++) {
                                if ($cartItems[$j]['product_id'] == $table[$k]['pro_id']) {
                                    $product = $table[$k];
                                    break;
                                }
                            }
                      ?>
                          <!-- Product Starts -->
                          <div class="row" id=<?php echo "product-" . $product['pro_id'] ?>>
                              <div class="col-3">
                                  <img class="img-responsive" src=<?php echo $product['image_dir'] ?> alt="preview" width="120" height="120">
                              </div>
                              <div class="col-7 my-auto">
                                  <h6 class="product-name"><?php echo $product['pro_name'] ?></h6>
                                  <p class="mb-1"><?php echo $product['details'] ?></p>
                                  <h6><strong>Price: <span class="text-muted price">
                                              <span><?php echo $product['price_per_unit'] ?> </span>
                                          </span> BDT</strong></h6>
                              </div>
                              <div class="col-1 text-right my-auto">
                                  <button type="button" class="btn btn-outline-danger btn-xs remove-product" data-product_id=<?php echo $product['pro_id'] ?>>
                                      <i class="fa fa-trash" aria-hidden="true"></i>
                                  </button>
                              </div>
                          </div>
                          <hr>
                          <!-- Product Ends-->
                      <?php
                        }
                      ?>
                  </div>
                  <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-primary">Order Now</button> -->
                      <form action="saveorder_info.php">
                          <input type="submit" value="Order Now">
                      </form> 

                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
      </div>

                    <!-- Modal Ends -->

                <?php

      }
      else{
        echo "<script>
                var y = document.getElementById('view_cart');
                y.style.color = 'red';
              </script>";
      }
    } catch (PDOException $ex) {
        // echo 'Execute Failed: ' . $ex->getMessage();
?>
      <script>
          alert("Database Connection Error!!");
      </script>
      <?php

    }
    $conn = null;
      ?>

  </body>
    
</html>
