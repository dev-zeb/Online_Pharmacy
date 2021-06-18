
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
      .card {
        box-shadow: 0 40px 100px 0 	rgb(153, 153, 153);
        max-width: 500px;
        height: 650px;
        margin: 5px auto;
        text-align: center;
        padding: 10px 10px 10px 10px; 
        background-color: #5D6D7E;
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

    <?php
      $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');
      if(!$dbconnect){
          die('Could not connect' . mysql_error());
      }
      $sql1 = "SELECT SUM(quatity_sold) as sum_product FROM product";
      $result = mysqli_query($dbconnect, $sql1);
      $sum_product = mysqli_fetch_assoc($result)['sum_product'];
      
      $sql2 = "SELECT SUM(quatity_sold) as sum_medicine FROM product WHERE pro_cat = 'medicine'";
      $result = mysqli_query($dbconnect, $sql2);
      $sum_medicine = mysqli_fetch_assoc($result)['sum_medicine'];

      $sql3 = "SELECT SUM(quatity_sold) as sum_healthcare FROM product WHERE pro_cat = 'healthcare'";
      $result = mysqli_query($dbconnect, $sql3);
      $sum_healthcare = mysqli_fetch_assoc($result)['sum_healthcare'];

      $sql4 = "SELECT SUM(quatity_sold) as sum_babycare FROM product WHERE pro_cat = 'babycare'";
      $result = mysqli_query($dbconnect, $sql4);
      $sum_babycare = mysqli_fetch_assoc($result)['sum_babycare'];

      $medicine_bar = number_format((float)($sum_medicine/$sum_product*100), 2, '.', '');
      $healthcare_bar = number_format((float)($sum_healthcare/$sum_product*100), 2, '.', '');
      $babycare_bar = number_format((float)($sum_babycare/$sum_product*100), 2, '.', '');

    ?>
    <div class='main'>
      <!-- The Header/Nav part -->
      <div class='container-fluid' id='header'>
        <div class='left'>
          <a href='adminDashboard.php' id='aText'><i class='fas fa-newspaper' id='iLogo'></i>Dashboard</a>
        </div>
        <div class='right'>
          <div class="dropdown">
            <button class='dropbtn'>Profile</button>
            <div class='dropdown-content'>
              <a href='adminProfile.php'>Edit Profile</a>
              <a href='logout.php'>Logout</a>
            </div>
          </div>
        </div>
      </div>
    <?php
    echo  "<div class='card'>
            <h1 style='text-align: center; margin-top: 5px; margin-bottom: 25px; background-color: lightblue; width: 100%;'>SELLS</h1>
            <h2 style='text-align: left; padding-left: 15px; margin-top: 10px; background-color: lightblue; height: 3rem;'> <i style='color: navy;' class='fas fa-dollar-sign'></i>Total SELLS  : $sum_product units</h2>

            <h2 style='text-align: left; padding-left: 15px; margin-top: 25px; background-color: lightblue;'> <i style='color: red;' class='fas fa-medkit'></i> Medicines   :   $sum_medicine units</h2>
            <h4 style='background-color: lightblue; height: 2rem; width: 100%; margin-bottom: 25px;color: red'> $medicine_bar% of Total Revenues </h4>
            <h2 style='text-align: left; padding-left: 15px; margin-top: 25px; background-color: lightblue;'> <i style='color: green;' class='fas fa-dumbbell'></i> Healthcare  :   $sum_healthcare units</h2>
            <h4 style='background-color: lightblue; height: 2rem; width: 100%; margin-bottom: 25px;color: green;'> $healthcare_bar% of Total Revenues </h4>
            <h2 style='text-align: left; padding-left: 15px; margin-top: 25px; background-color: lightblue;'> <i style='color: #115BFE;' class='fas fa-baby-carriage'></i> Babycare    :   $sum_babycare units</h2>
            <h4 style='background-color: lightblue; height: 2rem; width: 100%; color: #115BFE'> $babycare_bar% of Total Revenues </h4>
            <a href='adminDashboard.php' class='btn btn-success rounded-pill' style='margin-top: 25px;'>Okay</a>
          </div>";
    ?>  
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