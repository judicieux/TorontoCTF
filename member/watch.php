<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login.php");
    exit;
}
$host = "mysql-toronto.alwaysdata.net";
$username = "toronto";
$password = "Kaka123.";
$db = "toronto_users";

$bdd = new mysqli($host, $username, $password, $db);

if($bdd->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="keywords" content="toronto, toronto-challs" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/stream-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!--===============================================================================================-->
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
  <link rel="stylesheet" type="text/css" href="/css/stream-main.css">
<!--===============================================================================================-->
</head>
<style>
body {
        font-family: Arial, sans-serif;
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
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a style="position:relative;top:15px" href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a style="position:relative;top:15px" href="#!" class="waves-effect waves-light">
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
                                            $sql = 'SELECT * FROM users WHERE id = 1';
                                            $result = mysqli_query($bdd, $sql);
                                            if (mysqli_num_rows($result)) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    if(!empty($row['avatar'])){
                                            ?>
                                            <img class="d-flex align-self-center img-radius" src="avatars/<?php echo $row['avatar']; ?>" alt="Generic placeholder image" width="50" height="40" style='object-fit: cover;'/>
                                            <?php
                                            } else {
                                            ?>
                                            <img class="d-flex align-self-center img-radius" src="avatars/default.png" alt="Generic placeholder image" width="50" height="40" />
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
                            <li style="position:relative;top:10px" class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <?php
                                    $sql = 'SELECT * FROM users WHERE id = ' . $_SESSION["id"];
                                    $result = mysqli_query($bdd, $sql);
                                    if (mysqli_num_rows($result)) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            if(!empty($row['avatar'])){
                                    ?>
                                    <img src="avatars/<?php echo $row['avatar']; ?>" class="img-radius" alt="User-Profile-Image" width="50" height="40" style='object-fit: cover;'/>

                                    <?php
                                    } else {
                                    ?>
                                    <img src="avatars/default.png" class="img-radius" alt="User-Profile-Image" width="50" height="40" />
                                    <?php
                                            }
                                        }
                                    }
                                    ?>                          
                                    <span><?php echo $_SESSION["username"]; ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.php">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="reset-password.php">
                                            <i class="ti-layout-sidebar-left"></i> Reset password
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

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <?php
                                    $sql = 'SELECT * FROM users WHERE id = ' . $_SESSION["id"];
                                    $result = mysqli_query($bdd, $sql);
                                    if (mysqli_num_rows($result)) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            if(!empty($row['avatar'])){
                                    ?>
                                    <img class="img-radius img-40 align-top m-r-15" src="avatars/<?php echo $row['avatar']; ?>" alt="User-Profile-Image" width="50" height="60" style='object-fit: cover;'/>
                                    <?php
                                    } else {
                                    ?>
                                    <img class="img-radius img-40 align-top m-r-15" src="avatars/default.png" alt="User-Profile-Image" width="50" height="60" />
                                    <?php
                                    }
                                    ?>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $_SESSION["username"]; ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.php"><i class="ti-user"></i>View Profile</a>
                                            <a href="reset-password.php"><i class="ti-layout-sidebar-left"></i>Reset password</a>
                                            <a href="/logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <form method="POST">
                                        <input type="text" name="search" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search user</label>
                                        </form>
<?php
$username = $_GET["search"];
if(!empty($_GET["search"])){
    $search = "SELECT id, username FROM users WHERE username = '" . $bdd->real_escape_string($username) . "'";
    $query = mysqli_query($bdd, $search);
    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_array($query)){
            echo "<script>window.location.href='user.php?id=" . $row["id"] . "'</script>";
        }
    }
}

