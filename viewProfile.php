
<?php
  session_start();
  if(!isset($_SESSION['admin_user_name'])){
    echo  "<script>location.href='adminLogin.php'</script>";
  }
  $msg = '';
  $css_class = '';
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

      /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
      i{
        margin-right: 10px;
      }
      .card {
        box-shadow: 0 40px 100px 0 	rgb(153, 153, 153);
        max-width: 500px;
        height: 650px;
        margin: 5px auto;
        text-align: center;
        padding: 5px 5px 5px 5px; 
      }
      .center{
        width: 400px;
        margin-left: 22%;
      }

      /* For Popup Window Elements */
      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 5px;
        margin-left: 10.7rem;
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }ckground-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }
      #text{
				border: 3px solid black;
				width: 25rem;
				height: 2.5rem;
				background-color: white;
				color: black;
				text-align: center;
				transition: border 0.5s;
        margin-left: 19%;
			}
			#text:hover{
				border: 3px solid #FF7F12;
				border-radius: 5%;
			}
			#password{
				border: 3px solid black;
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
      #side{
        width: 5rem;
				height: 2.4rem;
				background-color: grey;
				color: white;
				text-align: center;
				transition: border 0.5s;
        margin-left: -53px;
      }
      input[type='text'], input[type='button'], input[type='password'], textarea, select { 
				outline: none;
			}
      
      input[type='text'], input[type='textarea'], input[type='button'], input[type='password'], textarea, select { 
				outline: none;
        background-color: #F0EEEE;
			}
      .form-div{
        margin-top: 5px;
        margin-left: 15%;
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
      #profileCategory:hover{
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
      #profileDescr{
        height: 4rem;
        font-size: 12px;
      }
      #btns{
        width: 10rem;
        margin-top: 10px;
      }
      /**----------------------------------- */
      
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

    <?php
        $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

        if(!$dbconnect){
            die('Could not connect' . mysql_error());
        }
        $saved = false;
        $val_from_prev_page = $_POST['id'];
        // If the save button is clicked
        if(isset($_POST['save_profile']))
        {
            $img = '';
            $imgText = $_POST['imgText'];
            if(!empty($_FILES['profileImage'])){
              $img = $_FILES['profileImage']['name'];
              if($img == ''){
                $img = $imgText;
              }
              else{
                $img = 'images/Users/' . $img;
                move_uploaded_file($_FILES['profileImage']['tmp_name'], $img);
              }
            }
            
            $newName = $_POST['profileName'];
            $newEmail = $_POST['profileEmail'];
            $newDOB = $_POST['profileDOB'];
            $newPhone = $_POST['profilePhone'];
            $newAddress = $_POST['profileAddress'];
            $newCategory = $_POST['profileCategory'];

            $sql2 = "UPDATE user_table SET Name='$newName', email='$newEmail', dob='$newDOB', address='$newAddress', phone_number='$newPhone', user_cat='$newCategory', image_dir='$img'  WHERE email='$val_from_prev_page'";
            $res = mysqli_query($dbconnect, $sql2);

            if($res){
              $msg = 'Successfully Updated';
              $css_class = 'alert-success';
            }
            else{
              $msg = 'Failed to update';
              $css_class = 'alert-danger';
            }
            if($res){
              $msg = 'Successfully Updated';
              $css_class = 'alert-success';
            }
            else{
              $msg = 'Failed to update';
              $css_class = 'alert-danger';
            }
            if($val_from_prev_page != $newEmail){
              $val_from_prev_page = $newEmail;
            }
        }
        
        $sql = "SELECT * FROM user_table WHERE email = '$val_from_prev_page'";
        
        $result = mysqli_query($dbconnect, $sql);
        if(!$result){
          echo '<h1>FAILING AT RESULT </h1>';
        }
        $row = mysqli_fetch_array($result);
        if(!$row){
          echo '<h1>FAILING AT FETCHING </h1>';
        }

        $img_dir = $row['image_dir'];
        $name = $row['Name'];
        $email = $row['email'];
        $dob = $row['dob'];
        $add = $row['address'];
        $phone = $row['phone_number'];
        $u_name = $row['user_name'];
        $password = $row['password'];
        $cat = $row['user_cat'];
        $date_join = $row['date_joined'];
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
      <div class="card">
        <?php if(!empty($msg)): ?>
          <div style='margin-top: 2px; margin-bottom: 0px;' class="alert <?php echo $css_class; ?>">
            <?php echo $msg; ?>
          </div>
        <?php endif; ?>
        <h5 class="title" style='background-color: black; color: white; height: 2rem; font-size: 22px;'><?php echo strtoupper($cat)?></h5>
        <img style="width: 225px; height: 225px; border: 1px solid black; border-radius: 50%; margin-left: 25%; margin-top: 25px;" src="<?php echo "$img_dir"?>" alt="Image"  class="center">
        <h2> <?php echo "$name"?></h2>
        
        <h5 class="title"><?php echo"Email: $email"?></h5>
        <h5 class="title"><?php echo"Date of Birth: $dob"?></h5>
        <h5 class="title"><?php echo"Address : $add" ?></h5>
        <h5 class="title"><?php echo"Phone : $phone"?></h5>
        <h5 class="title"><?php echo"User Name: $u_name"?></h5>
        <h5 class="title"><?php echo"Joined Date: $date_join"?></h5>

        <input id='myBtn' type="submit" class="btn btn-success btn-pill" value='Edit Profile'>
        <a href="adminDashboard.php">Go To Dashboard</a>
      </div>


      <!-- Popup window coding part starts here -->
      <div id="myModal" class="modal">
          <div class='container'>
            <div class="col-7 offset-sm-4 form-div">
              <form role='form' action='viewProfile.php' method='POST' enctype='multipart/form-data'>
                <input type="hidden" name='id' value='<?php echo $val_from_prev_page; ?>'>
                <h3 class="text-center">Edit Profile Info.</h3>
                
                <div class="form-group text-center N">
                  <img src='<?php echo $img_dir;?>' onclick='triggerClick()' id='pictureDisplay' alt="Image Not Found">
                  <label for="profileImage">Change Profile Image</label>
                  <input type="text" name='imgText' value='<?php echo $img_dir;?>' style='display: none;'>
                  <input type="file" name='profileImage' onchange='displayImage(this)' id='profileImage' style='display: none;'>
                </div>
                
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="profileCategory">Change User Role</label>
                    </div>
                    <div class="col-sm-8">
                      <select onchange='check(this)' name="profileCategory" id="profileCategory" required>
                        <option value='<?php echo $cat; ?>' selected value> <?php echo $cat; ?> </option>
                        <?php if($cat == 'user'): ?>
                        <option id='opt' value="moderator">moderator</option>
                        <?php endif; ?>
                        <?php if($cat == 'moderator'): ?>
                        <option id='opt' value="user">user</option>
                        <?php endif; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="profileName">User Full Name</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" value='<?php echo $name;?>' name='profileName' id='profileName' class='form-control' required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="profileEmail">User Email</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" value='<?php echo $email;?>' name='profileEmail' id='profileEmail' class='form-control' required>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="profileDOB">User DOB</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" value='<?php echo $dob;?>' name='profileDOB' id='profileDOB' class='form-control' required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="profilePhone">User Phone No.</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" value='<?php echo $phone;?>' name='profilePhone' id='profilePhone' class='form-control' required>
                    </div>
                  </div>  
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="profileAddress">User Address</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" value='<?php echo $add;?>' name='profileAddress' id='profileAddress' class='form-control' required>
                    </div>
                  </div>
                </div>
                <div class="form-group text-center">
                  <button onclick='cancelClicked()' name='cancel' class="btn btn-danger" id='btns'>Cancel</button>
                  <input type='submit' name='save_profile' class='btn btn-success' id='btns'/>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
	  </div>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");
      
      // For the select option
      function check(that){
        if(that.value == 'medicine'){
          document.getElementById('ifMedicine').type = 'text';
        }
        else{
          document.getElementById('ifMedicine').type = 'hidden';
        }
      }
      // To make password visible
      function showPass(){
        var x = document.getElementById('profilePassword');
        var y = document.getElementById('side');
        if (x.type === "password") {
          x.type = "text";
          y.value = 'Hide';
        } else {
          x.type = "password";
          y.value = 'Show';
        }
      }
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
      // When the image is clicked
      function triggerClick(){
        document.querySelector('#profileImage').click();
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