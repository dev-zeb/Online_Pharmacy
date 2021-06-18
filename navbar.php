<?php
	session_start();
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
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
    </head>
    <body>
        <!-- Navbar Code Begins Here-->
        <div class="container" style="margin-top: 3rem; padding: 1rem;">
            <nav class="navbar navbar-expand-md fixed-top" style="background-color: lightblue;">
                <button class="navbar-toggler navbar-light" style="border-color: black; border-width: 2px; opacity: 100%;" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="index.php"><img src="images/logo1.png" style='max-width: 100%; height: 5vh; margin-left: 0.5rem;'></a>
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
                            <a href="index.php" class="nav-link" style="color: black;">Home <span class="sr-only">(current)</span></a>
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
                                <div class="dropdown-divider"></div>
                                <a href="products.php" class="dropdown-item" style="color: black;">All Products</a>
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
                                <a class="dropdown-item" href="offers.php" style="color: black;">Offers</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="posts.php" style="color: black;">All Posts</a>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-right: 15px;">
                            <a class="nav-link" href="logout.php" style="color: black;">Log Out</a>
                        </li>
                        <li>
                            <a type="button" class="nav-link" id="view-cart" style='color: blue;' data-toggle="modal" data-target="#cart-modal"><i id='view_cart' style='color: green; font-size: 2rem;' class="fas fa-shopping-cart"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- navbar ends -->
		<script src='Node_modules/jquery/dist/jquery.slim.min.js'></script>
		<script src='Node_modules/popper.js/dist/umd/popper.min.js'></script>
		<script src='Node_modules/js/bootstrap.min.js'></script>
    </body>
</html>