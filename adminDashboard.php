
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
      #newBtn{
        height: 60px;
        border: none;
        margin-left: 10px;
        margin-top: 0px;
        font-size: 15px;
        background-color: #022A33;
        color: white;
        display: block;
		    transition: font-size .5s;
      }
      #newBtn: hover{
        height: 60px;
        border: none;
        text-decoration: none;
        font-size: 20px;
        background-color: #627868;
        display: block;
      }
      #iNew{
        font-size: 15px;
        display: block;
      }
      #iNew:hover{
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
        background-color: #D1E7CF;
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
        color: #FF0000;
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
        color: #FF00F3;
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

      <?php
        $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

        if(!$dbconnect){
            die('Could not connect' . mysql_error());
        }
        $sql1 = "SELECT COUNT('Name') as cnt FROM user_table";
        $sql2 = "SELECT COUNT('pro_id') as cnt FROM product";
        $sql3 = "SELECT COUNT('post_id') as cnt FROM post";
        
        $result = mysqli_query($dbconnect, $sql1);
        $count_user = mysqli_fetch_assoc($result)['cnt'];

        $result = mysqli_query($dbconnect, $sql2);
        $count_product = mysqli_fetch_assoc($result)['cnt'];

        $result = mysqli_query($dbconnect, $sql3);
        $count_post = mysqli_fetch_assoc($result)['cnt'];
      ?>

      <!-- The Three small boxes -->
      <div class="container" style='margin-top: 20px; margin-bottom: 10px; padding: 10px;'>
        <div class="row">
          <div class="col-md-4" style='background-color: #FF9A9A; border: 1px solid black; margin-left: -40px; margin-right: 20px; padding: 0px;'>
            <h5 style='background-color: #1A67C5; color: white; text-align: center;'> Total Users</h5>
            <div class="row">
              <div class="col-sm-6">
                <i class="fas fa-user-check" id="i1"></i>
              </div>
              <div class="col-sm-4 offset-2 text-center">
                <h1 style='margin-top: 5%; color: #0A2268; font-size: 5rem; font-weight: bold;'><?php echo $count_user; ?> </h1>
              </div>
            </div>
            <h5 style='background-color: #0B33A3;  margin-bottom: 0px;'><a href='viewUsers.php' style='color: white; margin-left: 20px;'>View All...</a></h5>
          </div>
          
          <div class="col-md-4" style='background-color: #FFBE81; border: 1px solid black; margin-left: 20px; margin-right: 20px; padding: 0px;'>
            <h5 style='background-color: #1A67C5; color: white; text-align: center;'> Total Products</h5>
            <div class="row">
              <div class="col-sm-6">
                <i class="fas fa-shopping-cart" id="i2"></i>
              </div>
              <div class="col-sm-4 offset-2 text-center">
                <h1 style='margin-top: 5%; color: #0A2268; font-size: 5rem; font-weight: bold;'><?php echo $count_product; ?> </h1>
              </div>
            </div>
            <h5 style='background-color: #0B33A3;  margin-bottom: 0px;'><a href='viewProducts.php' style='color: white; margin-left: 20px;'>View All...</a></h5>
          </div>

          <div class="col-md-4" style='background-color: #FFB7FC; border: 1px solid black; margin-left: 20px; margin-right: -40px; padding: 0px;'>
            <h5 style='background-color: #1A67C5; color: white; text-align: center;'> Total Posts</h5>
            <div class="row">
              <div class="col-sm-6">
                <i class="fas fa-pen-nib" id="i3"></i>
              </div>
              <div class="col-sm-4 offset-2 text-center">
                <h1 style='margin-top: 5%; color: #0A2268; font-size: 5rem; font-weight: bold;'><?php echo $count_post; ?> </h1>
              </div>
            </div>
            <h5 style='background-color: #0B33A3;  margin-bottom: 0px;'><a href='viewPosts.php' style='color: white; margin-left: 20px;'>View All...</a></h5>
          </div>
        </div>
      </div>

      <hr>
      <hr>

      <div class="container" style='margin-top: 20px; margin-bottom: 20px;'>
        <div class="row">
          <!-- The Order Table -->
          <div class="col-md-8" style='margin-left: -45px; margin-right: 45px;'>
            <h4 style='background-color: #1A67C5; color: white; text-align: center; margin-bottom: 0px;'> Recent Orders</h4>
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped" style='margin-top: 0px; margin-bottom: 0px'>
                  <thead>
                    <tr style='color: black; background-color: #9492FE;'>
                      <th><p style="font-size: 20px; text-weight: bold; text-align: center;">Order Id</p></th>
                      <th><p style="font-size: 20px; text-weight: bold; text-align: center;">Ordered By</p></th>
                      <th><p style="font-size: 20px; text-weight: bold; text-align: center;">Order Placed</p></th>
                      <th><p style="font-size: 20px; text-weight: bold; text-align: center;">Order Status</p></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- php code for extracting 1st 3 orders from DB-->
                    <?php
                      $sql = "SELECT * FROM orders";
                      $result = mysqli_query($dbconnect, $sql);
                      
                      $i = 1;
                      $bc_color = '';
                      while($i <= 3){
                        if($i%2 == 0){$bc_color = '#8AA8FF';}
                        else{$bc_color = '#A2C6EC';}
                        $row = mysqli_fetch_array($result);
                        $order_id = $row['order_id'];
                        $ordered_by = $row['ordered_by_user_email'];
                        $order_date = $row['order_date'];
                        $order_status = ucfirst($row['order_status']);
                    ?>
                      <tr>
                      <td><p style="color: black; font-size: 20px; text-weight: bold; text-align: center;"><?php echo $order_id;?></p></td>
                      <td><p style="color: black; font-size: 20px; text-weight: bold; text-align: center;"><?php echo $ordered_by;?></p></td>
                      <td><p style="color: black; font-size: 20px; text-weight: bold; text-align: center;"><?php echo $order_date;?></p></td>
                      <?php
                        if($order_status == 'Placed'){
                          echo "<td><p style='color: black; font-size: 20px; text-weight: bold; text-align: center; color: blue;'>$order_status</p></td>";
                        }
                        elseif($order_status == 'Processing'){
                          echo "<td><p style='color: black; font-size: 20px; text-weight: bold; text-align: center; color: orange;'>$order_status</p></td>";
                        }
                        elseif($order_status == 'Delivered'){
                          echo "<td><p style='color: black; font-size: 20px; text-weight: bold; text-align: center; color: green;'>$order_status</p></td>";
                        }
                        elseif($order_status == 'Canceled'){
                          echo "<td><p style='color: black; font-size: 20px; text-weight: bold; text-align: center; color: red;'>$order_status</p></td>";
                        }
                      ?>
                    </tr>
                      <?php
                        $i++;
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
            <h5 style='background-color: #0B33A3;  margin-bottom: 0px;'><a href='viewOrders.php' style='color: white; margin-left: 20px;'>View All Orders...</a></h5>
          </div>

          <!-- The Active Users' Table -->
          <div class="col-md-4" style='margin-left: 25px; margin-right: -160px; padding: 0px;'>
            <h4 style='background-color: #1A67C5; color: white; text-align: center; margin-bottom: 0px;'> Active Users</h4>
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped" style='margin-top: 0px; margin-bottom: 0px;'>
                  <thead>
                    <tr style='background-color: #6DC666; color: black;'>
                      <th><p style="font-size: 20px; text-weight: bold; text-align: center;">User Name</p></th>
                      <th><p style="font-size: 20px; text-weight: bold; text-align: center;">Email</p></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- php code for extracting 1st 3 orders from DB-->
                    <?php
                      $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

                      if(!$dbconnect){
                          die('Could not connect' . mysql_error());
                      }
                      $sql = "SELECT * FROM user_table";
                      $result = mysqli_query($dbconnect, $sql);
                      
                      $i = 1;
                      $bc_color = '';
                      while($i <= 3){
                        $row = mysqli_fetch_array($result);
                        $user_name = $row['Name'];
                        $email = $row['email'];
                      ?>
                      <tr>
                        <td><p style="color: black; font-size: 20px; text-weight: bold; text-align: center;"><?php echo $user_name;?></p></td>
                        <td><p style="color: black; font-size: 20px; text-weight: bold; text-align: center;"><?php echo $email;?></p></td>
                      </tr>
                      <?php
                        $i++;
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
            <h5 style='background-color: #0B33A3;  margin-bottom: 0px;'><a href='viewActiveUsers.php' style='color: white; margin-left: 20px;'>View All Active Users...</a></h5>
          </div>
        </div>
      </div>
      
      <hr>
      <hr>

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