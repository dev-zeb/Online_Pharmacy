<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Show Uploaded Prescription</title>
        <style>
          .prescriptionBox {
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
        <?php include "navbar.php"; ?>
        <?php include "cartView.php"; ?>
        
        <!-- Breadcrumb Code Begins Here-->
        <div class='container-fluid' style="margin-top: 1rem;">
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item' aria-current='page'><a href='index.php' style='text-decoration: none;'> Home </a></li>
                    <li class='breadcrumb-item active' aria-current='page'>Uploaded Prescriptions</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb Code Ends Here-->
        
        <div class="card prescriptionBox">
            <img src="images/prescription_uplaod.jpg" alt="Can't find your profile picture"  class="center">
            <h1><?php echo"User email:$session_email"?></h1>
              
            <?php 
                $session_email = $_SESSION['email']; 
                try{
                    $conn = new PDO("mysql:host=localhost:3306;dbname=online_pharmacy","root","");
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                }
                catch(PDOException $ex){
                    echo"  <scrip>location.assign('index.php')</scrip>";
                }
                $mysql = "SELECT * FROM `upload_prescription` WHERE user_email='$session_email' order by up_date DESC ";
                $return = $conn->query($mysql);
                $table = $return->fetchAll();
                $i=0;             
                for($i=0; $i<count($table); $i++)
                {
                    $row = $table[$i];
                    $image_dir = $row['image_dir'];
                    $date = $row['up_date'];
                    $details = $row['order_details'];
                    if($i+1 % 2 == 0)
                        $bg_color = '#b3ffff';
                    else
                        $bg_color = '#ffb3ff';      
            ?>
            <h5 class="title" style='background-color: lightgreen; color:black; height: 3rem; font-size: 30px;'> Prescription Id: <?php echo $i+1; ?> </h5>
            <div class='panel panel-default' style='box-shadow:10px 10px 5px grey; background-color:<?php $bg_color; ?>;'>
                <div class="panel-body">
                    ...
                </div>  
                <img src="<?php echo $image_dir ?>" style='max-width: 100%; height: 50vh;' alt="Can't find your picture"  class="center">
                <p style="font-size: 20px;font-weight: bold">  <?php echo"Date Uploaded: $date "?></p>
                <p style="font-size: 20px;font-weight: bold"> 
            <?php 
                if ($details == NULL)
                {
                    echo"Status: Submitted for authentication";
                }
                else 
                {
                    echo"Order details: $details";
                }
            ?>
                    </p>
                </div>
                <br> 
                <br>
                <br>     
              <?php 
                  
                }
            ?>
                <!-- model code starts here -->
                <div class="container" >
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
