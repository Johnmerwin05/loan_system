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

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="pending.php">
        <i class="fas fa-fw fa-clock"></i>
        <span>Pending Borrowers</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="borrower.php">
        <i class="fas fa-fw fa-person"></i>
        <span>Active Borrowers</span></a>
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
                <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapsecf"
                    aria-expanded="true" aria-controls="collapsecf">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Archive</span>
                </a>
                <div id="collapsecf" class="collapse" aria-labelledby="headingcf"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="borrower_archive.php">Borrowers archive</a>
                        <a class="collapse-item" href="loaner_archive.php">Loaners archive</a>
                    </div>
                </div>
            </li> 
            <li class="nav-item">
    <a class="nav-link" href="logs.php">
        <i class="fas fa-fw fa-pencil"></i>
        <span>Logs</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="activity.php">
        <i class="fas fa-fw fa-person"></i>
        <span>Activities</span></a>
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
                <div class="modal-content pl-5 pr-5" style="width: 165%; margin-left: -35%; color: #535353;">
                <div class="header">
                    <img src="img/logo.png" alt="" width="120">
                    <h5 class="modal-title" > JBM LENDING INVESTOR INC </h5>
                    <h7 class="modal-title"  > ILAGAN BRANCH </h7>
                </div>

                <form method="POST" action="connection/borrower.php" enctype="multipart/form-data">

                        <div class="modal-body">
                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> I. PERSONAL NA IMPORMASYON </h6>
                    
                        
                        <div class="form-group">
                            <label> Buong Pangalan </label>
                            <input type="text" name="name"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Halaga na Hihiramin </label>
                            <input type="text" name="amount"  class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                        </div>

                        <div class="form-group">
                        <label> Kasarian </label>
                        <select class="form-control" aria-label="Default select example" name="gender" required>
                        <option selected="true" disabled="disabled">Pumili ng kasarian</option>   
                        <option value="Babae">Babae</option>
                        <option value="Lalake">Lalake</option>
                        </select>
                        </div>

                        <div class="form-group">
                        <label> Civil Status </label>
                        <select class="form-control" aria-label="Default select example" name="civil" required>
                        <option selected="true" disabled="disabled">Pumili ng kasarian</option>   
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Seperated">Seperated</option>
                        <option value="Widowed">Widowed</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label> Kaarawan </label>
                            <input type="date" name="birthday"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Edad </label>
                            <input type="text" name="age"  class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                        </div>

                        <div class="form-group">
                            <label> Bilang ng anak </label>
                            <input type="text" name="anak"  class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                        </div>

                        <div class="form-group">
                            <label> Antas ng natapos </label>
                            <input type="text" name="study"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Tagal ng paninirahan </label>
                            <input type="text" name="paninirahan"  class="form-control" required>
                        </div>


                        <div class="form-group">
                        <label> Valid ID </label>
                        <select class="form-control" aria-label="Default select example" name="Valid" required>
                        <option selected="true" disabled="disabled">Pumili ng Valid ID</option>   
                        <option value="e-Card / UMID">e-Card / UMID</option>
                        <option value="Driver's License">Driver's License</option>
                        <option value="Passport">Passport</option>
                        <option value="SSS ID">SSS ID</option>
                        <option value="Voter's ID">Voter's ID</option>
                        <option value="Employee's ID">Employee's ID</option>
                        </select>
                        </div>

                        <div class="form-group">
                        <label> Upload Valid ID </label>
                        <input class="form-control" type="file" name="filename"  required/>
                        </div>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> II. CONTACT DETAILS</h6>

                        <div class="form-group">
                            <label> Lugar ng trabaho </label>
                            <input type="text" name="address"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Trabaho </label>
                            <input type="text" name="work"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Uri ng negosyo </label>
                            <input type="text" name="negosyo"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Home Phone no </label>
                            <input type="text" name="phone"  class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                        </div>

                        <div class="form-group">
                            <label> Mobile no </label>
                            <input type="text" name="mobile"  class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                        </div>

                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" name="email"  class="form-control" required>
                        </div>


                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> III. FAMILY BACKGROUND</h6>

                        <div class="form-group">
                            <label> Pangalan ng asawa </label>
                            <input type="text" name="asawa"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Trabaho ng asawa </label>
                            <input type="text" name="t_asawa"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Kaarawan ng asawa </label>
                            <input type="date" name="bday_asawa"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Mobile no </label>
                            <input type="text" name="mobile_asawa"  class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                        </div>

                        <div class="form-group">
                            <label> Tagal ng paninirahan </label>
                            <input type="text" name="paninirahan_asawa"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Lugar ng trabaho </label>
                            <input type="text" name="lugar_asawaa"  class="form-control" required>
                        </div>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> IV. ANG HALAGA NG AKING HINIHIRAM AY LUGOD KONG PINAG-IISIPAN AT NAKABASE SA PROGRAMA NG JBM LENDING INVESTOR INC. KAUGNAY NITO, BATID KO AND AKING OBLIGASYON SA PAGHUHULOG SA MGA SUMUSUNOD NA NA BAYARAN</h6>

                        <div class="form-group">
                            
                            <input type="text" name="principal"  class="form-control"  readonly>
                            <label> Principal </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="interest"  class="form-control"  readonly>
                            <label> Interest </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="saving"  class="form-control"  readonly>
                            <label> CBU/SAVINGS </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="hulog"  class="form-control"  readonly>
                            <label> Kabuuang Hulog </label>
                        </div>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> V. KATIBAYAN AT PANGAKO SA PAGBAYAD NG UTANG:</h6>
                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 12px;"> 1. Sa kabuuang halaga na tinanggap ko,Ako ay nangangako na magbayad sa JBM LENDING INVESTOR INC. sa halagang nakasaad sa ibaba.</h6>

                        <div class="form-group">
                            
                            <input type="text" name="p1"  class="form-control"  readonly>
                            <label> Pangalan </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="c1"  class="form-control"  readonly>
                            <label> Cycle </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="c2"  class="form-control"  readonly>
                            <label> Loan Applied </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="c11"  class="form-control"  readonly>
                            <label> Loan Approved </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="c123"  class="form-control"  readonly>
                            <label> Lagta </label>
                        </div>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 12px;"> 2. Sa anumang kapabayaan sa pagtupad ko sa kasunduang ito, ang kabuuang halaga ng pagkakautang ay kailangan mabayaran sa limang buwan (21 weeks) at kung pumalya man ako sa lingguhang hulog, nangangako akong mabayaran ang lahat ng utang sa JBM LIInc.<br><br>
                        3. Kung may pagkakataon na hindi mahulugan ang aking obligasyon at humantong sa pagka "past due" ng aking nahiram na pera, ako ay sumangsang-ayon na mapatawan ng 4% over due interest kada buwan at gamitin ang takdang halaga mula sa aking hulog sa CBU bilang pambayad sa utang na itinadhanang patakaran ng JBM LIInc.<br><br>
                        4. Pinatotohanan ko, nauunawaan at sinasang-ayunan ang mga alintuntunin at kasunduang nakapaloob dito, at nangangakong ako lang ang gagamit sa hiniram at hindi ipapagamit ang aking pangalan sa kahit kanino. <br><br>
                        5. Ang panagot sa katiyakan ng pangako aking pagbabayad sa pagkakautang kong ito ay mga sumusunod: lahat ng sipag puhunan at lagak - impok at iba pa kong ari-arian na nakasaad sa baba kung hindi pa sapat ang una: .</h6>

                        <div class="form-group1 mr-4">
                            <label> Mga Gamit sa Bahay </label>
                            <input type="text" name="gamit1"  class="form-control" required>
                            <input type="text" name="gamit2"  class="form-control" required>
                            <input type="text" name="gamit3"  class="form-control" required>
                        </div>
                        <div class="form-group1 mr-4">
                            <label> Tatak at Modelo/Serial no. </label>
                            <input type="text" name="s1"  class="form-control" required>
                            <input type="text" name="s2"  class="form-control" required>
                            <input type="text" name="s3"  class="form-control" required>
                        </div>
                        <div class="form-group1">
                            <label> Estimated Value </label>
                            <input type="text" name="v1"  class="form-control" required>
                            <input type="text" name="v2"  class="form-control" required>
                            <input type="text" name="v3"  class="form-control" required>
                        </div>
                        <br><br>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 12px;"> Ang mga pag-aari o appliances ko na ito ay boluntaryo kong isusurender sa JBM LIInc. kung sakaling hindi ko mabayaran ang aking loan payment sa takdang araw ng aking pagbabayad.</h6>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 12px;">6. Na kung sakali man ang aking pinag kakautangan ay humantong sa pagsasampa ng kaso laban sa akin upang mabayaran ang aking utang, at umabot sa kamay at kustodiya ng isang abogado para kulektahin ang aking pagkakautang, Ako bilang gumagawa ng "Promissory Note" na ito ay siyang sasagot sa attorney's fee.</h6>


                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 15px;">SA KATUNAYAN NG LAHAT, ako ay lumagda at nagtatak ng aking selyong pangnotaryo, ngayon ika<span class="tab"></span>ng <span class="tab"></span> dito sa Ilagan City.</h6>

                        <br>
                        <div class="form-group11">
                            <input type="text" name="lugar_asawa"  class="form-control" readonly>
                            <label style="font-size: 15px;"> Lagta at pangalan ng humiram</label>
                        </div>
                        <div class="form-group11">
                            <input type="text" name="lugar_asawa"  class="form-control" readonly>
                            <label style="font-size: 15px;"> Lagta at pangalan ng Asawa</label>
                        </div>
                        <div class="form-group11">
                            <input type="text" name="lugar_asawa"  class="form-control" readonly>
                            <label style="font-size: 15px;"> Lagta at pangalan ng Co-marker</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="borrower.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

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