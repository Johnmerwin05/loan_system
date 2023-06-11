<?php
session_start();

if(empty($_SESSION['name']))
{
    header("Location: t/login.php");
    die("Redirecting to login.php");
}

$logedInUsername = $_SESSION['name'];
echo $logedInUsername;
?>