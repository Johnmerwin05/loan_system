<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM borrower WHERE id = '$id'");

 header('location: ../borrower.php?=1');

?>
