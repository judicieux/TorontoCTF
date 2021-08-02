<!DOCTYPE html>
<html lang="en">
<head>
  <title>Toronto</title>
	<meta name="author" content="" />
	<meta name="theme-color" content="#ff7a04" />
	<meta name="description" content="Train your skill with informatic challenges !" />
	<meta property="og:site_name" content="TorontoCTF" />
	<meta property="og:title" content="Informatic challenges" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://torontoctf.ddns.net/images/bg.png" />
	<meta property="og:url" content="https://torontoctf.ddns.net/member/" />
	<meta property="og:description" content="Train your skill with informatic challenges !" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  <?php
  // Initialize the session
  session_start();
   
  // Check if the user is already logged in, if yes then redirect him to welcome page
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      header("location: member/");
      exit;
  }
   
  // Include config file
  require_once "config.php";
   
  // Define variables and initialize with empty values
  $username = $password = "";
  $username_err = $password_err = $login_err = "";


  if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
      //your site secret key
      $secret = '6LcQIakbAAAAABWU497dlR0M7SSBYnBoiBejYE76';
      //get verify response data
      $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
      $responseData = json_decode($verifyResponse);
      if($responseData->success){
          // Check if username is empty
      if(empty(trim($_POST["username"]))){
          $username_err = "Please enter username.";
      } else{
          $username = trim($_POST["username"]);
      }
      
      // Check if password is empty
      if(empty(trim($_POST["password"]))){
          $password_err = "Please enter your password.";
      } else{
          $password = trim($_POST["password"]);
      }
      
            if(empty($username_err) && empty($password_err)){
          // Prepare a select statement
          $sql = "SELECT id, username, password FROM users WHERE username = ?";
          
          if($stmt = mysqli_prepare($link, $sql)){
              // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "s", $param_username);
              
              // Set parameters
              $param_username = $username;
              
              // Attempt to execute the prepared statement
              if(mysqli_stmt_execute($stmt)){
                  // Store result
                  mysqli_stmt_store_result($stmt);
                  
                  // Check if username exists, if yes then verify password
                  if(mysqli_stmt_num_rows($stmt) == 1){                    
                      // Bind result variables
                      mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                      if(mysqli_stmt_fetch($stmt)){

                          if(password_verify($password, $hashed_password)){

                              session_start();
                              // Store data in session variables
                              $_SESSION["loggedin"] = true;
                              $_SESSION["id"] = $id;
                              $_SESSION["username"] = $username;                            
                              
                              // Redirect user to welcome page
                              header("location: member/");
                              
                          } else{
                              // Password is not valid, display a generic error message
                              $login_err = "<h4 style='color:red;font-size:15px'>Username or password invalid</h4>";
                          }
                      }
                  } else{
                      // Username doesn't exist, display a generic error message
                      $login_err = "<h4 style='color:red;font-size:15px'>Username or password invalid</h4>";
                  }
              } else{
                  echo "Oops! Réessayez plus tard.";
              }

              // Close statement
              mysqli_stmt_close($stmt);
          }
      }
      // Close connection
      mysqli_close($link);

          $succMsg = 'Your contact request have submitted successfully.';
      }else{
          $errMsg = 'Robot verification failed, please try again.';
      }
    }else{
      $errMsg = 'Please click on the reCAPTCHA box.';
    }
  } 
  ?>
    
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <span class="login100-form-title p-b-26">
            Login
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <span class="txt1">
              Username
            </span>
            <input class="input100" type="text" name="username">
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">

            <span class="txt1">
              Password
            </span>
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button name="Login" class="login100-form-btn">
                Login
              </button>
            </div>
          </div>
          <br/><br/><div class="g-recaptcha" data-sitekey="6LcQIakbAAAAAJhCCZPg5v3WS2LGg1y-AD3ZLfIl"></div><br/><br/>
            <span class="txt1">
              Don’t have an account?
            </span>
            <a class="txt2" href="/register.php">
              Sign Up
            </a>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!--===============================================================================================-->
  <script src="https://www.google.com/recaptcha/api.js"></script>

</body>
</html>