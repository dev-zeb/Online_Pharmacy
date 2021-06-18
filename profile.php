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
      .card {
        box-shadow: 0 40px 100px 0 	rgb(153, 153, 153);
        max-width: 500px;
        margin: 20px auto;
        text-align: center;
        padding: 5px; 
      }

      /* For Popup Window Elements */
      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding: 25px;
        margin: 5px auto;
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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
      .form-div{
        margin-top: 2rem;
        margin-left: 15rem;
        max-width: 100rem;
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
      #btns{
        width: 10rem;
        margin-top: 10px;
      }
    </style>
  </head>

  <body>
		<?php include "navbar.php"; ?>
		<?php include "cartView.php"; ?>
    
    <?php
        $session_email = $_SESSION['email'];
        // Build up the connection (PDO)
        $conn = new PDO("mysql:host=$servername;port=3306;dbname=online_pharmacy", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $msg = "";
        if(!$dbconnect){
            die('Could not connect' . mysql_error());
        }
        if(isset($_POST['save_profile']))
        {
            $img = '';
            $imgText = $_POST['imgText'];
            if(!empty($_FILES['profileImage']))
            {
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
            $newPass = $_POST['profilePassword'];
            $newDOB = $_POST['profileDOB'];
            $newPhone = $_POST['profilePhone'];
            $newAddress = $_POST['profileAddress'];

            $update_sql = "UPDATE user_table SET Name='$newName', email='$newEmail', dob='$newDOB', address='$newAddress', phone_number='$newPhone', password='$newPass', image_dir='$img'  WHERE email='$newEmail'";
            $res = $conn->query($update_sql);

            if($res){
              $msg = 'Successfully Updated';
              $css_class = 'alert-success';
            }
            else{
              $msg = 'Failed to update';
              $css_class = 'alert-danger';
            }
        }
        $info_sql = "SELECT * FROM user_table WHERE user_name='$session_email'";
        $res2 = $conn->query($info_sql);

        if(!$res2){
          echo "<h1 style='margin-top: 1rem;'>FAILING AT RESULT </h1>";
        }
        
        $row = $res2->fetchAll();
        
        if(!$row){
          echo "<h1 style='margin-top: 1rem;'>FAILING AT FETCHING </h1>";
        }
        $img_dir = $row[0]['image_dir'];
        $name = $row[0]['Name'];
        $email = $row[0]['email'];
        $dob = $row[0]['dob'];
        $add = $row[0]['address'];
        $phone = $row[0]['phone_number'];
        $u_name = $row[0]['user_name'];
        $password = $row[0]['password'];
        $cat = $row[0]['user_cat'];
        $date_join = $row[0]['date_joined'];
    ?>
      <div class="card">
        <?php if(!empty($msg)): ?>
          <div style='margin-top: 2px; margin-bottom: 0px;' class="alert <?php echo $css_class; ?>">
            <?php echo $msg; ?>
          </div>
        <?php endif; ?>
        <h5 class="title" style='background-color: black; color: white; height: 2rem; font-size: 22px;'><?php echo strtoupper($cat)?></h5>
        <img style="width: 225px; height: 225px; border: 1px solid black; border-radius: 50%; margin-left: 25%; margin-top: 25px;" src="<?php echo "$img_dir"?>" alt="Image"  class="center">
        <h2> <?php echo "$name"?></h2>        
        <h5 class="title"><?php echo  "Email: $email"?></h5>
        <h5 class="title"><?php echo  "Date of Birth: $dob"?></h5>
        <h5 class="title"><?php echo  "Address : $add" ?></h5>
        <h5 class="title"><?php echo  "Phone : $phone"?></h5>
        <h5 class="title"><?php echo  "User Name: $u_name"?></h5>
        <h5 class="title"><?php echo  "Joined Date: $date_join"?></h5>

        <input id='myBtn' type="submit" class="btn btn-success btn-pill" value='Edit Profile'>
        <a href="index.php">Go To Home Page</a>
      </div>


      <!-- Popup window coding part starts here -->
      <div id="myModal" class="modal">
        <div class='container'>
          <div class="col-7 form-div">
            <form role='form' action='profile.php' method='POST' enctype='multipart/form-data'>
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
                    <label for="profileName">Enter New Name</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" value='<?php echo $name;?>' name='profileName' id='profileName' class='form-control' required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-4">
                    <label for="profileEmail">Enter New Email</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" value='<?php echo $email;?>' name='profileEmail' id='profileEmail' class='form-control' required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-4">
                    <label for="profilePassword">Enter New Password</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="password" value='<?php echo $password;?>' name='profilePassword' id='profilePassword' class='form-control' required>
                  </div>
                  <div class="col-sm-1">
                    <input onclick='showPass()' type="button" name="side" id="side" value='Show'>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-4">
                    <label for="profileDOB">Enter New DOB</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" value='<?php echo $dob;?>' name='profileDOB' id='profileDOB' class='form-control' required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-4">
                    <label for="profilePhone">Enter New Phone No.</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" value='<?php echo $phone;?>' name='profilePhone' id='profilePhone' class='form-control' required>
                  </div>
                </div>  
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-4">
                    <label for="profileAddress">Enter New Address</label>
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
    </script>
	
	<script src="js/dashboard.js"></script>
  </body>
</html>