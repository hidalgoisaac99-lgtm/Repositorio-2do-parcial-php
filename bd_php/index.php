<?php
session_start();

if (isset($_SESSION["usuario"])){
    header("Location: dashboar.php");
    exit;
}

header("Location: login.php");
exit;
?>