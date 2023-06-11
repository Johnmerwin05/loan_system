<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Information </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
</head>

    <style>
        .modal-dialog {
            display: flex;
            justify-content: center;
        }

        .form-group {
            display: inline-block; width:49%;
        }
        
        .form-group .cf-medium {
            width:130%;
        }

        .form_group label {
            display: block !important; 
            width: 150% !important;
        }


    </style>

<body>


<?php

$conn=mysqli_connect("localhost","root","","scholar_registration"); 

$Id = $_GET['Id'];
if ($conn) {

    //echo "Connection successfully";  
}else{  
    echo "Error";  
}  
$query="SELECT * from archive WHERE Id = '$Id'";  
$connect=mysqli_query($conn,$query);  
$num=mysqli_num_rows($connect);

                    
                    
                if ($num>0) {  
                    while($data=mysqli_fetch_assoc($connect)){

?>


        <div class="modal-dialog" role="document">
        <center>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" > Edit Applicant Information </h5>
                </div>

                <form action="edit_connect.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" value="<?=$data['Id'];?>">

                        <div class="form-group">
                            <label> Ticket </label>
                            <input type="text" name="fistname"  class="form-control" value="<?=$data['ticket'];?>">
                        </div>

                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="fistname"  class="form-control" value="<?=$data['firstname'];?>">
                        </div>

                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="lastname"  class="form-control" value="<?=$data['lastname'];?>">
                        </div>

                        <div class="form-group">
                            <label> Middle Name </label>
                            <input type="text" name="middlename"  class="form-control" value="<?=$data['middlename'];?>">
                        </div>

                        <div class="form-group">
                            <label> Place of birth </label>
                            <input type="text" name="placebirth"  class="form-control" value="<?=$data['placebirth'];?>">
                        </div>

                        <div class="form-group">
                            <label> Birthday </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['birthday'];?>">
                        </div>

                        <div class="form-group">
                            <label> Civil status </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['civil'];?>">
                        </div>

                        <div class="form-group">
                            <label> Course </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['course'];?>">
                        </div>

                        <div class="form-group">
                            <label> Year level </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['yearlvl'];?>">
                        </div>

                        <div class="form-group">
                            <label> school year </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['schoolyear'];?>">
                        </div>

                        <div class="form-group">
                            <label> Gender </label>
                            <input type="text" name="gender"  class="form-control" value="<?=$data['gender'];?>">
                        </div>

                        <div class="form-group">
                            <label> Status of Applicantion </label>
                            <input type="text" name="status_app"  class="form-control" value="<?=$data['status_app'];?>">
                        </div>

                        <div class="form-group">
                            <label> Barangay </label>
                            <input type="text" name="status_app"  class="form-control" value="<?=$data['brgy'];?>">
                        </div>

                        <div class="form-group">
                            <label> Municipality </label>
                            <input type="text" name="status_app"  class="form-control" value="<?=$data['city'];?>">
                        </div>

                        <div class="form-group">
                            <label> Province </label>
                            <input type="text" name="status_app"  class="form-control" value="<?=$data['provice'];?>">
                        </div>



                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" name="email"  class="form-control" value="<?=$data['email'];?>">
                        </div>

                        <div class="form-group">
                            <label> Age</label>
                            <input type="text" name="age"  class="form-control" value="<?=$data['age'];?>">
                        </div>

                        <div class="form-group">
                            <label> Phone Number </label>
                            <input type="text" name="phone"  class="form-control" value="<?=$data['phone'];?>">
                        </div>

                        <div class="form-group">
                            <label> Elementary </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['Elem'];?>">
                        </div>

                        <div class="form-group">
                            <label> Elem Honor's </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['honor1'];?>">
                        </div>

                        <div class="form-group">
                            <label> Elem Graduated </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['graduated1'];?>">
                        </div>

                        <div class="form-group">
                            <label> Junior high school </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['junior'];?>">
                        </div>

                        <div class="form-group">
                            <label> Junior honor's </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['honor2'];?>">
                        </div>

                        <div class="form-group">
                            <label> Junior Graduated </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['graduated2'];?>">
                        </div>

                        <div class="form-group">
                            <label> Senior high school </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['senior'];?>">
                        </div>

                        <div class="form-group">
                            <label> Senior honor's </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['honor3'];?>">
                        </div>

                        <div class="form-group">
                            <label> Senior Graduated </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['graduated3'];?>">
                        </div>

                        <div class="form-group">
                            <label> College school </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['college'];?>">
                        </div>

                        <div class="form-group">
                            <label> College honor's </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['honor4'];?>">
                        </div>

                        <div class="form-group">
                            <label> College Graduated </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['graduated4'];?>">
                        </div>

                        <div class="form-group">
                            <label> Father's Lastname </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['lastfather'];?>">
                        </div>

                        <div class="form-group">
                            <label> Father's First Name </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['firstfather'];?>">
                        </div>

                        <div class="form-group">
                            <label> Father's Middle Name </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['middlefather'];?>">
                        </div>

                        <div class="form-group">
                            <label> Father's Income </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['fincome'];?>">
                        </div>

                        <div class="form-group">
                            <label> Mother's Occupation </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['foc'];?>">
                        </div>

                        <div class="form-group">
                            <label> Mother's Lastname </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['lastm'];?>">
                        </div>

                        <div class="form-group">
                            <label> Mother's First Name </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['firstm'];?>">
                        </div>

                        <div class="form-group">
                            <label> Mother's Middle Name </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['middlem'];?>">
                        </div>

                        <div class="form-group">
                            <label> Mother's Income </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['mincome'];?>">
                        </div>

                        <div class="form-group">
                            <label> Mother's Occupation </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['moc'];?>">
                        </div>




                    </div>
                    <div class="modal-footer">
                        <a href="../archive.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>

                    </center>
                </form>

                <?php
                    }
                }

                ?>

            </div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


</body>
</html>