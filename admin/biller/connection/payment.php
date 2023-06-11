<?php


include '../t/db_conn.php';
    

    if(isset($_POST['submit']))
    {
        $ticket = $_POST["ticket"];
        $payee = $_POST["payee"];
        $payments = $_POST["payments"];
        $amount_payment = $_POST["amount_payment"];
        $pet = $_POST["pet"];
        $total = $amount_payment + $pet;

        $result = mysqli_query($conn,"INSERT into payment (ticket, payee, amount_payment, pet, total, payments) values ('$ticket','$payee','$amount_payment','$pet','$total','$payments')");
        

        if($result)
        {
            
            echo "<script type='text/javascript'>window.top.location='../loan.php';</script>"; exit;

        }
        else{
            echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
        }

    }


?>