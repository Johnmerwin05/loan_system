<?php
session_start();

if ($_SESSION["status"] != true){

    header("Location: t/login.php");
}

?>

<?php

    function ordinal($number) 
    {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
        return $number. 'th';
        else
        return $number. $ends[$number % 10];
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
            display: inline-block; width:23.5%;
            color: #535353;
        }
        .form-group1 {
            display: inline-block; width:29.5%;
            color: #535353;
        }

        .form-group11 {
            display: inline-block; width:32.5%;
            color: #535353;
        }
        
        .form-group .cf-medium {
            width:100%;
            color: #535353;
        }

        .form_group label {
            display: block !important; 
            width: 100% !important;
            color: #535353;
        }

        .form-control {
            color: #4b4b4b;
        }

.header img{
    margin-left: 10%;
    margin-top: 5%;
    margin-bottom: -5%;

}

.header h5 {
    margin-left: 28%;
    font-size: 30px;
    margin-top: -10%;
}

.header h7 {
    margin-left: 40%;

}

.tab {
    margin-left: 100px;
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

<li class="nav-item">
    <a class="nav-link" href="archive.php">
        <i class="fas fa-fw fa-file"></i>
        <span>Archive</span></a>
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

                    <div class="modal-dialog" >
                <div  style="width: 165%; margin-left: -35%; color: #535353;">
                <div class="header">
                    <img src="img/logo.png" alt="" width="120">
                    <h5 class="modal-title" > JBM LENDING INVESTOR INC </h5>
                    <h7 class="modal-title"  > ILAGAN BRANCH </h7>
                </div>
                <?php
                $ticket = $_GET['ticket'];
                include 't/db_conn.php'; 
                //hostname, username, password, database name  
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

                        ?>
<div style="margin-top: 10%; font-size: 15px; margin-left: 5%;">

<div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Name:</p>
        <p style="font-weight: 800;"><?= $data['name']; ?></p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Age:</p>
        <p style="font-weight: 800;"><?= $data['age']; ?></p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Amount Borrowed:</p>
        <p style="font-weight: 800;">₱<?= number_format($data['amount'], 2, ".", ",") ?></p>
    </div>


</div>
<?php
                    }
                }

?>
<?php
                $ticket = $_GET['ticket'];
                include 't/db_conn.php'; 
                //hostname, username, password, database name  
                if ($conn) {

                    //echo "Connection successfully";  
                }else{  
                    echo "Error";  
                }  
                $query="SELECT * from loans WHERE ticket = '$ticket'";  
                $connect=mysqli_query($conn,$query);  
                $num=mysqli_num_rows($connect);



                if ($num > 0) {
                    while ($data = mysqli_fetch_assoc($connect)) {
                        $number = $data['plan'];
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

                        $date = $data['released']; 
                        $day = date('d', strtotime($date));
                        $gga = ordinal($day);

                        $total_amount = ($data['Int_amount'] + $data['month_amount']) * $data['plan'];

                        ?>

<div style=" font-size: 15px; margin-left: 5%;">

<div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Date released:</p>
        <p style="font-weight: 800;"><?= $data['released']; ?></p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Plan:</p>
        <p style="font-weight: 800;"><?= implode(' ', $output); ?></p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Payment due date:</p>
        <p style="font-weight: 800;">Every <?= $gga?> of months</p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Interest:</p>
        <p style="font-weight: 800; color: #a52a2a;">₱<?= $data['Int_amount']; ?></p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Penalty:</p>
        <p style="font-weight: 800; color: #a52a2a;">₱<?= $data['pe_amount']; ?></p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Monthly:</p>
        <p style="font-weight: 800; color: #a52a2a;">₱<?= $data['Int_amount'] + $data['month_amount']; ?></p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Total amount:</p>
        <p style="font-weight: 800; color: #66CDAA;">₱<?= number_format($total_amount, 2, ".", ",")  ?></p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Total paid:</p>
        <?php
        $query="SELECT SUM(amount_payment) AS value_sum FROM payment WHERE ticket = '$ticket'";  
        $connect=mysqli_query($conn,$query);  
        $num=mysqli_num_rows($connect);

        if ($num > 0) {
            while ($data = mysqli_fetch_assoc($connect)) {
                $sum = $data['value_sum'];
            }
        }

        ?>
        <p style="font-weight: 800; color: #66CDAA;">₱<?= number_format($sum, 2, ".", ",")  ?></p>
    </div>

    <div style="margin-left: 7em; display: flex;">
        <p style="margin-right: 2%;">Remaining balance:</p>
        <p style="font-weight: 800; color: #66CDAA;">₱<?= number_format($total_amount - $sum, 2, ".", ",")  ?></p>
    </div>


</div>

<?php
                    }
                }

?>
            </div>
        </div>

        <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Payments History</h6>                            
    </div>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
            
                <thead>
                    <tr>
                    <th>ID no.</th>
                        <th>Ticket</th>
                        <th>Payee</th>
                        <th>Payment status</th>
                        <th>Penalty</th>
                        <th>Total payment</th>
                        <th>Status</th>
                        
                    </tr>
                </thead>
            <?php 
            $bill = 1;
            include 't/db_conn.php';
            //hostname, username, password, database name  
            if ($conn) {

                //echo "Connection successfully";  
            }else{  
                echo "Error";  
            }  
            $query="SELECT * from payment WHERE ticket = '$ticket'";  
            $connect=mysqli_query($conn,$query);  
            $num=mysqli_num_rows($connect);
             
                                
                                
                            if ($num>0) {  
                                while($data=mysqli_fetch_assoc($connect)){
                
                                    
                                    
                                    ?>

                                        <tr style="font-size: 14px;color: #2B547E;font-weight:bold;padding-left: 15%;">  
                                        <td style="white-space:nowrap"><?= $bill++; ?></td>
                                        <td style="white-space:nowrap"><?= $data['ticket']; ?></td>
                                        <td style="white-space:nowrap"><?= $data['payee']; ?></td>
                                        <td style="white-space:nowrap"><?= $data['payments'];?></td>
                                        <td style="white-space:nowrap">₱ <?= $data['pet']; ?></td>
                                        <td style="color: #c5396c;white-space:nowrap">₱ <?=  $data['total'];?></td>
                                        <td style="text-align: center;white-space:nowrap"><button class="pending">Paid</button></td>

                                     <?php
                                        
                                }  
                            }  
                    ?>  
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
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
                    <a class="btn btn-primary" href="t/logout.php">Logout</a>
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