<?php
session_start();
$ticket = $_GET['ticket'];
include '../t/db_conn.php';

if(empty($_SESSION['name']))
{
    header("Location: t/login.php");
    die("Redirecting to login.php");
}

 
$logedInUsername = $_SESSION['name'];

$query="SELECT * from admins WHERE name = '$logedInUsername'";  
$connect=mysqli_query($conn,$query);  
$num=mysqli_num_rows($connect);




if ($num > 0) {
    while ($data = mysqli_fetch_assoc($connect)) {
        $lvl = $data['level'];

    }
}
$activity = "Confirmed the information of " . $ticket;


 
 $query = mysqli_query($conn, "INSERT INTO borrower SELECT * FROM pending WHERE ticket = '$ticket'");
 $query = mysqli_query($conn, "DELETE FROM pending WHERE ticket = '$ticket'");
 $query = mysqli_query($conn, "INSERT INTO activity(name, level, activity) VALUES ('$logedInUsername', '$lvl', '$activity')");
 
 header('location: ../pending.php?=1');
 
 
?>