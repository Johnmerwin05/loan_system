<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM activity WHERE id = '$id'");

 header('location: ../activity.php?=1');

?> 
