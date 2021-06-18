<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Chat</title>
        <style>  
            .chatBox {
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
                    <li class='breadcrumb-item active' aria-current='page'>Online Chat</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb Code Ends Here-->

      <div class="card chatBox">
          <img src="images/online_chat.jpg" alt="Can't find your profile picture"  class="center">
          <h1><?php echo"User email:$session_email"?></h1>
          <button   type="button" id="modal_button" class="btn btn-primary" data-toggle="modal" data-target="#chatBox">
              Click to Open Chat Box!
          </button>  
        <!-- model code starts here -->
        <div class="container" >
          <!-- Button to Open the Modal -->
          <!-- The Modal -->
          <div class="modal fade" id="chatBox">
            <div style='max-height: 30rem; max-width: 450rem; overflow-y: auto;'class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Welcome to online chat!</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>
                <!-- Modal body -->
                <div class="modal-body"> 
              <?php
                try{   
                  $conn = new PDO("mysql:host=localhost:3306;dbname=online_pharmacy","root","");
                  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 

                  $sql_for_id = "SELECT * FROM user_table WHERE email='$session_email'";
                  $return_for_id = $conn->query($sql_for_id);
                  $table_for_id = $return_for_id->fetchAll();
                  $j = 0;
                  foreach($table_for_id as $product){
                      echo "<h1 style='margin-top: 1.4rem;'>$product</h1>";
                  }
                  // $row_for_id = $table_for_id[]; 
                  // $pro_imag_dir =  $table_for_id['image_dir'];
                  // $session_email = $_SESSION['email']; 
                  $mysql = "SELECT * FROM online_chat WHERE user_email='$session_email' order by chat_id asc";
                  
                  $return = $conn->query($mysql);
                  $table = $return->fetchAll();
                  $i=0; 

                  for($i=0 ; $i < count($table); $i++)
                  {
                    $row = $table[$i];
                    $message = $row['customer_messege'];
                    $mod_reply = $row['moderator_reply'];
                    $chat_date = $row['chat_created_date'];
                    $chat_time = $row['time'];
                    $index = $i+1;
              ?>
                    <!-- html goes here -->   
                    <div class="row">
                      <div class="col-xs-2" style="background-color:lavender;">
                        <!-- image --> 
                        <img style="width:60px; height:60px" src="<?php echo"$pro_imag_dir"?>" alt="Can't find your profile picture" >
                      </div>
                      <div class="col-xs-10" style="background-color:lavenderblush;">
                        <p><?php echo"$message"?></p>               
                        <p style=" text-align: right;"><small><?php echo"$chat_date   $chat_time"?></small></p>
                      </div>
                    </div>
                    <!-- admin -->
                    <div class="row">
                      <div class="col-sm-10" style="background-color:#80ffff;">     
                  <?php
                    
                    if ($mod_reply==NULL)
                    {
                      echo"Assalamualaikum! Thank you for contacting with us. Please wait our moderators are joining soon ....."; 
                  ?>
                        <p style=" text-align: left;"><small><?php echo"$chat_date $chat_time"?></small></p>
                  <?php
                    } // END if
                    else 
                    {       
                      echo "$mod_reply"; 
                  ?>
                        <p style=" text-align: right;"><small><?php echo"$chat_date $chat_time"?></small></p>
                  <?php
                    } // END else
                  ?>      
                      </div>
                      <div class="col-sm-2" style="background-color:lavender;">  
                        <img style="width:60px; height:60px" src="images/admin_pro.png" alt="Can't find your profile picture" >
                      </div>
                    </div>
            
                <!-- html ends here here -->  
              <?php
                  } // END for
                } // END try
                catch(PDOException $ex){
                  echo"  <scrip>location.assign('index.php')</scrip>";
                }
              ?>
              </div>
              <!-- Modal footer -->
              <div style='height:250x'class="modal-footer">
                <div class="button_center">
                    <form action="post_chat.php" method="post">    
                      <div class="form-group shadow-textarea">
                        <label for="exampleFormControlTextarea6">Start your query....: </label>
                        <textarea style="border-style: solid; width: 500px; border-color: green" class="form-control z-depth-1" name="details" id="details" rows="5" placeholder="Write someting ....Say hello ....">
                        </textarea>
                      </div>    
                      <button style="float: right;" type="submit" class="btn btn-primary">Send</button>
                    </form>
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
    <script type="text/javascript">
        document.getElementById("modal_button").click();
    </script>
</html>