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
	</head>
	<body style="background-color: #03fc73;">
		<?php include 'navbar.php'; ?>
        <?php include 'cartView.php'; ?>
		
		<!-- Breadcrumb Code Begins Here-->
		<div class='container-fluid' style='margin-top: 1rem;'>
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb'>
					<li class='breadcrumb-item' aria-current='page'><a href='index.php' style='text-decoration: none;'> Home </a></li>
					<li class='breadcrumb-item active' aria-current='page'>Reward Points</li>
				</ol>
			</nav>
		</div>
		<!-- Breadcrumb Code Ends Here-->
		<div class="container">
			<div style="background-color: #b3d9ff;">
				<img src="images/reward.jpg" class="float-left" alt="reward" width="450" height="250"> 
			</div>
			<div class="jumbotron text-center">
				<h1 style="color:DarkOrange;">Reward points  !!!!</h1>
				<br>
				<h3 style="color:Blue;">Follow the rules and get your points    !!!!</h3>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h4 style="color:Crimson;">Condition of getting reward point:</h4>
						<h5>i) Purchasing through credit card will add reward points. </h5>
						<h5>ii) If purchase value exceed Tk 500 then add reward points.</h5>
						<h5>iii) When a customer purchase more than 3 times reward point will be added then for each time.</h5>
						<h5>iv) One reward points is equivalent to Tk. 0.30</h5>
					</div>
					<div class="col-sm-4">
						<h4 style="color: Navy;">How can you spend rewards point?</h4>
						<h5>i) Get cash back </h5>
						<h5>ii) Donate your credit cards rewards to charity.</h5>
						<h5>iii) Redeem Your Credit Card Reward Points to Shop Online</h5>
					</div>
					<div class="col-sm-4">
						<h4 style="color:OrangeRed;">Redeem points</h4> 
						<br>
						<form method="post" action="add_reward.php">
							<div class="form-group">
								<h4 style="color:Blue";>Give your coupon code here !!!!</h4>
								<input type="text" class="form-control" name="cupon" placeholder="Write your Coupon code here" required="required">
							</div>
							<div class="form-group">							
								<input type="submit" class="form-control" name="submit"  required="required" value="click to add reward" style="color: green">
							</div>
						</form>
						<br>
					</div>
				</div>
			</div>
		</div>
		<!---->
		<?php
			$servername = 'localhost';
			$username = 'root';
			$password = '';
			try {
				$conn = new PDO("mysql:host=$servername;port=3306;dbname=online_pharmacy", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$mysqlquery = "SELECT * FROM product";

				$ret = $conn->query($mysqlquery); ///$ret object
				$table = $ret->fetchAll(); ///extracting the table 

				$cartQuery = "SELECT * FROM carts";
				$cartQueryReturn = $conn->query($cartQuery);
				$cartItems = $cartQueryReturn->fetchAll();
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
			} 
			catch (PDOException $ex) {
				echo 	"<script>
							alert('Database Connection Error!!');
						</script>";
			}
		?>
	</body>
</html>
