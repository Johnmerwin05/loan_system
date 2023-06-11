<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM loan_types WHERE id = '$id'");

 header('location: ../types.php?=1');

?>
