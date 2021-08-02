<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: member/");
    exit;
} else {
    header("location: login.php");
}

?>