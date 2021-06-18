<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body id="body">
   		<div class="col-sm">
			<nav class="navbar navbar-expand-md fixed-top" style="background-color: #0CEE2A;">
				<button class="navbar-toggler navbar-light" style="border-color: black; border-width: 2px; opacity: 100%;" data-toggle="collapse" data-target="#navbarMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand mr-auto" href="./index.html"><img src="img/design_03.png" height="30" width="41"></a>
				<div class="collapse navbar-collapse" id="navbarMenu">
					<ul class="navbar-nav mr-auto"> 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" style="color: black; margin-left: 10px;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								MENU
							</a>
							<div class="dropdown-menu" style="width: 200px; background-color: lightblue;" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#" style="color: black;">My Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Order History</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Cart</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">eWallet</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Reward Points</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Logout</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active" style="margin-right: 10px;">
							<a class="nav-link" href="#" style="color: black;">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item" style="margin-right: 10px;">
							<a class="nav-link" href="#" style="color: black;">Link</a>
						</li>
						<li class="nav-item dropdown" style="margin-right: 10px;">
							<a class="nav-link dropdown-toggle" href="#" style="color: black;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Products
							</a>
							<div class="dropdown-menu" style="width: 200px; background-color: lightblue;" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#" style="color: black;">Medicines</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Health Care</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" style="color: black;">Baby Care</a>
							</div>
						</li>
						<li class="nav-item dropdown" style="margin-right: 10px;">
							<a class="nav-link dropdown-toggle" href="#" style="color: black;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Posts
							</a>
							<div class="dropdown-menu" style="width: 200px; background-color: lightblue;" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="contact.php" style="color: black;">News</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="blog.php" style="color: black;">Blogs</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="offers.php" style="color: black;">Offers</a>
							</div>
						</li>
						<li class="nav-item" style="margin-right: 15px;">
							<a class="nav-link" href="#" style="color: black;">Log Out</a>
						</li>
					</ul>
				</div>
				
				<form class="form-inline">
					<input class="form-control ml-auto" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" style="background-color: navy; color: white; margin-left: 10px;" type="submit">Search</button>
				</form>
			</nav>
			
		</div>
  <div class="container mt-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item size-img active">
      <img src="1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>60% off today</h5>
        <p>Today is the last day of offer ,if you want to purses please hurry up!</p>
      </div>
    </div>
    <div class="carousel-item size-img">
      <img src="2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>45% off today</h5>
        <p>Today is the last day of offer ,if you want to purses please hurry up!.</p>
      </div>
    </div>
    <div class="carousel-item size-img">
      <img src="3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>25% off today</h5>
        <p>Today is the last day of offer ,if you want to purses please hurry up!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          
</div>
 <?php
		require 'connection.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM messages WHERE ID='$id'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
       
		$Name = $row['name'];
		$Phone  = $row['Phone'];
        $Email = $row['Email'];
        $Message = $row['Message'];
       
     ?>
<div class="container">
<form method="post" action="blog.php">
  <div class="form-group">
    <label for="name">Author</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="option">Select category</label>
    <select class="form-control" name="option" id="option">
      <option>Madecines</option>
      <option>Health Care</option>
      <option>Baby Care</option>
    </select>
  </div>
    <label for="text">Post here</label>
    <textarea class="form-control" id="text" name="text" rows="3"></textarea>
  </div>
  <div>
  <button class="btn btn-primary ml-3 mt-3" type="submit" name="submit" value = "submit"> submit</button>

</div>
</form>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>