<!DOCTYPE html>
<html>
	<head>
		<title>Upload Prescription</title>
		<link rel="stylesheet" href="bootstrap.fd.css">
    <style>
      .refundBox {
        box-shadow: 0 40px 100px 0 	rgb(153, 153, 153);
        max-width: 1050px;
        margin: auto;
        text-align: center;
      }
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;           
      }
    </style>
  </head>
  <body>
		<?php include 'navbar.php'; ?>
    <?php include 'cartView.php'; ?>
		<!-- Breadcrumb Code Begins Here-->
    <div class='container-fluid' style='margin-top: 1rem;'>
      <nav aria-label='breadcrumb'>
        <ol class='breadcrumb'>
          <li class='breadcrumb-item' aria-current='page'><a href='index.php' style='text-decoration: none;'> Home </a></li>
          <li class='breadcrumb-item active' aria-current='page'>Uplaod Prescription</li>
        </ol>
      </nav>
    </div>
		<!-- Breadcrumb Code Ends Here-->
        
    <br>
    <?php include "database_connection.php" ?>    
    <div class="card refundBox">
      <img src="images/refund.jpg" alt="Can't find your profile picture"  class="center">
      <h1><?php echo"User email:$session_email"?></h1>
      <?php   
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        try {
          $conn = new PDO("mysql:host=$servername;port=3306;dbname=online_pharmacy", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex){
          echo  "<script>window.alert('Database Connection Error!');</script>";
        }
        $session_email = $_SESSION['email']; 
        $mysql = "SELECT * FROM `refund` WHERE user_email='$session_email'";
        $return = $conn->query($mysql);
        $table = $return->fetchAll();
        $i=0;
        for($i=0 ; $i< count($table); $i++)
        {
          $row = $table[$i];
          $id = $row['id'];
          $details = $row['request_refund'];
          $status = $row['status'];
          $admin_reply = $row['admin_reply'];
          $index = $i+1; 
      ?>
          <h5 class="title" style='background-color: lightgreen; color:black  ; height: 3rem; font-size: 30px;'> <?php echo"Refund no: $index "?> </h5>
          <br>
          <br>
      <?php
          if( $index %2 ==0 )
              echo  "<div style='box-shadow:10px 10px 5px grey;background-color:#b3ffff' class='panel panel-default'>";
          else 
              echo  "<div style='box-shadow:10px 10px 5px grey;background-color:#ffb3ff' class='panel panel-default'>";
      ?> 
          <div class="panel-body">
              ...
          </div>
          <p style="font-size: 20px;font-weight: bold">  <?php echo"Your details: $details "?></p>
          <p style="font-size: 20px;font-weight: bold">  <?php echo"Status: $status "?></p>
          <p style="font-size: 20px;font-weight: bold"> 
      <?php 
          if ( $admin_reply == NULL)
              echo  "Reply: Not replied yet.Please be paitent.We are trying our best. :) ";
          else 
              echo"Reply: $admin_reply";
    echo "</p>
        </div>";
        }
      ?>

      <br> 
      <br>
      <br> 
      <!-- model code starts here -->
      <div class="container" >
        <!-- Button to Open the Modal -->
        <button   type="button" style='margin-bottom: 20px;' class="btn btn-primary" data-toggle="modal" data-target="#leemon">
          Place Refund Request
        </button>
        <!-- The Modal -->
        <div class="modal fade" id="leemon">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Please carefully edit your details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <form action="post_refund.php" method="post">
                  <div class="form-group shadow-textarea">
                    <label for="exampleFormControlTextarea6">Details(Must include your orderid): </label>
                    <textarea class="form-control z-depth-1" name="details" id="details" rows="15" placeholder="Write your order id with details here..."></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit Your Request</button>
                </form>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <div class="button_center">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
