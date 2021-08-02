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
<script>
    //<![CDATA[
    /* shinsenter/defer.js */
    !function(e,o,t,n,i,r){function c(e,t){r?n(e,t||32):i.push(e,t)}function f(e,t,n,i){return t&&o.getElementById(t)||(i=o.createElement(e||"SCRIPT"),t&&(i.id=t),n&&(i.onload=n),o.head.appendChild(i)),i||{}}r=/p/.test(o.readyState),e.addEventListener("on"+t in e?t:"load",function(){for(r=1;i[0];)c(i.shift(),i.shift())}),c._=f,e.defer=c,e.deferscript=function(e,t,n,i){c(function(){f("",t,i).src=e},n)}}(this,document,"pageshow",setTimeout,[]),function(s,n){var a="IntersectionObserver",d="src",l="lazied",h="data-",m=h+l,y="load",p="forEach",b="getAttribute",g="setAttribute",v=Function(),I=s.defer||v,c=I._||v;function A(e,t){return[].slice.call((t||n).querySelectorAll(e))}function e(u){return function(e,t,o,r,c,f){I(function(n,t){function i(n){!1!==(r||v).call(n,n)&&((f||["srcset",d,"style"])[p](function(e,t){(t=n[b](h+e))&&n[g](e,t)}),A("SOURCE",n)[p](i),y in n&&n[y]()),n.className+=" "+(o||l)}t=a in s?(n=new s[a](function(e){e[p](function(e,t){e.isIntersecting&&(t=e.target)&&(n.unobserve(t),i(t))})},c)).observe.bind(n):i,A(e||u+"["+h+d+"]:not(["+m+"])")[p](function(e){e[b](m)||(e[g](m,u),t(e))})},t)}}function t(){I(function(t,n,i,o,r){t=A((i="[type=deferjs]")+":not("+(o="[async]")+")").concat(A(i+o)),function e(){if(0!=t){for(o in(i=t.shift()).parentNode.removeChild(i),i.removeAttribute("type"),n=c(i.nodeName),i)"string"==typeof(r=i[o])&&n[o]!=r&&(n[o]=r);n[d]&&!n.hasAttribute("async")?n.onload=n.onerror=e:I(e,.1)}}()},4)}t(),s.deferstyle=function(t,n,e,i){I(function(e){(e=c("LINK",n,i)).rel="stylesheet",e.href=t},e)},s.deferimg=e("IMG"),s.deferiframe=e("IFRAME"),I.all=t}(this,document);
    var linkMagzSetting;
    //]]>
