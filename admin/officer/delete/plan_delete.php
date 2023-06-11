<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM loan_plan WHERE id = '$id'");

 header('location: ../plan.php?=1');

?>
