<!DOCTYPE html>
<html>
    <head>
      <title>Login page</title>
      <!-- Required meta tags always come first -->
      <meta charset="utf-8">
      <!-- The following meta tag makes the page responsive-->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      
      <link rel="stylesheet" href="Node_modules/css/bootstrap.min.css">
      <link rel="stylesheet" href="fontawesome-web/css/all.css">
        
        <style>
          .wrapper {    
            margin-top: 20px;
            margin-bottom: 20px;
          }
          .form-signin {
            max-width: 30rem;
            max-height: 45rem;
            margin: 0 auto;
            background-color: #eee;
            border: 10px dotted rgba(0,0,0,0.1);  
          }
          .form-signin-heading {
            text-align:center;
            margin-bottom: 30px;
          }
          .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            
          }
          input[type="text"] {
            margin-bottom: 0px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
          }
          input[type="password"] {
            margin-bottom: 20px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
          }
          .colorgraph {
            height: 7px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
          }
        </style>
    </head>
        
    <body style=" background-color: lightseagreen;" >

        <div class = "container">
            <div class="wrapper">
                <form action="verify_login.php" method="post" name="Login_Form" class="form-signin">       
                    <img src="images/profile_demo.png" class="rounded mx-auto d-block" alt="avatar" style="max-width : 100%; margin: 0 auto;">
                    <hr class="colorgraph"><br>
                    <input type="text" class="form-control" name="user_email" placeholder="Email" required="required"/>
                    <br>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required"/>     		  
                    <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  
                    <br>
                    <a href="signUp.php" class="btn btn-lg btn-primary btn-block">Sign up</a>
                    <div style='text-align: center;'>
                        <a href='adminLogin.php'>
                            Admin login
                        </a>
                    </div>
                    <br>
                </form>			
            </div>
        </div>

    </body>
</html>