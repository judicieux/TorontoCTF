<!DOCTYPE html>
<html lang="en">
<head>
  <title>Toronto</title>
  <meta charset="UTF-8">
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/css/util.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
// Initialize the session
session_start();
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
 
// Include config file
require_once "../config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
      //your site secret key
      $secret = '6LcsKkQbAAAAALqdtWicJxPh4vPcmFneVd975TGC';
      //get verify response data
      $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
      $responseData = json_decode($verifyResponse);
      if($responseData->success){
        // Validate new password
        if(empty(trim($_POST["new_password"]))){
            $new_password_err = '<div class="wrap-input100 validate-input" data-validate="Password must have atleast 6 characters">';     
        } elseif(strlen(trim($_POST["new_password"])) < 6){
            $new_password_err = '<div class="wrap-input100 validate-input" data-validate="Password must have atleast 6 characters">';
        } else{
            $new_password = trim($_POST["new_password"]);
        }
        
        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = '<div class="wrap-input100 validate-input" data-validate="Confirm password">';
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($new_password_err) && ($new_password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
        }
        
            // Check input errors before updating the database
            if(empty($new_password_err) && empty($confirm_password_err)){
                // Prepare an update statement
                $sql = "UPDATE users SET password = ? WHERE id = ?";
                
                if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
                    
                    // Set parameters
                    $param_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $param_id = $_SESSION["id"];
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Password updated successfully. Destroy the session, and redirect to login page
                        session_destroy();
                        header("location: login.php");
                        exit();
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
            // Close connection
            mysqli_close($link);
        }
      }
    }
?>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <span class="login100-form-title p-b-26">
            Change password
          </span>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="txt1">
              Password
            </span>
            <input class="input100" type="password" name="new_password">
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="txt1">
              Repeat password
            </span>
            <input class="input100" type="password" name="confirm_password">
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button name="Login" class="login100-form-btn">
                Change
              </button>
            </div>
          </div>

          <br/><br/><div class="g-recaptcha" data-sitekey="6LcsKkQbAAAAALOXPDf5aY4Y3-ko5F-8spfV1DnU"></div><br/><br/>
            <span class="txt1">
              Back to home?
            </span>
            <a class="txt2" href="index.php">
              Home
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