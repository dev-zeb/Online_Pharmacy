
<?php
  session_start();
  if(!isset($_SESSION['admin_user_name'])){
    echo  "<script>location.href='adminLogin.php'</script>";
  }
?>
<!DOCTYPE html>

<html>
  <head>
    <!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<!-- The following meta tag makes the page responsive-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
    
		<link rel="stylesheet" href="Node_modules/css/bootstrap.min.css">
		<link rel="stylesheet" href="fontawesome-web/css/all.css">

    <title>Home Page</title>
    <style>            
      /* The sidebar menu */
      .sidenav {
        height: 100%; /* Full-height: remove this if you want "auto" height */
        width: 170px; /* Set the width of the sidebar */
        position: fixed; /* Fixed Sidebar (stay in place on scroll) */
        z-index: 1; /* Stay on top */
        top: 0; /* Stay at the top */
        left: 0;
        background-color: #022A33; /* Black */
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 20px;
      }

      /* The navigation menu links */
      #list{
        width: 170px;
        height: 60px;
        border: none;
        padding: 6px 8px 6px 16px;
        font-size: 15px;
        background-color: #022A33;
        color: white;
        display: block;
		    transition: font-size .5s;
      }
      #list:hover {
        width: 170px;
        height: 60px;
        border: none;
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        background-color: #627868;
        display: block;
      }
      
      #p1{
        padding: 6px 8px 6px 47px;
        font-size: 25px;
        color: white;
        display: block;
        border-top: 1px solid white;
        border-bottom: 1px solid white;
      }
      /* When you mouse over the navigation links, change their color */
      sidenav a:hover {
        color: #f1f1f1;
      }

      /* Style page content */
      .main{
        margin-left: 160px; /* Same as the width of the sidebar */
        padding: 0px;
      }

      /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
      i{
        margin-right: 10px;
      }
      #i1 {
        color: #FFF300;
        text-shadow: 2px 2px 2px black;
        font-size: 4rem;
        padding: 25px 0px 15px 20px;
      }
      #i2 {
        color: #FC6B00;
        text-shadow: 2px 2px 2px black;
        font-size: 4rem;
        padding: 25px 0px 5px 20px;
      }
      #i3 {
        color: #FF009E;
        text-shadow: 2px 2px 2px black;
        font-size: 4rem;
        padding: 25px 0px 5px 20px;
      }
      #iLogo{
        color: lightblue;
        text-shadow: 2px 2px 2px navy;
        margin-left: 10px;
        font-size: 2.5rem;
      }
      #header {
        display: inline-block; 
        width: 100%;
        padding: 0px 5px 0px 25px;
        background-color: #848C9F;
      }
      .left {
        float: left;
        display: inline-block;
        width: 20rem;
        padding: 0px 5px 0px 5px;
      }
      .right {
        float: right;
      }
      #aText{
        font-size: 35px;
        margin-top: 0px;
        padding: 0px 5px 0px 5px;
        text-decoration: none;
        color: lightblue;
        text-shadow: 2px 2px 2px navy;
      }
      /**----------------------------------- */
      
      /* Dropdown Button */
      .dropbtn {
        background-color: #022A33;
        color: white;
        padding: 16px;
        font-size: 16px;
        margin-right: -15px;
        border: none;
        width: 15rem;
      }

      /* The container <div> - needed to position the dropdown content */
      .dropdown {
        position: relative;
        display: inline-block;
      }

      /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 15rem;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      /* Links inside the dropdown */
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      /* Change color of dropdown links on hover */
      .dropdown-content a:hover {background-color: #ddd;}

      /* Show the dropdown menu on hover */
      .dropdown:hover .dropdown-content {display: block;}

      /* Change the background color of the dropdown button when the dropdown content is shown */
      .dropdown:hover .dropbtn {background-color: #3e8e41;}

      hr { 
        display: block;
        border-top: 2px solid black;
      }
    </style>
  </head>

  <body style='background-color: #F0EEEE;'>
    <div class="sidenav">
      <h1 href='adminDashboard.php' id="p1" style='text-decoration: none;'> MENU </h1>
      <p style="text-align: center; margin-top: 15px; color: white;">Admin</p>
      <a href="viewProducts.php" type="submit" id="list"> <i style='color: #00FFEA;' class="fas fa-store"></i>Prouducts</a>
      <a href="viewModerators.php" type="submit" id="list"> <i style='color: #F8FF00;' class="fas fa-id-card"></i>Moderators</a>
      <a href="viewUsers.php" id="list"> <i style='color: #28FF00;' class="fas fa-users"></i>Customers</a>
      
      <a id='list' type="submit" onclick='openDiv()'><i style="color: #3D86EC;" class="fas fa-chart-line"></i>Statistics </a>
      <div id="leh" style='display: none;'>
        <a style='padding-left: 50px; background-color: #AED6F1; border: 1px solid white; color: #022A33; margin-top: 1px;' href='viewRevenues.php' type="submit" id="list"> <i style='color: navy;' class="fas fa-dollar-sign"></i>Revenues</a>
        <a style='padding-left: 50px; background-color: #AED6F1; border: 1px solid white; color: #022A33; margin-top: 1px;' href='viewOrders.php' type="submit" id="list"> <i style='color: navy;' class="fas fa-truck-moving"></i>Orders</a>
        <a style='padding-left: 50px; background-color: #AED6F1; border: 1px solid white; color: #022A33; margin-top: 1px;' href='viewSells.php' type="submit" id="list"> <i style='color: navy;' class="fab fa-sellsy"></i>Sells</a> 
      </div>
      
      <a href="addProduct.php" id='list'><i style='color: #0FC0A6;' class="far fa-plus-square"></i>Add Product</a>
      <p style='border-top: 2px solid white; border-bottom: 2px solid white; height: 10px;'></p>
      <a href='logout.php' type="submit" id="list"> <i style='color: #FF0101;' class="fas fa-sign-out-alt"></i>Logout</a>
      <!--<a href="regNewUser.php" id='list'><i style='color: #FF870B;' class="far fa-user-circle"></i>Register User</a>-->
    </div>

    <div class="main">
      <!-- The Header/Nav part -->
      <div class="container-fluid" id='header'>
        <div class='left'>
          <a href="adminDashboard.php" id='aText'><i class="fas fa-newspaper" id='iLogo'></i>Dashboard</a>
        </div>
        <div class='right'>
          <div class="dropdown">
            <button class="dropbtn">Profile</button>
            <div class="dropdown-content">
              <a href="adminProfile.php">Edit Profile</a>
              <a href="logout.php">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <div class="container" style='margin-top: 10px; padding: 10px;'>
        <br>
				<h2>Moderators Table</h2>
				<p>You can view or edit moderators details by clicking View Details button</p>
				<div class="table-responsive">          
					<table class="table table-bordered table-striped">
						<thead>
							<tr style='background-color: #34495E; color: white;'>
								<th><p style="text-align: center;">User Name</p></th>
								<th><p style="text-align: center;"> User Email</p></th>
								<th><p style="text-align: center;"> Joined On</p></th>
								<th><p style="text-align: center;">Action</p> </th>
							</tr>
						</thead>
						<tbody>
							<?php
								$dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

                if(!$dbconnect){
                    die('Could not connect' . mysql_error());
                }
                $sql = "SELECT * FROM user_table WHERE user_cat = 'moderator'";
                $result = mysqli_query($dbconnect, $sql);
                
                while($row = mysqli_fetch_array($result)){
                  $name = $row['Name'];
                  $email = $row['email'];
                  $join_date = $row['date_joined'];
                  $img_path = $row['image_dir'];
              ?>
									<tr id='row_'>
										<form action="viewProfile.php" method='POST'>
											<input type='hidden' name='id' value='<?php echo $email?>'> <!-- this input box will store the id of the customers-->
											<td style="text-align: center;"><img src='<?php echo $img_path;?>' style="height: 40px; margin-top: 1rem; paddding: auto;" alt=""><p> <?php echo $name; ?> </p></td>
											<td style="text-align: center;"><h6 style="margin-top: 2rem;"><?php echo $email; ?></h6></td>
											<td style="text-align: center;"><h6 style="margin-top: 2rem;"> <?php echo $join_date; ?></h6></td>
											<td style="text-align: center;">
												<input formaction='viewProfile.php' type="submit" style="margin-top: 1.5rem;" class="btn btn-success btn-pill" value='View Details'>
											</td>
										</form>
									</tr>
									<?php
								}
									?>
						</tbody>
					</table>
				</div>
      </div>
	  </div>
	
    <script>
      function openDiv(){
        var x = document.getElementById('leh');
        if(x.style.display == 'none'){
          x.style.display = 'block';
        }
        else{
          x.style.display = 'none';
        }
      }
    </script>
	  <script src="js/dashboard.js"></script>
  </body>

  
</html>