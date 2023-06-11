<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM payment WHERE id = '$id'");

 header('location: ../payment.php?=1');

?>
