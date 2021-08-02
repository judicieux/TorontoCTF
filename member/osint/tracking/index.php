<?php
// Initialize the session
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login.php");
    exit;
}


$host = "mysql-unionbased.alwaysdata.net";
$user_mysql = "232013";
$password_mysql = "Kaka123.";
$database = "unionbased_unionbased";
$conn = new mysqli($host, $user_mysql, $password_mysql, $database);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Toronto</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="toronto, toronto-challs" />

    <!-- Favicon icon -->
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="../../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/jquery.mCustomScrollbar.css">
</head>
<style>
body {
    background-color:white;
}
</style>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="../../index.php">
                            <img class="img-fluid" src="../../assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                       <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <?php
                                            $host = "mysql-toronto.alwaysdata.net";
                                            $username = "toronto";
                                            $password = "Kaka123.";
                                            $db = "toronto_users";

                                            $bdd = new mysqli($host, $username, $password, $db);

                                            if($bdd->connect_error){
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            ?>

                                            <?php
                                            $sql = 'SELECT * FROM users WHERE id = 1';
                                            $result = mysqli_query($bdd, $sql);
                                            if (mysqli_num_rows($result)) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    if(!empty($row['avatar'])){
                                            ?>
                                            <img class="d-flex align-self-center img-radius" src="../../avatars/<?php echo $row['avatar']; ?>" alt="Generic placeholder image" width="50" height="40" />
                                            <?php
                                            } else {
                                            ?>
                                            <img class="d-flex align-self-center img-radius" src="../../avatars/default.png" alt="Generic placeholder image" width="50" height="40" />
                                            <?php
                                                    }
                                            ?>
                                            <div class="media-body">
                                                <h5 class="notification-user"><?php echo $row["username"]; ?></h5>
                                                <p class="notification-msg">Salut salut, première notif haha</p>
                                                <span class="notification-time">06/06/2021</span>
                                            </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <?php
                                    $sql = 'SELECT * FROM users WHERE id = ' . $_SESSION["id"];
                                    $result = mysqli_query($bdd, $sql);
                                    if (mysqli_num_rows($result)) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            if(!empty($row['avatar'])){
                                    ?>
                                    <img src="../../avatars/<?php echo $row['avatar']; ?>" class="img-radius" alt="User-Profile-Image" width="30" height="40" />
                                    <?php
                                    } else {
                                    ?>
                                    <img src="../../avatars/default.png" class="img-radius" alt="User-Profile-Image" width="30" height="40" />
                                    <?php
                                    }
                                    ?>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <span><?php echo $_SESSION["username"]; ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="../../user-profile.php">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="/logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/><br/><br/><br/><br/><br/>
<center>
<img src="https://cdn.discordapp.com/attachments/853381172959772672/857756054044934164/ezgif.com-gif-maker.gif"><br><br><br/><br/><br/><br/><br/>
<a href="Tracking"><button class="button button3">Download</button></a><br><br>
</center>
<style>
.button {
  background-color: #0B86EC;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<center>
<br/><br/><br/><br/>
<form method="POST">
    <input type="text" placeholder="t0r0nt0_ch4ll{flag}" name="flag" />
    <p class="p-container">
        <button name="submit" class="button">Submit flag</button>
    </p>
</form>
</center>
        <?php
        if(!empty(isset($_POST['submit']))){
            if(isset($_POST['flag']) && $_POST['flag'] == "t0r0nt0_ch4ll{tr4ck1n_br0}" || $_POST['flag'] == "tr4ck1n_br0"){
                echo "<center><h5 style='color:green'>Valide</h5></center>";
                $search = $_SESSION["username"];
                $string = file_get_contents("winners.txt");
                $string = explode("\n", $string); // \n is the character for a line break
                if(in_array($search, $string)){
                    echo "<center><h5 style='color:red'>Already flagged</h5></center>";
                } else {
                    echo "<center><h5 style='color:#20FF33'>+5 POINTS</h5></center>";
                    $host = "mysql-toronto.alwaysdata.net";
                    $user_mysql = "toronto";
                    $password_mysql = "Kaka123.";
                    $database = "toronto_users";
                    $conn = new mysqli($host, $user_mysql, $password_mysql, $database);

                    if($conn->connect_error){
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "UPDATE users SET pts = pts + 5 WHERE username = '" . $_SESSION["username"] . "'";
                    $result = $conn->query($sql); 
                    $file = fopen("winners.txt", "a+") or die("Unable to open file!");
                    $username = $_SESSION["username"] . "\n";
                    fwrite($file, $username);
                }
            } else {
                echo "<center><h5 style='color:red'>Invalide</h5></center>";
            }}
        ?>

<!-- Main-body end -->
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="../../assets/js/jquery/jquery.min.js "></script>
<script type="text/javascript" src="../../assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="../../assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../../assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Accordion js -->
<script type="text/javascript" src="../../assets/pages/accordion/accordion.js"></script>
<!-- Custom js -->
<script src="../../assets/js/pcoded.min.js"></script>
<script src="../../assets/js/vertical/vertical-layout.min.js"></script>
<script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../../assets/js/script.js"></script>
</body>

</html>
