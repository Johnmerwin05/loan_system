    
<?php

 $conn=mysqli_connect("localhost","root","","scholar_registration");

 $Id = $_GET['Id'];

 
 $query = mysqli_query($conn, "INSERT INTO archive Select * FROM sched_applicant WHERE Id = '$Id'");
 $query = mysqli_query($conn, "DELETE FROM sched_applicant WHERE Id = '$Id'");
 
 header('location: ../confirm_booked.php?=1');
 

?>