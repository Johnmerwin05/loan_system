<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM logs WHERE id = '$id'");

 header('location: ../logs.php?=1');

?> 
