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
        <!-- #01473E #AEFE03 #022A33 -->
        <style>
          .wrapper {    
                margin-top: 20px;
                margin-bottom: 20px;
          }
          .form-signin {
                max-width: 30rem;
                max-height: 45rem;
                margin: 1rem auto;
                padding: 15px 15px 15px 15px;
                background-color: #022A33;
                border: 1px solid #087afd; 
          }
          .form-signin-heading {
                text-align:center;
                margin-bottom: 30px;
          }
          .fields {
                position: relative;
                font-size: 16px;
                width: 100%;
                height: auto;
                padding: 10px;
          }
          input[type="text"] {
                margin: 20px 0px 0px 0px;
                background-color: #01473E;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
				border: 1px solid #087afd;
				transition: width 0.5s;
          }
          input[type="text"]:hover{
				border: 1px solid #FF7F12;
          }
          input[type="password"] {
                margin-bottom: 20px;
                background-color: #01473E;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
				border: 1px solid #087afd;
				transition: width 0.5s;
          }
            input[type="password"]:hover{
                border: 1px solid #FF7F12;
            }
            input[type='text'], input[type='password'], select { 
				outline: none;
		    }
            a:hover{
                color: white;
                text-decoration: none;
            }
        </style>
    </head>
    <body style=" background-color: #01473E;" >
        <?php
			$dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');

			if(!$dbconnect){
				die('Could not connect' . mysql_error());
			}
			$sql = "SELECT * FROM admin";
			$result = mysqli_query($dbconnect, $sql);
			$row = mysqli_fetch_array($result);

			if(isset($_POST['submit'])){
				session_start();
				$name = $_POST['name'];
				$pass = $_POST['pass'];

				if($name == $row['admin_user_name'] && $pass == $row['admin_pass'])
				{
					$_SESSION['admin_user_name'] = $name;
          			echo 	"<script>location.href='adminDashboard.php'</script>";
				}
				echo	"<script>location.href='adminLogin.php'</script>";
			}
			if(isset($_SESSION['admin_user_name'])){
				echo 	"<script>location.href='adminDashboard.php'</script>";
			}
		?>
        <div class = "container">
            <div class="wrapper">
                <form action="adminLogin.php" method="post" name="Login_Form" class="form-signin">       
                    <img src="images/admin_pro.png" class="rounded mx-auto d-block" alt="avatar" style="max-width : 100%; margin: 0 auto;">
                    <div style='width: 100%; padding: 5px 0px 10px 0px; background-color: #01473E; border: 1px solid #087afd; margin: 10px 0px 10px 0px;'>
                        <h2 style='color: #087afd; text-align: center;'>Admin Login</h2>
                    </div>
                    <input type="text" class="fields rounded-pill" name="name" placeholder="Email" required="required"/>
                    <br>
                    <br>
                    <input type="password" class="fields rounded-pill" name="pass" placeholder="Password" required="required"/>   		  
                    <button class="btn btn-lg btn-primary btn-block"  name="submit" type="Submit">Login</button>  
                    <br>
                    <div style='text-align: center; margin: 0px auto;'>
                        <a href='login.php'>
                            User login
                        </a>
                    </div>
                    <br>
                </form>			
            </div>
        </div>
    </body>
</html>


