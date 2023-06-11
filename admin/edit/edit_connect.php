<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'scholar_registration');

$Id = $_GET['Id'];

    if(isset($_POST['updatedata']))
    {   
        $Id = $_POST['update_id'];
        $firstname = $_POST['fistname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $middlename = $_POST['middlename'];
        $placebirth = $_POST['placebirth'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $status_app = $_POST['status_app'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $provice = $_POST['provice'];

        $query = "UPDATE scholar_registration SET firstname='$firstname', lastname='$lastname', age='$age', phone='$phone', middlename='$middlename', placebirth='$placebirth', birthday='$birthday', gender='$gender', status_app='$status_app', email='$email', city='$city', provice='$provice' WHERE Id= '$Id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: ../tables.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>