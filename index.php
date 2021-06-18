<!DOCTYPE html>
<html lang='en'>
  	<head>
		<title>Home Page</title>
		<style>
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
			.carousel-control-next-icon:after{
				content:'>';
				font-size: 55px;
				color: black;
			}
			.carousel-control-prev-icon:after {
				content:'<';
				font-size: 55px;
				color: black;
			}
			.col-sm {
				margin-right: 1rem;
				padding: 1rem;
			}
		</style>
	</head>
    
  	<body>
  		<?php include "navbar.php" ?>
  		<?php include "searchBoxIndex.php" ?>
  		<?php include "cartView.php" ?>
		<!-- Breadcrumb Code Begins Here-->
		<div class='container-fluid' style="margin-top: 1rem;">
			<nav aria-label='breadcrumb'>
				<ol class='breadcrumb'>
					<li class='breadcrumb-item active' aria-current='page'>Home</li>
				</ol>
			</nav>
		</div>
		<!-- Breadcrumb Code Ends Here-->		

		<p style="margin-bottom: 0.5rem; font-size: 2rem; text-align: center;">TOP OFFERS</p>
		<!-- Image slider for Top Offers code starts here -->
		<div class='container'>
			<div class='col-sm-12' style="border: 1px solid black; padding: 1rem;">
				<div id='medicineSlideShow' class='carousel slide carousel-fade'  style='float: none; margin: 0 auto;' data-ride='carousel'>
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
				<p style="margin-top: 1rem; text-align: center;">
          <a href='offers.php'> See All Offers </a>
        </p>
			</div><!-- col-sm -->
		</div><!-- container-fluid -->
		<!-- Image slider for Top Offers code ends here -->
		<br>
		<hr>
		<hr>
		<p style="margin-bottom: 0.5rem; font-size: 2rem; text-align: center;">TOP PRODUCTS</p>
		<!-- Image slider for Top Products code starts here -->
		<div class='container'>
			<div class='col-sm-12' style="border: 1px solid black; padding: 1rem;">
				<div id='productSlideShow' class='carousel slide carousel-fade'  style='float: none; margin: 0 auto;' data-ride='carousel'>
					<div class='carousel-inner'>
						<div class='carousel-item active'>
							<a href="#"><img class='img-fluid' src='images/Products/dettolHandSanitizer.jpg' style='width: 30vw; height: 30vh; margin-left: 27%; margin-top: 3%;'></a>
						</div><!-- END carousel-item -->
						<div class='carousel-item'>
							<a href="#"><img class='img-fluid' src='images/Products/image10.jpg' style='width: 30vw; height: 30vh; margin-left: 27%; margin-top: 3%;'></a>
						</div><!-- END carousel-item -->
            			<div class='carousel-item'>
							<a href="#"><img class='img-fluid' src='images/Products/image12.jpg' style='width: 30vw; height: 30vh; margin-left: 27%; margin-top: 3%;'></a>
						</div><!-- END carousel-item -->
					</div><!-- END carousel-inner -->
					<a href='#productSlideShow' class='carousel-control-prev' role='button' data-slide='prev'>
						<span class='carousel-control-prev-icon'></span>
						<span class='sr-only'>Previous</span>
					</a>
					<a href='#productSlideShow' class='carousel-control-next' role='button' data-slide='next'>
						<span class='carousel-control-next-icon'></span>
						<span class='sr-only'>Next</span>
					</a>
				</div><!-- carousel slide -->
				<p style="margin-top: 1rem; text-align: center;">
          			<a href='offers.php'> See All Offers </a>
        		</p>
			</div><!-- col-sm -->
		</div><!-- container -->
		<!-- Image slider for Top Medicines & Post Tabs code ends here -->
		<br>
		<hr>
		<hr>
		<?php
			$sql1 = "SELECT * FROM post WHERE post_cat = 'blogs' ORDER BY published_date DESC";
			$sql2 = "SELECT * FROM post WHERE post_cat = 'healthcare' ORDER BY published_date DESC";
			$sql3 = "SELECT * FROM post WHERE post_cat = 'offer' ORDER BY published_date DESC";

			$row1 = mysqli_fetch_array(mysqli_query($dbconnect, $sql1));
			$row2 = mysqli_fetch_array(mysqli_query($dbconnect, $sql2));
			$row3 = mysqli_fetch_array(mysqli_query($dbconnect, $sql3));
		?>

		<!-- Top Posts part begins here -->
		<p style="margin-bottom: 0.5rem; font-size: 2rem; text-align: center;">TOP POSTS</p>
		<div class='container' style="border: 1px solid black; padding: 1rem;">
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
					<div class="row" style='margin-top: 0.5rem;'>
						<div class="col-sm-4">
							<a href="blog.php"><img style="max-width: 100%;" src="<?php echo $row1['image_dir']; ?>" alt="Post Image"></a>
						</div>
						<div class="col-sm-6">
							<p style="margin-bottom: 0.5rem; font-size: 2rem; text-align: left;">
								<?php echo $row1['topic_name']; ?>
							</p>
							<p>  
								<?php echo substr($row1['details'], 0, 250); ?>....<a href='blog.php'>Read More</a>
							</p>
						</div>
					</div>
				</div><!-- tab-pane -->
				<div class='tab-pane fade' id='healthCare' role='tabpanel'>
					<div class="row" style='margin-top: 0.5rem;'>
						<div class="col-sm-4">
							<a href="blog.php"><img style="max-width: 100%;" src="<?php echo $row2['image_dir']; ?>" alt="Post Image"></a>
						</div>
						<div class="col-sm-6">
							<p style="margin-bottom: 0.5rem; font-size: 2rem; text-align: left;">
								<?php echo $row2['topic_name']; ?>
							</p>
							<p>  
								<?php echo substr($row2['details'], 0, 250); ?>....<a href='blog.php'>Read More</a>
							</p>
						</div>
					</div>
				</div><!-- tab-pane -->
				<div class='tab-pane fade' id='babyCare' role='tabpanel'>
					<!-- Baby Care -->
					<div class="row" style='margin-top: 0.5rem;'>
						<div class="col-sm-4">
							<a href="blog.php"><img style="max-width: 100%;" src="<?php echo $row3['image_dir']; ?>" alt="Post Image"></a>
						</div>
						<div class="col-sm-6">
							<p style="margin-bottom: 0.5rem; font-size: 2rem; text-align: left;">
								<?php echo $row3['topic_name']; ?>
							</p>
							<p>  
								<?php echo substr($row3['details'], 0, 250); ?>....<a href='blog.php'>Read More</a>
							</p>
						</div>
					</div>
				</div><!-- tab-pane -->
			</div><!-- tab-content -->
		</div>
		<!-- Top Posts part ends here -->
		<br>
		<hr>
		<hr>
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
