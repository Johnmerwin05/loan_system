

      
<?php

 $conn=mysqli_connect("localhost","root","","scholar_registration");

 $Id = $_GET['Id'];

 
 $query = mysqli_query($conn, "INSERT INTO sched_applicant Select * FROM scholar_registration WHERE Id = '$Id'");
 $query = mysqli_query($conn, "DELETE FROM scholar_registration WHERE Id = '$Id'");
 
 echo "<script>window.location.href='../email.php?Id= $Id';</script>";
 
 
?>