<?php


   include '../t/db_conn.php';
       
   
       if(isset($_POST['submit']))
       {
           $type_name = $_POST["type_name"];
           $description = $_POST["description"];
   
           $result = mysqli_query($conn,"INSERT into loan_types (type_name, description) values ('$type_name','$description')");
           
   
           if($result)
           {
               
               echo "<script type='text/javascript'>window.top.location='../types.php';</script>"; exit;

           }
           else{
               echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
           }
   
       }


?>