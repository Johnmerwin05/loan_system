<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM loan_archive WHERE id = '$id'");

 header('location: ../loaner_archive.php?=1');

?>