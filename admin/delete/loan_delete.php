<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "INSERT INTO loan_archive Select * FROM loans WHERE id = '$id'");
 $query = mysqli_query($conn, "DELETE FROM loans WHERE id = '$id'");

 header('location: ../loan.php?=1');

?>