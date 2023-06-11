<?php
session_start();

if ($_SESSION["status"] != true){

    header("Location: t/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JBM LENDING INVESTOR INC</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){ 
        $('#button1').click(function(){ 
            alert($('#combo :selected').text());
        });
        });
    </script>


    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>

.pending {
font-size: 13px;
font-weight: bold;
padding-left: 10px;
padding-right: 10px;
border-radius: 10px;
border: none;
text-align: center;
background: #ff9800;
color: white;
}

.delete {
color: #E55451;
font-size: 22.5px;
margin-left: 2%
}
.view{
color: #2B547E;
font-size: 23px;
}
.approve {
color: #66CDAA;
font-size: 23px;
}

.delete:hover{
color: #BCC6CC;
}
.view:hover{
color: #BCC6CC;
}
.approve:hover{
color: #BCC6CC;
}
        .form-group {
            display: inline-block; width:24.5%;
        }
        .form-group1 {
            display: inline-block; width:29.5%;
        }
        
        .form-group .cf-medium {
            width:130%;
        }

        .form_group label {
            display: block !important; 
            width: 150% !important;
        }








    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- Sidebar -->
         <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-hand-holding-usd"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Jbm lending INVESTOR<sup>inc</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>


<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="loan.php">
        <i class="fas fa-fw fa-sack-dollar"></i>
        <span>Loans</span></a>
</li>


<li class="nav-item">
    <a class="nav-link" href="payment.php">
        <i class="fas fa-fw fa-wallet"></i>
        <span>Payments</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="plan.php">
    <i class="fas fa-fw fa-piggy-bank"></i>
        <span>Loan Plans</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="types.php">
        <i class="fas fa-fw fa-file-invoice"></i>
        <span>Loan Types</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="admins.php">
        <i class="fas fa-fw fa-lock"></i>
        <span>Admins</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>






</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Loan</h1>

                    <div class="modal-dialog" >
                <div class="modal-content" style="width: 200%; margin-left: -50%;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" > Loan Borrowers Information </h5>
                </div>

                <form method="POST" action="connection/loan.php" enctype="multipart/form-data">

                        <div class="modal-body">
                        <h6 class="modal-title" style="margin-bottom: 2%; color: #716f6f; font-weight: bolder; "> I. IMPORMASYON NG IYONG HIHIRAMIN</h6>                   

                        <div class="form-group mr-5 ml-5">
                        <label> Ticket no </label>
                        <select class="form-control" id="ticket" name="ticket">
                        <option selected="true" disabled="disabled">Pumili ng Ticket no</option>   
                        <?php

                        include 't/db_conn.php';
                        if ($conn) {

                                            //echo "Connection successfully";  
                        }else{  
                            echo "Error";  
                        }  
                        $sql = "SELECT * FROM borrower";
                        $result = $conn->query($sql);
                        $options =array();
                        while($row=mysqli_fetch_array($result))
                            {    
                                $options[] =$row;    
                            }
                                                                                
                            ?>
                        <?php
                            foreach($options as $option):
                            echo '<option value ="'.$option['ticket'].' "> '.$option['ticket'].' </option>';
                            endforeach;
                        ?> 
                        </select>
                        </div>



                        <div class="form-group1">
                        <label> Plan </label>
                        <select class="form-control" aria-label="Default select example" name="plan">
                        <option selected="true" disabled="disabled">Pumili ng Plan</option>   
                        <?php

                        include 't/db_conn.php';
                        if ($conn) {

                                            //echo "Connection successfully";  
                        }else{  
                            echo "Error";  
                        }  
                        $sql = "SELECT * FROM loan_plan";
                        $result = $conn->query($sql);
                        $options =array();
                        while($row=mysqli_fetch_array($result))
                            {    
                                $options[] =$row;    
                            }
                                                                                
                            ?>
                        <?php

                                foreach($options as $option):

                                    $number = $option['months'];

                                    $month = $number;
                                    $output    = [];
                                    $startDate = new DateTime();
                                    $endDate   = new DateTime('+' . $month . ' months');
        
                                    $interval  = $startDate->diff($endDate);
                                    $years     = $interval->format('%y');
                                    $months    = $interval->format('%m');
        
                                    if ($years > 0) {
                                        $output[] = $years > 1 ? $years . ' years' : $years . ' year';
                                    }
        
                                    if ($months > 0) {
                                        $output[] = $months > 1 ? $months . ' months' : $months . ' month';
                                    }

                                    echo '<option value ="'.$option['months'].'">'.implode(' ', $output).' </option>';
                                    endforeach;
                        ?> 
                        </select>
                        </div>

                        


                    <div class="modal-footer">
                        <a href="loan.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
            </div>
        </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Loan Management System 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../t/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>