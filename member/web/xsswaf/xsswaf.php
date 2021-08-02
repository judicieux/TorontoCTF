<?php
// Initialize the session
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login.php");
    exit;
} 

?>
<?php
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $block = '!(sqlidumper|sqlmap)!i';
    if (preg_match($block, $_SERVER['HTTP_USER_AGENT'])) {
        header("location: /login.php");
    }
}
?>
<?php
	$host = "mysql-blindbased.alwaysdata.net";
	$user_mysql = "232012";
	$password_mysql = "Kaka123.";
	$database = "blindbased_blindbased";
	$conn = mysqli_connect($host, $user_mysql, $password_mysql, $database);
	mysqli_set_charset($conn, "utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Toronto</title>
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
                                    $host = "mysql-toronto.alwaysdata.net";
                                    $username = "toronto";
                                    $password = "Kaka123.";
                                    $db = "toronto_users";

                                    $bdd = new mysqli($host, $username, $password, $db);

                                    if($bdd->connect_error){
                                        die("Connection failed: " . $conn->connect_error);
                                    }

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
<br/>

<img src="https://images-ext-1.discordapp.net/external/XFa5ZzRJNzl347X3ziJj0VzJeMwWw1N2WzFxFKICxfY/https/media.discordapp.net/attachments/783082168275959869/809790788681728000/image4.gif"><br>
<?php
if(isset($_GET['OAErrorDetailPage'])){
    if(!preg_match('/img|script|prompt|onerror/is', $_GET['OAErrorDetailPage'])){
        echo $_GET['OAErrorDetailPage'] . "<br/><h2 style='color:red'>try to pop alert()</h3>";
}
    else{
        echo '<h1 style="color:yellow">DrabWAF got you !</h1><br><img src="https://image.noelshack.com/fichiers/2021/03/3/1611156626-you-41af71-867945.jpg"';}}

unset($_GET['OAErrorDetailPage']);
if(count($_GET)){ 
    echo '<h1 style="color:yellow">Mauvais paramètre !</h1><br><img src="https://image.noelshack.com/fichiers/2021/03/3/1611156626-you-41af71-867945.jpg"';}
?>
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
            if(isset($_POST['flag']) && $_POST['flag'] == "t0r0nt0_ch4ll{XSS_w4f_byp4ss3D}" || $_POST['flag'] == "XSS_w4f_byp4ss3D"){
                echo "<center><h5 style='color:green'>Valide</h5></center>";
                $search = $_SESSION["username"];
                $string = file_get_contents("winners.txt");
                $string = explode("\n", $string); // \n is the character for a line break
                if(in_array($search, $string)){
                    echo "<center><h5 style='color:red'>Already flagged</h5></center>";
                } else {
                    echo "<center><h5 style='color:#20FF33'>+25 POINTS</h5></center>";
                    $host = "mysql-toronto.alwaysdata.net";
                    $user_mysql = "toronto";
                    $password_mysql = "Kaka123.";
                    $database = "toronto_users";
                    $conn = new mysqli($host, $user_mysql, $password_mysql, $database);

                    if($conn->connect_error){
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "UPDATE users SET pts = pts + 25 WHERE username = '" . $_SESSION["username"] . "'";
                    $result = $conn->query($sql); 
                    $file = fopen("winners.txt", "a+") or die("Unable to open file!");
                    $username = $_SESSION["username"] . "\n";
                    fwrite($file, $username);
                }
            } else {
                echo "<center><h5 style='color:red'>Invalide</h5></center>";
            }}
        ?>


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



<!-- 

- toc toc
- tu n'as pas oublié le common.txt ?

-->