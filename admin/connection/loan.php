<?php


   include '../t/db_conn.php';
       
   
       if(isset($_POST['submit']))
       {
           $ticket = $_POST["ticket"];

           if ($conn) {

            //echo "Connection successfully";  
            }else{  
                echo "Error";  
            }  
            $query="SELECT * from borrower WHERE ticket = '$ticket'";  
            $connect=mysqli_query($conn,$query);  
            $num=mysqli_num_rows($connect);



            if ($num > 0) {
                while ($data = mysqli_fetch_assoc($connect)) {

                $amount = $data['amount'];

                }
            }
           $plan = $_POST["plan"];

           if ($conn) {

            //echo "Connection successfully";  
            }else{  
                echo "Error";  
            }  
            $query="SELECT * from loan_plan WHERE months = '$plan'";  
            $connect=mysqli_query($conn,$query);  
            $num=mysqli_num_rows($connect);



            if ($num > 0) {
                while ($data = mysqli_fetch_assoc($connect)) {

                    $interest = $data['interest_percentage'];
                    $penalty = $data['penalty_rate'];

                }
            }


           $pe = floatval($penalty) / 100.00;
           $in = floatval($interest) / 100.00;
           $in1 = $amount * $in / $plan;
           $pe1 = $amount * $pe / $plan;
           $moo = $amount + $in1;
           $moo1 = $moo / $plan;

           $int_amount = number_format((float)$in1, 2, '.', '');
           $pe_amount = number_format((float)$pe1, 2, '.', '');
           $month_amount = round($moo1, 0);

           $query = "SELECT * FROM loans WHERE ticket = '{$ticket}'";

           $gg = mysqli_query($conn, $query);

           if ( mysqli_num_rows ( $gg ) > 0 )
                {
            
                    echo '<script type="text/javascript">'  ."alert('This Borrower already have loan')" .'</script>';
                    echo "<script type='text/javascript'>window.top.location='../loan_form.php';</script>"; 

            } else
                {
   
                $result = mysqli_query($conn,"INSERT into loans (ticket, amount, plan, interest, penalty, Int_amount, pe_amount, month_amount) values ('$ticket','$amount','$plan','$interest','$penalty','$int_amount','$pe_amount','$month_amount')");
                
        
                if($result)
                    {
                    
                    echo "<script type='text/javascript'>window.top.location='../loan.php';</script>"; exit;

                }else{

                    echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
                }
        
            }
        }


?>