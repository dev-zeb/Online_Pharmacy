<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <!-- The following meta tag makes the page responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <link rel="stylesheet" href="Node_modules/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-web/css/all.css">
    <style>
      body {
        color: #fff;
        background: #63738a;
        font-family: 'Roboto', sans-serif;
      }
      .form-control{
        height: 2.5rem;
        box-shadow: none;
        color: #969fa4;
      }
      .form-control:focus{
        border-color: #5cb85c;
      }
      .form-control, .btn{        
        border-radius: 0.3rem;
      }
      .signup-form{
        max-width: 40rem;
        margin: 10px auto;
        padding: 10px auto;
      }
      .signup-form h2{
        color: #636363;
        margin: 0 0 0.5rem;
        position: relative;
        text-align: center;
      }
      .signup-form h2:before, .signup-form h2:after{
        content: "";
        height: 0.3rem;
        width: 30%;
        background: #d4d4d4;
        position: absolute;
        top: 50%;
        z-index: 2;
      }	
      .signup-form h2:before{
        left: 0.5rem;
      }
      .signup-form h2:after{
        right: 0.5rem;
      }
      .signup-form .hint-text{
        color: #999;
        margin-bottom: 1.5rem;
        text-align: center;
      }
      .signup-form form{
        color: #999;
        border-radius: 0.3rem;
        margin-bottom: 0.5rem;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
      }
      .signup-form .form-group{
        margin-bottom: 1.25rem;
      }
      .signup-form .btn{        
        font-size: 1rem;
        font-weight: bold;		
        min-width: 90%;
        outline: none !important;
      }
      .signup-form p{
        color: black;
        font-size: 1rem;
        text-align: center;
        text-decoration: none;
      }
      .signup-form p:hover{
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="signup-form">
      <form action="verify_sign_up.php" method="POST" enctype="multipart/form-data">
        <h2 style="color:#cc0099">Sign Up</h2>
        <p class="hint-text">Create your account</p>

        <div class="form-group">
          <label>Date of birth</label>
          <input type="date" class="" name="udate_joined" required="required">
        </div> 

        <div class="form-group">
          <input type="text" class="form-control" name="uname" placeholder="Enter Name" required="required">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="uemail" placeholder="Enter Email" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="uaddress" placeholder="Enter Address" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="uphone_number" placeholder="Enter Phone Number" required="required">
        </div> 
        <div class="form-group">
            <input type="text" class="form-control" name="uuser_name" placeholder="Enter User Name" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="upassword" placeholder="Enter Password" required="required">
        </div> 

        <div class="form-group">
          <div class="custom-file">
            <label class="custom-file-label" for="customFile">Profile Picture</label>
            <input type="file" class="custom-file-input" id="uimage" name="uimage">
          </div>
        </div>

        <div class="form-group">
          <button type="submit" name='submit' class="btn btn-success btn-lg btn-block">Register Now</button>
          <button type="reset" class="btn btn-success btn-lg btn-block" value="Reset">Reset</button> 
        </div>
        <p><a href="login.php">Login</a></p>
        <div style='text-align: center;'>
            <a href='adminLogin.php'>
                Admin login
            </a>
        </div>
      </form>
    </div>
  </body>
</html>