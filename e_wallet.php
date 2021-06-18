<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Chat</title>
        <style>  
          .walletBox {
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
                    <li class='breadcrumb-item active' aria-current='page'>E-Wallet</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb Code Ends Here-->
        
        <!-- database connection starts -->
        
          <?php include"database_connection.php" ?>
        
        <!-- database connection ends  -->
        
        <?php 
            $session_email = $_SESSION['email'];
            try{
                $conn = new PDO("mysql:host=localhost:3306;dbname=online_pharmacy","root","");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
            }
            catch(PDOException $ex){
                echo"  <scrip>location.assign('index.php')</scrip>";
            }
            $mysql="SELECT * FROM `e_wallet` WHERE user_email='$session_email' ";            
            $return = $conn->query($mysql);
            $table = $return->fetchAll();
            $i=0; 
        
            if ( count($table )> 0 )
            {
                $row = $table[$i];
                $balance =    $row['balance'];
                $total_withdraw=    $row['total_withdraw'];
                $reward_amouont  =    $row['reward_amount'];
                $img_dir=  $row['image_dir'];
            }
            else 
            {
                $balance = "not avaiable";
                $total_withdraw= "not avaiable" ;
                $reward_amouont  =  "not avaiable";
            }
        ?>
        
        <div class="card walletBox">
            <img src="images/e%20wallet.jpg" alt="John"  class="center">
            <p class="title"><?php echo"$session_email"?></p>
            <i class="glyphicon glyphicon-cloud"></i>
            <p class="title" ><?php echo" Balance:  $balance  " ?></p>
            <p class="title"><?php echo"Total withdraw:  $total_withdraw "?></p>
            <p class="title"><?php echo"Reward amount:  $reward_amouont"?></p> 
            <!-- model code starts here -->
            <div class="container" >
                <!-- Button to Open the Modal -->
                <button   type="button" class="btn btn-primary" data-toggle="modal" data-target="#leemon">
                    Add amount 
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="leemon">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Select Your desire Payment Options</h4>

                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <img src="images/Payment-gateway-service.jpg" alt="Avatar" > 
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
        
        <!-- Footer Code Starts Here -->
        <footer class='footer bg-dark text-light' style='position: absolute; bottom: 0px; width: 100%;'>
            <div class='container'>
              <div class='row'>             
                  <div class='col-5 offset-1 col-sm-5'>
                      <h5>Links</h5>
                      <ul class='list-unstyled'>
                          <li><a href='index.php'>Home</a></li>
                      </ul>
                      <i class='fa fa-phone fa-lg'></i> : +880 1111143457<br>
                  </div>
                  <div class='col-6 col-sm-6'>
                      <h5 style='margin-left: 30%;'>About Us</h5>
                      <address>
                          This website is basically made for the Project of our <br>
                          System Analysis and Design Laboratory course. <br>
                          It's an online platform where people can buy medicines, <br>
                          Healthcare and Babycare products and more.<br>
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
