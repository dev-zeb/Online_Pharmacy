
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

    <title>Blogs Page</title>
	</head>
	<body>
    	<?php
			include 'navbar.php';
			include 'searchBox.php';
			include 'cartView.php';
			try{
				$dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

				if(!$dbconnect){
					die('Could not connect' . mysql_error());
				}
				$sql = 'SELECT * FROM post WHERE post_cat = "offers" or post_cat = "offer"';
				$result = mysqli_query($dbconnect, $sql);
				$i = 0;
				echo "<div class='container'>
						<div class='card-columns' style='border: 1px solid black; margin-bottom: 2.5rem;'>";
				while($row = mysqli_fetch_array($result)){
					$newString = substr($row['details'], 0, 200);
					echo 	"<div class='card' style='max-width: 100%;'>
								<div class='card-body text-center'>
									<img class='card-img-top' src='$row[image_dir]' style='max-width: 100%; height: 30vh;' alt='image here'>
									<h2> $row[topic_name] </h2>
									<h4> Author: $row[author_name]</h4>
									<p> $newString.... </p>
									<form action='blogFull.php' method='GET'>
										<input type='hidden' value='$row[post_id]' name='post_id'/>
										<input type='submit' class='btn btn-primary btn-block' value='Read More'/>
									</form>
								</div>
							</div>";
				}
				echo	"</div>
					</div>";
				$conn = null;
			}
			catch (Exception $e){
				echo	"<script>
							window.alert('Database Connection Error!!');
						</script>";
			}
		?>
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