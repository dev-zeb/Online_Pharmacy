<!doctype html>
<html lang='en'>
  <head>
    <?php
      include "navbar.php";
      include "searchBox.php";
      include "cartView.php";
    ?>
    <title>Blogs Page</title>
  </head>
  <body>
  	<?php 
			$dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

			if(!$dbconnect){
					die('Could not connect' . mysql_error());
      }
      $id = $_GET['post_id'];
			$sql = "SELECT * FROM post WHERE post_id='$id'";
			$result = mysqli_query($dbconnect, $sql);
			$row = mysqli_fetch_array($result);
			echo "<div class='container'>
              <div class='card'>
                <div class='card-header'>
                  <div class='row' style='margin-top: 1rem;'>
                    <div class='col-sm-6'>
                      <img src='$row[image_dir]' style='width: 100%; height: 50vh;' class='card-img-top' alt='image here'>
                    </div>
                    <div class='col-sm-6' style='padding: 3rem;'>
                      <p style='font-size: 1.5rem; text-align: left;'>
                        <b> Post Title </b> 
                        <br> $row[topic_name]
                      </p>
                      <p style='font-size: 1.5rem; text-align: left;'>
                        <b> Author </b>
                        <br> $row[author_name]
                      </p>
                      <p style='font-size: 1.5rem; text-align: left;'>
                        <b> Published On </b>
                        <br> $row[published_date]
                      </p>
                    </div>
                  </div>
                </div>
                
                <div class='card-body'>
                  <p> $row[details] </p>
                </div>
              </div>
					  </div>";

		?>
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