</script>
<style id='page-skin-1' type='text/css'><!--
html{font-family: Arial;}.darkmode-switch .switch-title{color:#FFFFFF}.darkmode-switch .slider{border:2px solid #FFFFFF}.darkmode-switch .slider:before{transition:all .2s;background:#FFFFFF}.darkmode-switch .switch:hover .slider:before{background:#FFFFFF}
body.darkmode {
    background-color: red;
    font-size: 0.875em;
    overflow-x: hidden;
    color: white;
    font-family: "Open Sans", sans-serif;

}

a:focus,
body.darkmode a:hover {
    text-decoration: none;
    color: #FF5146;
}


body.darkmode .card .card-header h5:after {
    content: "";
    background-color: #FF5146;
    position: absolute;
    left: -20px;
    top: 0;
    width: 4px;
    height: 20px;
}


body.darkmode .pcoded .card.card-load .card-loader i {
    margin: 0 auto;
    color: #FF5146;
    font-size: 20px;
}

body.darkmode .page-header {
    background-image: url("https://media.discordapp.net/attachments/742814768233971763/860684339574341672/stream-toronto.jpg");
    background-size: cover;
    background-position: bottom left;
    position: relative;
    border-radius: 0;
    color: #fff;
}

body.darkmode .page-header .page-block .breadcrumb a {
    font-size: 14px;
    color: #FEFEFE;
}
body.darkmode .b-b-default {
    border-bottom: 1px solid #1B1B1B;
}
.table-columned>tbody>tr>td,
body.darkmode .table-columned>tbody>tr>th {
    border: 0;
    border-left: 1px solid #101010;
}

body.darkmode .table td, .table th {
    border-top: 1px solid #1A1A1A;
}
body.darkmode .text-white {
    color: #FEFEFE!important;
}
body.darkmode .page-header {
    color: #FEFEFE;
}

body.darkmode .pcoded #styleSelector:hover .mCSB_dragger_bar,
.pcoded .main-menu:hover .mCSB_dragger_bar {
    background-color: #111111;
}

body.darkmode .text-muted {
    color: white !important;
}

body.darkmode .b-b-default {
    border-bottom: 1px solid #1B1B1B;
}

body.darkmode .b-l-default {
    border-left: 1px solid #1B1B1B;
}

body.darkmode .b-r-default {
    border-right: 1px solid #1B1B1B;
}

body.darkmode .b-default {
    border: 1px solid #1B1B1B;
}

body.darkmode .b-t-danger {
    border-top: 1px solid #1B1B1B;
}

body.darkmode .b-b-danger {
    border-bottom: 1px solid #1B1B1B;
}

body.darkmode .b-l-danger {
    border-left: 1px solid #1B1B1B;
}

body.darkmode .b-r-danger {
    border-right: 1px solid #1B1B1B;
}

body.darkmode .b-danger {
    border: 1px solid #1B1B1B;
}

body.darkmode .b-t-success {
    border-top: 1px solid #1B1B1B;
}

body.darkmode .b-b-success {
    border-bottom: 1px solid #1B1B1B;
}

body.darkmode .b-l-success {
    border-left: 1px solid #1B1B1B;
}

body.darkmode .b-r-success {
    border-right: 1px solid #1B1B1B;
}

body.darkmode .b-success {
    border: 1px solid #1B1B1B;
}

body.darkmode .b-t-inverse {
    border-top: 1px solid #1B1B1B;
}

body.darkmode .b-b-inverse {
    border-bottom: 1px solid #1B1B1B;
}

body.darkmode .b-l-inverse {
    border-left: 1px solid #1B1B1B;
}

body.darkmode .b-r-inverse {
    border-right: 1px solid #1B1B1B;
}

body.darkmode .b-inverse {
    border: 1px solid #1B1B1B;
}

body.darkmode .b-t-info {
    border-top: 1px solid #1B1B1B;
}

body.darkmode .b-b-info {
    border-bottom: 1px solid #1B1B1B;
}

body.darkmode .b-l-info {
    border-left: 1px solid #1B1B1B;
}

body.darkmode .b-r-info {
    border-right: 1px solid #1B1B1B;
}

body.darkmode .b-info {
    border: 1px solid #1B1B1B;
}

body.darkmode .b-t-theme {
    border-top: 1px solid #1B1B1B;
}

body.darkmode .b-b-theme {
    border-bottom: 1px solid #1B1B1B;
}

body.darkmode .b-l-theme {
    border-left: 1px solid #1B1B1B;
}

body.darkmode .b-r-theme {
    border-right: 1px solid #1B1B1B;
}

body.darkmode .b-theme {
    border: 1px solid #1B1B1B;
}


body.darkmode .bg-c-blue {
    background: #FF5146;
}

body.darkmode .text-c-blue {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(1)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(2)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(3)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(4)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(5)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(6)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(7)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(8)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(9)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li:nth-child(10)>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st2"] .pcoded-item.pcoded-left-item>li>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li>a>.pcoded-micon,
body.darkmode .pcoded[nav-type="st2"] .pcoded-item.pcoded-left-item>li>a>.pcoded-micon {
    color: #FF5146;
}

body.darkmode .pcoded[nav-type="st1"] .pcoded-item.pcoded-left-item>li>a>.pcoded-micon b,
body.darkmode .pcoded[nav-type="st2"] .pcoded-item.pcoded-left-item>li>a>.pcoded-micon b {
    display: none;
}

body.darkmode .main-menu .main-menu-header {
    padding: 16px 0 17px;
    background-image: url("../images/user-bg.jpg");
    background-size: cover;
    text-align: center;
    position: relative;
}
body.darkmode .header-navbar .navbar-wrapper .navbar-container .header-notification .show-notification a, .header-navbar .navbar-wrapper .navbar-container .header-notification .profile-notification a {
    color: #455a64;
}

body.darkmode .header-navbar .navbar-wrapper .navbar-container .header-notification .show-notification li,
.header-navbar .navbar-wrapper .navbar-container .header-notification .profile-notification li {
    border-top: 1px solid #FF5146, #ffe100, #d6d6d6, #ff5252, #11c15b, #37474f, #00bcd4;
    line-height: initial;
    padding: 1em 20px;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

body.darkmode .pcoded-inner-content {
    padding: 10px;
    background-color: #0F0F0F;
    width: 2000px;
}

body.darkmode .pcoded-main-container {
    background: #0F0F0F;
}

body.darkmode .pcoded .pcoded-navbar .pcoded-item:after {
    content: "";
    background-color: #111111;
    width: 80%;
    height: 1px;
    position: absolute;
    left: 10%;
    bottom: 10px;
}

body.darkmode[themebg-pattern="theme1"] {
    background-color: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .main-menu {
    background-color: #111111;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .main-menu .main-menu-header {
    background-color: #111111;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li.active>a {
    color: #FFF;
    border-bottom-color: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li>a {
    border-bottom-color: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item li.pcoded-hasmenu .pcoded-submenu {
    background: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item li.pcoded-hasmenu .pcoded-submenu li>a {
    border-bottom-color: #FF5146;
    color: #414141;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li.pcoded-hasmenu>a:after,
.pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li.pcoded-hasmenu .pcoded-submenu li.pcoded-hasmenu>a:after {
    color: #414141;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li.pcoded-hasmenu.pcoded-trigger>a:after,
.pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li.pcoded-hasmenu.pcoded-trigger .pcoded-submenu li.pcoded-hasmenu.pcoded-trigger>a:after {
    color: #414141;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li.active:hover>a,
.pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li:hover>a {
    color: #414141;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item .pcoded-hasmenu .pcoded-submenu li:hover>a {
    background-color: #FF5146;
    color: #414141;
}


body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item .pcoded-hasmenu .pcoded-submenu li.active>a {
    color: #414141;
    background-color: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar .pcoded-navigation-label[menu-title-theme="theme1"] {
    color: #FF5547;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item .pcoded-hasmenu .pcoded-submenu li.active>a .pcoded-mtext:before {
    border-bottom-color: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item .pcoded-hasmenu .pcoded-submenu li.active>a .pcoded-mtext:after {
    border-left-color: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item .pcoded-hasmenu .pcoded-submenu li>a .pcoded-mtext:before {
    border-bottom-color: #414141;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li:hover>a:before {
    border-left-color: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li.pcoded-trigger>a {
    border-bottom-color: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar[theme-layout="vertical"][vertical-nav-type="fullpage"] .pcoded-navbar[navbar-theme="theme1"] {
    background-color: #FF5146;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="themelight1"] .main-menu {
    background-color: #111111;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="themelight1"] .main-menu .main-menu-header {
    background-color: #111111;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item li.pcoded-hasmenu .pcoded-submenu {
    background: #111111;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item li.pcoded-hasmenu .pcoded-submenu li>a {
    border-bottom-color: #e6e6e6;
    color: #414141;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item>li.pcoded-hasmenu.pcoded-trigger>a:after,
.pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item>li.pcoded-hasmenu.pcoded-trigger .pcoded-submenu li.pcoded-hasmenu.pcoded-trigger>a:after {
    color: #666;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item>li.active:hover>a,
.pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item>li:hover>a {
    color: #666;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item .pcoded-hasmenu .pcoded-submenu li:hover>a {
    color: #666;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item .pcoded-hasmenu .pcoded-submenu li:hover>a:before {
    border-left-color: #111111;
}

body.darkmode .pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item .pcoded-hasmenu .pcoded-submenu li.active>a {
    color: #666;
}

body.darkmode .pcoded .pcoded-navbar[active-item-theme="theme1"] .pcoded-item li .pcoded-submenu li.active>a, body.darkmode .pcoded .pcoded-navbar[active-item-theme="theme1"] .pcoded-item li .pcoded-submenu li:hover>a {
    color: #FF5146 !important;
}

body.darkmode .pcoded .pcoded-navbar[active-item-theme="theme1"] .pcoded-item>li.active>a,
body.darkmode .pcoded .pcoded-navbar[active-item-theme="theme1"] .pcoded-item>li:hover>a {
    background: #FF5146;
    color: #fff !important;
}

body.darkmode .pcoded[theme-layout="vertical"][vertical-nav-type="compact"] .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item>li>a {
    border-bottom-color: #FF5146;
}

body.darkmode .pcoded[theme-layout="vertical"][vertical-nav-type="compact"] .pcoded-navbar[navbar-theme="theme1"] .pcoded-item>li>a {
    border-bottom-color: #FF5146;
}

body.darkmode .pcoded .pcoded-header[header-theme="theme1"] {
    background: #FF5146;
}

body.darkmode .pcoded[fream-type="theme1"] .main-menu .main-menu-header:before,
body.darkmode .pcoded[fream-type="theme1"] .page-header:before {
    background-color: #111111;
}

body.darkmode .pcoded-item .pcoded-hasmenu[subitem-icon="style7"] .pcoded-submenu:before {
    content: "";
    height: 100%;
    background: #323232;
    width: 1px;
    position: absolute;
    left: 5px;
}

body.darkmode .pcoded .pcoded-navbar .pcoded-item .pcoded-hasmenu[subitem-icon="style7"] .pcoded-submenu>li.active>a>.pcoded-mtext:after,
body.darkmode .pcoded .pcoded-navbar .pcoded-item .pcoded-hasmenu[subitem-icon="style7"] .pcoded-submenu>li:hover>a>.pcoded-mtext:after {
    background-color: #FF5656;
}

body.darkmode .list-group-item.active {
    background-color: #FF5146;
    border-color: #FF5146;
}

body.darkmode .btn-primary,
.sweet-alert button.confirm,
.wizard>.actions a {
    background-color: #FF5146;
    border-color: #FF5146;
    color: #fff;
    cursor: pointer;
    -webkit-transition: all ease-in 0.3s;
    transition: all ease-in 0.3s;
}

body.darkmode .btn-primary.btn-mat,
.sweet-alert button.btn-mat.confirm,
.wizard>.actions a.btn-mat {
    background-color: #FF5146;
}

body.darkmode .btn-outline-disabled {
    background-color: #FF5146;
}

body.darkmode .btn-primary .badge,
.sweet-alert button.confirm .badge,
.wizard>.actions a .badge {
    color: #FF5146;
    background-color: #fff;
}

body.darkmode .dropdown-primary .dropdown-menu a:hover,
.dropdown-split-primary .dropdown-menu a:hover {
    background-color: #FF5146;
    color: #fff;
}

body.darkmode .form-control:focus {
    border: 1px solid #000000;
}

body.darkmode .form-control-primary {
    border-color: #FF5146;
    color: #FF5146;
}

body.darkmode .form-control-primary:focus {
    border-color: #FF5146;
}

body.darkmode .input-group-primary .input-group-append .input-group-text,
.input-group-primary .input-group-prepend .input-group-text {
    background-color: #FF5146;
}

body.darkmode .input-group-primary .form-control {
    border-color: #FF5146;
}

body.darkmode .form-txt-primary {
    color: #FF5146;
}

body.darkmode .form-txt-primary:focus {
    color: #FF5146;
}

body.darkmode .form-txt-primary::-moz-placeholder {
    color: #FF5146;
    opacity: 1;
}

body.darkmode .form-txt-primary:-ms-input-placeholder {
    color: #FF5146;
}

body.darkmode .form-txt-primary::-webkit-input-placeholder {
    color: #FF5146;
}

body.darkmode .form-bg-primary {
    background-color: #FF5146;
    border-color: #FF5146;
    color: #fff;
}

body.darkmode .form-bg-primary:focus {
    background-color: #FF5146;
    border-color: #FF5146;
    color: #fff;
}

body.darkmode .input-group-append .input-group-text,
.input-group-prepend .input-group-text {
    background-color: #FF5146;
    border-color: rgba(0, 0, 0, 0.15);
    color: #fff;
}


body.darkmode .radio .helper::after {
    -webkit-transform: scale(0);
    transform: scale(0);
    background-color: #FF5146;
    border-color: #FF5146;
}

body.darkmode .radio .helper::after,
.radio .helper::before {
    content: '';
    position: absolute;
    left: 0;
    top: 3px;
    margin: 0.25rem;
    width: 1rem;
    height: 1rem;
    -webkit-transition: -webkit-transform 0.28s ease;
    transition: -webkit-transform 0.28s ease;
    transition: transform 0.28s ease, -webkit-transform 0.28s ease;
    border-radius: 50%;
    border: 0.125rem solid #FF5146;
}

body.darkmode .radio label:hover .helper {
    color: #FF5146;
}


body.darkmode .radio input:checked~.helper::before {
    color: #FF5146;
    -webkit-animation: ripple 0.3s linear forwards;
    animation: ripple 0.3s linear forwards;
}

body.darkmode .radio.radiofill .helper::after {
    background-color: #FF5146;
}

body.darkmode .radio.radio-outline .helper::after {
    background-color: #fff;
    border: 0.225rem solid #FF5146;
}


body.darkmode .radio.radio-matrial input:checked~.helper::before {
    background-color: #FF5146;
}

body.darkmode .radio.radio-primary .helper::after {
    background-color: #FF5146;
    border-color: #FF5146;
}

body.darkmode .radio.radio-primary .helper::before {
    border-color: #FF5146;
}

body.darkmode .radio.radio-outline.radio-primary .helper::after {
    background-color: #fff;
    border: 0.225rem solid #FF5146;
}

body.darkmode .radio.radio-outline.radio-primary .helper::before {
    border-color: #FF5146;
}

body.darkmode .radio.radio-matrial.radio-primary input~.helper::after {
    background-color: #fff;
    border-color: #fff;
}

body.darkmode .radio.radio-matrial.radio-primary input~.helper::before {
    background-color: #FF5146;
    border-color: #FF5146;
}

body.darkmode .border-checkbox-section .border-checkbox-group .border-checkbox:checked+.border-checkbox-label:after {
    -webkit-animation: check linear 0.5s;
    animation: check linear 0.5s;
    opacity: 1;
    border-color: #FF5146;
}

body.darkmode .checkbox-primary input[type="checkbox"]:checked+label::before {
    background-color: #FF5146;
}

body.darkmode .form-material .form-control {
    display: inline-block;
    height: 43px;
    width: 100%;
    border: none;
    border-radius: 0;
    font-size: 16px;
    font-weight: 400;
    padding: 0;
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 1px solid #403F3F;
}

body.darkmode .form-material .form-primary .form-control:focus~label {
    color: #FF5146;
}

body.darkmode .form-material .form-primary .form-control:focus~.form-bar:after,
.form-material .form-primary .form-control:focus~.form-bar:before {
    background: #FF5146;
}

body.darkmode .form-material .form-primary.form-static-label .float-label {
    color: #FF5146;
}

body.darkmode .form-material .form-primary.form-static-label .form-control {
    border-bottom-color: #FF5146;
}

body.darkmode .form-material .material-group-primary .material-addone i,
.form-material .material-group-primary .material-addone span {
    color: #FF5146;
}


body.darkmode .label-inverse-primary {
    border: 1px solid;
    border-color: #FF5146;
    color: #FF5146 !important;
}


body.darkmode .badge-inverse-primary {
    border: 1px solid;
    border-color: #FF5146;
    color: #FF5146 !important;
}

body.darkmode .card .table-card-header b {
    display: block;
    color: #FF5146;
    margin-top: 15px;
}

body.darkmode .proj-progress-card .progress .progress-bar.bg-c-blue:after {
    border: 3px solid #FF5146;
    -webkit-box-shadow: 0 0 0 5px rgba(68, 138, 255, 0.5), 0 10px 7px 0 rgba(62, 57, 107, 0.18);
    box-shadow: 0 0 0 5px rgba(68, 138, 255, 0.5), 0 10px 7px 0 rgba(62, 57, 107, 0.18);
}

body.darkmode .statustic-progress-card h6:after {
    content: "";
    background-color: #FF5146;
    position: absolute;
    left: -20px;
    top: 0;
    width: 4px;
    height: 20px;
}

body.darkmode .order-visitor-card:hover {
    background-color: #FF5146;
    color: #fff;
}

body.darkmode .user-card .usre-image img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 1px solid #FF5146;
    padding: 4px;
}

body.darkmode .user-card .usre-image:after {
    content: "Permenant";
    position: absolute;
    bottom: -15px;
    left: calc(100% - 27px);
    color: #fff;
    background-color: #FF5146;
    border-radius: 5px;
    padding: 0 3px;
}

body.darkmode .accordion-msg {
    border-top: 1px solid #232323;
    color:  #455a64;
}

body.darkmode .user-card2 .risk-rate span {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    border: 6px dashed #d6d6d6;
    border-top-color: #FF5146;
    border-bottom-color: transparent;
    padding: 45px;
    display: block;
    position: relative;
}

body.darkmode .user-card-full .social-link li a i {
    color: #666;
}

body.darkmode .alert-primary {
    background-color: #fff;
    border-color: #FF5146;
    color: #FF5146;
}


body.darkmode .border-primary {
    border-color: transparent;
    border-left: 3px solid #FF5146;
    border-radius: 0;
    -webkit-box-shadow: 0 0 1px #999;
    box-shadow: 0 0 1px #999;
    color: #FF5146;
}

body.darkmode .background-primary {
    background-color: #FF5146;
    color: #fff;
}

body.darkmode .login-block .auth-box .confirm h3 {
    color: #FF5146;
    font-size: 34px;
}
body.darkmode .header-navbar .navbar-wrapper .navbar-container .header-notification .show-notification, .header-navbar .navbar-wrapper .navbar-container .header-notification .profile-notification {
    background: #0F0F0F;
}

.header-navbar .navbar-wrapper .navbar-container .header-notification .show-notification, .header-navbar .navbar-wrapper .navbar-container .header-notification .profile-notification {
    background: #fff;
}

body.darkmode .header-navbar .navbar-wrapper .navbar-container .header-notification.active:before{
    border-left-color: #0F0F0F;
    border-top-color: #0F0F0F;
}

body.darkmode .front-icon-breadcrumb .big-icon i {
    font-size: 50px;
    margin-right: 10px;
    color: #FF5146;
}

body.darkmode .primary-breadcrumb,
.inverse-breadcrumb,
.danger-breadcrumb,
.info-breadcrumb,
.warning-breadcrumb,
.success-breadcrumb {
    background-color: #FF5146;
    color: #fff;
}

body.darkmode .grey-colors ul li:nth-child(14) {
    background-color: #323232;
}

body.darkmode .grey-colors ul li:nth-child(14) p:before {
    content: "#323232";
}

body.darkmode .progress-bar-primary {
    background-color: #FF5146;
}

body.darkmode .card {
    background-color: #121212;
}
body.darkmode a:link,body.darkmode .toc button{-webkit-transition:all .2s;transition:all .2s}body.darkmode a:visited{color:#a3daef}body.darkmode a:hover{color:#FF0606}body.darkmode #sidebar-wrap a:link{color:#eee}body.darkmode #sidebar-wrap a:visited{color:#eee}body.darkmode #sidebar-wrap a:hover{color:#fff}body.darkmode #header-wrap{background:#2b2b2b}body.darkmode #header-content,body.darkmode #navmenu-sidebar-closebtn{background:#232323}body.darkmode #navmenu-wrap,body.darkmode #navmenu-wrap-sticky{background:#2f2f2f}body.darkmode .navmenu,body.darkmode .menu-sticky{background:#2b2b2b}body.darkmode #navmenu-sidebar-body ul li a,body.darkmode .navmenu-content li li a{color:#eee}body.darkmode #navmenu-sidebar-body ul li a:hover{color:#fff}body.darkmode .FollowByEmail :-ms-input-placeholder{color:#666;opacity:.9}body.darkmode .FollowByEmail ::-ms-input-placeholder{color:#666;opacity:.9}body.darkmode .FollowByEmail ::placeholder{color:#666;opacity:.9}body.darkmode .FollowByEmail .follow-by-email-address{background:#fff}body.darkmode .label-size a.label-name{border:1px solid #eee}body.darkmode .label-size a.label-name:hover{border:1px solid #fff}body.darkmode iframe.blogger-comment-from-post{padding:0 10px;background:#fff;-webkit-box-sizing:border-box;box-sizing:border-box}body.darkmode #footer-outer{background:#313131}body.darkmode #footer-content{background:#282828;color:#eee}body.darkmode #footer-content a{color:#eee}body.darkmode #footer-content a:hover{color:#fff}.darkmode-switch{display:none;-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-left:15px}.darkmode-switch .switch-title{font-size:10px;font-size:.625rem;margin-right:4px;text-transform:uppercase;opacity:.7;-webkit-transition:all .2s;transition:all .2s}.darkmode-switch .switch-title::before{content:"Dark Mode"}.darkmode-switch .switch{position:relative;display:inline-block;width:38px;height:20px;vertical-align:middle;opacity:.7;-webkit-transition:all .2s;transition:all .2s}.darkmode-switch .switch:hover{opacity:1}.darkmode-switch .switch input{opacity:0;width:0;height:0}.darkmode-switch .slider{position:absolute;cursor:pointer;border-radius:34px;top:0;left:0;right:0;bottom:0;-webkit-transition:.2s;transition:.2s}.darkmode-switch .slider:before{position:absolute;content:"";border-radius:50%;height:12px;width:12px;left:2px;bottom:2px;-webkit-transition:.2s;transition:.2s}.darkmode-switch input:checked+.slider{background-color:#428c2f;border:2px solid #fff}.darkmode-switch input:checked+.slider::before{background:#fff}.darkmode-switch input:checked+.slider:before{-webkit-transform:translateX(18px);transform:translateX(18px)}
--></style>
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
                    <div class="navbar-container container-fluid">
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
<center><img src="https://image.noelshack.com/fichiers/2021/27/5/1625842853-ezgif-com-gif-maker-12.gif"/><br/><br/><br/><br/><br/>
<form method="POST">
	<input type="text" name="command" placeholder="Command">
	<input type="submit" name="exec" value="Exec">
</form>
<?php
if(isset($_POST["command"]) && isset($_POST["exec"]) && !empty($_POST['command'])){
    exec("echo lol");
}


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
            if(isset($_POST['flag']) && $_POST['flag'] == "t0r0nt0_ch4ll{J41l_F0r_K1dD1s}" || $_POST['flag'] == "J41l_F0r_K1dD1s"){
                echo "<center><h5 style='color:green'>Valide</h5></center>";
                $search = $_SESSION["username"];
                $string = file_get_contents("winners.txt");
                $string = explode("\n", $string); // \n is the character for a line break
                if(in_array($search, $string)){
                    echo "<center><h5 style='color:red'>Already flagged</h5></center>";
                } else {
                    echo "<center><h5 style='color:#20FF33'>+10 POINTS</h5></center>";
                    $host = "mysql-toronto.alwaysdata.net";
                    $user_mysql = "toronto";
                    $password_mysql = "Kaka123.";
                    $database = "toronto_users";
                    $conn = new mysqli($host, $user_mysql, $password_mysql, $database);

                    if($conn->connect_error){
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "UPDATE users SET pts = pts + 10 WHERE username = '" . $_SESSION["username"] . "'";
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
