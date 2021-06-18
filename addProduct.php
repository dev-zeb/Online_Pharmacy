
<?php
  // Declaring some Global variables to access them from anywhere of the code
  $msg = '';
  $css_class = ''; 
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
        background-color: #817D7D;
        display: block;
      }
      #p1{
        padding: 6px 8px 6px 25px;
        font-size: 25px;
        color: white;
        display: block;
        border-top: 1px solid white;
        border-bottom: 1px solid white;
      }
      /* When you mouse over the navigation links, change their color */
      .sidenav a:hover {
        color: #f1f1f1;
      }

      /* Style page content */
      .main{
        margin-left: 160px; /* Same as the width of the sidebar */
        padding: 0px 10px;
      }
      i{
        margin-right: 10px;
      }

      /*------------------*/
      input[type='text']{
				height: 2rem;
				background-color: white;
				color: black;
				text-align: center;
				transition: border 0.5s;
			}
			input[type='text']:hover{
				border: 1px solid #FF7F12;
			}
			#password{
				border: 1px solid black;
				border-radius: 2%;
				width: 25rem;
				height: 2.5rem;
				background-color: white;
				color: black;
				text-align: center;
				transition: border 0.5s;
        
        margin-left: 19%;
			}
			#password:hover{
				border: 3px solid #FF7F12;
				border-radius: 5%;
			}
      input[type='text'], input[type='textarea'], input[type='button'], input[type='password'], textarea, select { 
				outline: none;
        background-color: #F0EEEE;
			}
      .form-div{
        margin-top: 30px;
        margin-left: 25%;
        border: 1px solid black;
        border-radius: 10px;
        background-color: white;
      }
      #pictureDisplay{
        display: block;
        width: 30%;
        margin: 10px auto;
        border-radius: 50%;
        border: 1px solid black;
      }
      #pictureDisplay:hover{
        cursor: pointer;
        border: 1.5px solid #FF7F12;
      }
      #productCategory:hover{
        cursor: pointer;
        border: 1px solid #FF7F12;        
      }
      #opt:hover{
        cursor: pointer;
      }
      #ifMedicine{
        margin-left: 30px;
        width: 14rem;
        text-align: center;
        border: 1px solid black;
      }
      #productDescr{
        height: 4rem;
        font-size: 12px;
      }
      #btns{
        width: 10rem;
        margin-top: 10px;
      }
      /** NEW */
      
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
        background-color: grey;
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
        border: none;
        margin-right: -15px;
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

    <?php

      if(isset($_POST['save-product'])){
        $img = '';
        if(!empty($_FILES['productImage'])){
          $img = $_FILES['productImage']['name'];
          if($img == ''){
            $img = 'images/placeholder.png';
          }
          else{
            $img = 'images/Products/' . $img;
            move_uploaded_file($_FILES['productImage']['tmp_name'], $img);
          }
        }
            
        $imageName = $_FILES['productImage']['name'];
        
        $name = $_POST['productName'];
        $brand = $_POST['productBrand'];
        $amount = $_POST['productAmount'];
        $ppu = $_POST['productPrice'];
        $category = $_POST['productCategory'];
        $disease = $_POST['ifMedicine'];
        $details = $_POST['productDescr'];
        
        $target = 'images/Products/' . $imageName;

        $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

        if(!$dbconnect){
            die('Could not connect' . mysql_error());
        }
        $s = 'SELECT MAX(pro_id) AS m FROM product';
        $r = mysqli_query($dbconnect, $s);
        $pro_id_next = mysqli_fetch_assoc($r)['m'];
        $pro_id_next++;
        if($disease != ''){
          $sql = "INSERT INTO product (pro_id, pro_name, quantity_stored, quatity_sold, price_per_unit, pro_cat, details, brand, disease_name, image_dir) VALUES('$pro_id_next', '$name', '$amount', '0', '$ppu', '$category', '$details', '$brand', '$disease', '$img')";
        }
        else{
          $sql = "INSERT INTO product (pro_id, pro_name, quantity_stored, quatity_sold, price_per_unit, pro_cat, details, brand, image_dir) VALUES('$pro_id_next', '$name', '$amount', '0', '$ppu', '$category', '$details', '$brand', '$img')";
        }
        
        $result = mysqli_query($dbconnect, $sql);
        if(!$result){
          $msg = "DB ERROR";
          $css_class = 'alert-danger';
        }
        else{
          $msg = "Product Successfully Added";
          $css_class = 'alert-success';
        }
      }
    ?>

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


      <div class='container'>
        <div class="col-5 offset-md-4 form-div">
          <form action="addProduct.php" method="POST" enctype='multipart/form-data'>
            
            <h3 class="text-center">Add New Product</h3>
            
            <?php if(!empty($msg)): ?>
              <div class="alert <?php echo $css_class; ?> text-center">
                <?php echo $msg; ?>
              </div>
            <?php endif; ?>
            <?php if($msg == 'Product Successfully Added'): ?>
              <a href="viewProducts.php"><p style='text-align: center;'> View All</p></a>
            <?php endif; ?>
            
            <div class="form-group text-center">
              <img src="images/placeholder.png" name='imgText' onclick='triggerClick()' value='' id='pictureDisplay' alt="Image Upload">
              <label for="productImage">Select Product Image</label>
              <input type="file" name='productImage' onchange='displayImage(this)' id='productImage' style='display: none;' required>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <select onchange='check(this)' name="productCategory" id="productCategory" required>
                    <option disabled selected value> Select a category </option>
                    <option id='opt' value="medicine">Medicine</option>
                    <option id='opt' value="healthcare">Health Care</option>
                    <option id='opt' value="babycare">Baby Care</option>
                  </select>
                </div>
                <div class="col-sm-8">
                  <input type="hidden" name = 'ifMedicine' id='ifMedicine' value='' placeholder='Enter Disease Name'>
                </div>
              </div>
              
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <label for="productName">Product Name</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name='productName' id='productName' class='form-control' required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <label for="productPrice">Price Per Unit</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name='productPrice' id='productPrice' class='form-control' required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <label for="productAmount">Product Amount</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name='productAmount' id='productAmount' class='form-control' required>
                </div>
              </div>  
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <label for="productBrand">Product Brand</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name='productBrand' id='productBrand' class='form-control' required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="productDescr">Short Description</label>
              <div class="col-sm-12">
                <input type="textarea" name='productDescr' id='productDescr' class='form-control' required>
              </div>
            </div>
            <div class="form-group text-center">
              <button type="submit" onclick='cancelClicked()' name='cancel' class="btn btn-danger" id='btns'>Cancel</button>
              <input type="submit" name='save-product' class="btn btn-success" id='btns' value='Save Product'/>
            </div>
          </form>
        </div>
      </div>
    </div>
      
    <script>
      function cancelClicked(){
        location.href = 'adminDashboard.php';
      }

      // For the select option
      function check(that){
        if(that.value == 'medicine'){
          document.getElementById('ifMedicine').type = 'text';
        }
        else{
          document.getElementById('ifMedicine').type = 'hidden';
        }
      }
      // When the image is clicked
      function triggerClick(){
        document.querySelector('#productImage').click();
      } 
      function displayImage(e){
        if(e.files[0]){
          var reader = new FileReader();
          reader.onload = function(e){
            document.querySelector('#pictureDisplay').setAttribute('src', e.target.result);
          }
          reader.readAsDataURL(e.files[0]);
        }
      }
      /** */
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