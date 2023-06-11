<?php


   include '../t/db_conn.php';
       
   
       if(isset($_POST['submit']))
       {
           $month = $_POST["month"];
           $interest = $_POST["interest"];
           $penalty = $_POST["penalty"];
   
           $result = mysqli_query($conn,"INSERT into loan_plan (months, interest_percentage, penalty_rate) values ('$month','$interest','$penalty')");
           
   
           if($result)
           {
               
               echo "<script type='text/javascript'>window.top.location='../plan.php';</script>"; exit;

           }
           else{
               echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
           }
   
       }


?>