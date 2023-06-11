<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM borrower_archive WHERE id = '$id'");

 header('location: ../archive.php?=1');

?>