?>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><img src="assets/images/home.png" width="20px" height="20px" /></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
<li class="">
                                    <a href="https://discord.gg/ypMqk5dg57" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><img src="https://seeklogo.net/wp-content/uploads/2018/10/discord-logo-1.png" width="20px" height="20px" /></span>
                                        <span class="pcoded-mtext">Discord</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <?php
                                $whitelist = array("g3zb0yy", "ret");
                                $sql = "SELECT username FROM users WHERE id = " . $_SESSION["id"];
                                $result = mysqli_query($bdd, $sql);
                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        foreach($whitelist as $value){
                                            if(in_array($value, $row)){
                                                echo "
                                                <li class=''>
                                                    <a href='logs.php' class='waves-effect waves-dark'>
                                                        <span class='pcoded-micon'><i class='ti-home'></i><b>D</b></span>
                                                        <span class='pcoded-mtext'>Logs</span>
                                                        <span class='pcoded-mcaret'></span>
                                                    </a>
                                                </li>
                                                ";
                                            }
                                        }
                                     }
                                }
                                ?>
                            </ul>
                            <div class="pcoded-navigation-label">Informatic</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="leaderboard.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><img src="assets/images/trophy.png" width="20px" height="20px" /></span>
                                        <span class="pcoded-mtext">Leaderboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><img src="assets/images/challenge.png" width="20px" height="20px" /></span>
                                        <span class="pcoded-mtext">Challenges</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="web.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Web</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       <li class="">
                                            <a href="cryptography.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Cryptography</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                          <li class=" ">
                                            <a href="forensic.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Forensic</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                           <li class=" ">
                                            <a href="hardware.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Hardware</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                          <li class=" ">
                                            <a href="misc.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">MISC</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                          <li class=" ">
                                            <a href="osint.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">OSINT</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="prog.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Programmation</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                           <li class=" ">
                                            <a href="pwn.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">pWn</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="re.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Reverse Engineering</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                         <li class=" ">
                                            <a href="steganography.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Steganography</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="web.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Web</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Tools</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="dblookup.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><img src="assets/images/searchbar.png" width="20px" height="20px" /></span>
                                        <span class="pcoded-mtext">Database Lookup</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="stream.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><img src="assets/images/clapperboard.png" width="20px" height="20px" /></span>
                                        <span class="pcoded-mtext">Streaming</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Other</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><img src="assets/images/adjust.png" width="20px" height="20px" /></span>
                                        <span class="pcoded-mtext">Other</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="/register.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Registration</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <h6 class="m-b-0">Welcome to Toronto</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="streaming.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <?php
                                            $anime = str_replace("/*", "", $_GET["anime"]);
                                            $anime_final = str_replace("*/", "", $anime);
                                            $sql = "SELECT title FROM " . $anime_final . " WHERE episode = 1";
                                            $query = mysqli_query($bdd, $sql);
                                            if(mysqli_num_rows($query)){
                                                while($row = mysqli_fetch_array($query)){

                                            ?>
                                            <li class="breadcrumb-item"><a href="#!"><?php echo $row["title"]; }}?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <center><img src="assets/images/flyer-streaming.gif"></center>
                            </div>
                        </div>
    
    <div class="container-login100">
      <div class="wrap-login100">
        <span class="login100-form-title p-b-26">
            <?php
                $anime = str_replace("/*", "", $_GET["anime"]);
                $anime_final = str_replace("*/", "", $anime);

                $sql = "SELECT title, episode, url, MAX(episode) AS last_episode FROM " . $bdd->real_escape_string($anime_final) . " WHERE episode = '" . $bdd->real_escape_string($_GET["episode"]) . "'";
                $query = mysqli_query($bdd, $sql);
                if(isset($_GET["anime"])  && isset($_GET["episode"])){
                    if(mysqli_num_rows($query)){
                        while($row = mysqli_fetch_array($query)){
                            if(isset($_GET["anime"]) && ($_GET["episode"])){
                                if($_GET["episode"] <= $row["last_episode"]){
                                    echo $row["title"];
                            echo '</span><span class="login100-form-title p-b-26">Episode ' . $row["episode"] . "<br/></span>";
                                    echo '<center><iframe class="iframelol" width="640" height="360" src="' . $row["url"] . '" frameborder="0" allowfullscreen></iframe></center><br/>';
                                }
                            }
                        }
                    }
                }
            ?>


    <?php
        $sql2 = "SELECT MAX(episode) AS last_episode FROM " . $bdd->real_escape_string($anime_final);
        $query2 = mysqli_query($bdd, $sql2);
        if(isset($_GET["anime"])  && isset($_GET["episode"])){
            if(mysqli_num_rows($query2)){
                while($row = mysqli_fetch_array($query2)){ 
                    if(isset($_GET["anime"]) && isset($_GET["episode"])){
                        if($_GET["episode"] === "1"){
                            $episode = $_GET["episode"] + 1;
                            echo '<div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                  <div class="login100-form-bgbtn"></div>
                                  <button onclick="document.location=' . "'" . "watch.php?anime=" . $_GET["anime"] . "&episode=" . $episode . "'" . '" name="xxx" class="login100-form-btn">
                                    Prochain épisode
                                  </button>
                                </div>
                              </div>';
                        }
                        elseif($_GET["episode"] > $row["last_episode"]){
                            echo '';
                        }
                        elseif($_GET["episode"] !== $row["last_episode"] and $_GET["episode"] !== "1") {
                            $episode_min = $_GET["episode"] - 1;
                            $episode_max = $_GET["episode"] + 1;
                            echo '
                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                  <div class="login100-form-bgbtn"></div>
                                  <button onclick="document.location=' . "'" . "watch.php?anime=" . $_GET["anime"] . "&episode=" . $episode_max . "'" . '" name="xxx" class="login100-form-btn">
                                    Prochain épisode
                                  </button>
                                </div>
                              </div>
                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                  <div class="login100-form-bgbtn"></div>
                                  <button onclick="document.location=' . "'" . "watch.php?anime=" . $_GET["anime"] . "&episode=" . $episode_min . "'" . '" name="xxx" class="login100-form-btn">
                                    Épisode précedent
                                  </button>
                                </div>
                              </div>';
                        } else {
                            $episode = $_GET["episode"] - 1;
                            echo '<div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                  <div class="login100-form-bgbtn"></div>
                                  <button onclick="document.location=' . "'" . "watch.php?anime=" . $_GET["anime"] . "&episode=" . $episode . "'" . '" name="xxx" class="login100-form-btn">
                                    Épisode précedent
                                  </button>
                                </div>
                              </div>';
                        }
                    }
                }
            }
        }
?>

                                            <div class="col-xl-6 col-md-12">
                                                <div class="row">
 

                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main-body end -->
                    <div id="styleSelector">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
                content: function() {
                    return $('#primary-popover-content').html();
                }
            });
        });
    </script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>