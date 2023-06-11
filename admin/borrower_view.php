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
            border: none; 
            border-width: 0; 
            box-shadow: none;
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

@media print{
    body *:not(#my-selection):not(#my-selection *){
        visibility: hidden;
        
    }
    #my-selection{
        margin-top: -15%;
    }

    @page { 
        size: auto;  
        margin: 0mm; 
        
    }
}







    </style>

</head>

<body id="page-top">

<div class="ml-5" style="margin-right: 73%; margin-top: 5%;">
<a href="borrower.php" class="hidden-print"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
<button type="submit" name="submit" class="btn btn-primary" onclick="window.print()">Print</button>
</div>

<section id="my-selection">

                <?php

                include 't/db_conn.php';

                $ticket = $_GET['ticket'];
                if ($conn) {

                    //echo "Connection successfully";  
                }else{  
                    echo "Error";  
                }  
                $query="SELECT * from borrower WHERE ticket = '$ticket'";  
                $connect=mysqli_query($conn,$query);  
                $num=mysqli_num_rows($connect);

                                    
                                    
                                if ($num>0) {  
                                    while($data=mysqli_fetch_assoc($connect)){

                ?>


                <div class="container-fluid">


                <div class="modal-dialog" >
                <div  style="width: 165%; margin-left: -30%; color: #535353;">
                <div class="header">
                    <img src="img/logo.png" alt="" width="120">
                    <h5 class="modal-title" > JBM LENDING INVESTOR INC </h5>
                    <h7 class="modal-title"  > ILAGAN BRANCH </h7>
                </div>
                <br>

                        <div class="modal-body">
                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> I. PERSONAL NA IMPORMASYON </h6>
                    

                        <input type="hidden" name="update_id" value="<?=$data['id'];?>">

                        <div class="form-group">
                            <label> Buong Pangalan </label>
                            <input type="text" name="name"  class="form-control" value="<?=$data['name'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Halaga na Hihiramin </label>
                            <input type="text" name="amount"  class="form-control" value="<?=$data['amount'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Kasarian </label>
                            <input type="text" name="gender"  class="form-control" value="<?=$data['gender'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Kasarian </label>
                            <input type="text" name="civil"  class="form-control" value="<?=$data['civil'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Kaarawan </label>
                            <input type="text" name="birthday"  class="form-control" value="<?=$data['birthday'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Edad </label>
                            <input type="number" name="age"  class="form-control" value="<?=$data['age'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Bilang ng anak </label>
                            <input type="number" name="anak"  class="form-control" value="<?=$data['anak'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Antas ng natapos </label>
                            <input type="text" name="study"  class="form-control" value="<?=$data['study'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Tagal ng paninirahan </label>
                            <input type="text" name="paninirahan"  class="form-control" value="<?=$data['paninirahan'];?>" readonly>
                        </div>


                        <div class="form-group">
                            <label> Valid ID </label>
                            <input type="text" name="Valid"  class="form-control" value="<?=$data['Valid'];?>" readonly>
                        </div>




                        
                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> II. CONTACT DETAILS</h6>
                        

                        <div class="form-group">
                            <label> Lugar ng trabaho </label>
                            <input type="text" name="address"  class="form-control" value="<?=$data['address'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Trabaho </label>
                            <input type="text" name="work"  class="form-control" value="<?=$data['work'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Uri ng negosyo </label>
                            <input type="text" name="negosyo"  class="form-control" value="<?=$data['negosyo'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Home Phone no </label>
                            <input type="number" name="phone"  class="form-control" value="<?=$data['phone'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Mobile no </label>
                            <input type="number" name="mobile"  class="form-control" value="<?=$data['mobile'];?>" readonly>
                        </div>

                        <div class="form-group1">
                            <label> Email </label>
                            <input type="text" name="email"  class="form-control" value="<?=$data['email'];?>" readonly>
                        </div>

                        
                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> III. FAMILY BACKGROUND</h6>
                        

                        <div class="form-group">
                            <label> Pangalan ng asawa </label>
                            <input type="text" name="asawa"  class="form-control" value="<?=$data['asawa'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Trabaho ng asawa </label>
                            <input type="text" name="t_asawa"  class="form-control" value="<?=$data['t_asawa'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Kaarawan ng asawa </label>
                            <input type="text" name="bday_asawa"  class="form-control" value="<?=$data['bday_asawa'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Mobile no </label>
                            <input type="text" name="mobile_asawa"  class="form-control" value="<?=$data['mobile_asawa'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Tagal ng paninirahan </label>
                            <input type="text" name="paninirahan_asawa"  class="form-control" value="<?=$data['paninirahan_asawa'];?>" readonly>
                        </div>

                        <div class="form-group">
                            <label> Lugar ng trabaho </label>
                            <input type="text" name="lugar_asawa"  class="form-control" value="<?=$data['lugar_asawaa'];?>" readonly>
                        </div>

                        
                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> IV. ANG HALAGA NG AKING HINIHIRAM AY LUGOD KONG PINAG-IISIPAN AT NAKABASE SA PROGRAMA NG JBM LENDING INVESTOR INC. KAUGNAY NITO, BATID KO AND AKING OBLIGASYON SA PAGHUHULOG SA MGA SUMUSUNOD NA NA BAYARAN</h6>

                        <div class="form-group">
                            
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label> Principal </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label> Interest </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label> CBU/SABINGS </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label> Kabuuang Hulog </label>
                        </div>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #292929; font-weight: bolder; "> V. KATIBAYAN AT PANGAKO SA PAGBAYAD NG UTANG:</h6>
                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 12px;"> 1. Sa kabuuang halaga na tinanggap ko,Ako ay nangangako na magbayad sa JBM LENDING INVESTOR INC. sa halagang nakasaad sa ibaba.</h6>

                        <div class="form-group">
                            
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label> Pangalan </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label> Cycle </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="lugar_asawa"  class="form-control" value="<?=$data['applied'];?>" readonly>
                            <label> Loan Applied </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label> Loan Approved </label>
                        </div>

                        <div class="form-group">
                            
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label> Lagta </label>
                        </div>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 12px;"> 2. Sa anumang kapabayaan sa pagtupad ko sa kasunduang ito, ang kabuuang halaga ng pagkakautang ay kailangan mabayaran sa limang buwan (21 weeks) at kung pumalya man ako sa lingguhang hulog, nangangako akong mabayaran ang lahat ng utang sa JBM LIInc.<br><br>
                        3. Kung may pagkakataon na hindi mahulugan ang aking obligasyon at humantong sa pagka "past due" ng aking nahiram na pera, ako ay sumangsang-ayon na mapatawan ng 4% over due interest kada buwan at gamitin ang takdang halaga mula sa aking hulog sa CBU bilang pambayad sa utang na itinadhanang patakaran ng JBM LIInc.<br><br>
                        4. Pinatotohanan ko, nauunawaan at sinasang-ayunan ang mga alintuntunin at kasunduang nakapaloob dito, at nangangakong ako lang ang gagamit sa hiniram at hindi ipapagamit ang aking pangalan sa kahit kanino. <br><br>
                        5. Ang panagot sa katiyakan ng pangako aking pagbabayad sa pagkakautang kong ito ay mga sumusunod: lahat ng sipag puhunan at lagak - impok at iba pa kong ari-arian na nakasaad sa baba kung hindi pa sapat ang una: .</h6>

                        <div class="form-group1 mr-4">
                            <label> Mga Gamit sa Bahay </label>
                            <input type="text" name="gamit1"  class="form-control" value="<?=$data['gamit1'];?>" readonly>
                            <input type="text" name="gamit2"  class="form-control" value="<?=$data['gamit2'];?>" readonly>
                            <input type="text" name="gamit3"  class="form-control" value="<?=$data['gamit3'];?>" readonly>
                        </div>
                        <div class="form-group1 mr-4">
                            <label> Tatak at Modelo/Serial no. </label>
                            <input type="text" name="s1"  class="form-control" value="<?=$data['s1'];?>" readonly>
                            <input type="text" name="s2"  class="form-control" value="<?=$data['s2'];?>" readonly>
                            <input type="text" name="s3"  class="form-control" value="<?=$data['s3'];?>" readonly>
                        </div>
                        <div class="form-group1">
                            <label> Estimated Value </label>
                            <input type="text" name="v1"  class="form-control" value="<?=$data['v1'];?>" readonly>
                            <input type="text" name="v2"  class="form-control" value="<?=$data['v2'];?>" readonly>
                            <input type="text" name="v3"  class="form-control" value="<?=$data['v3'];?>" readonly>
                        </div>
                        <br><br>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 12px;"> Ang mga pag-aari o appliances ko na ito ay boluntaryo kong isusurender sa JBM LIInc. kung sakaling hindi ko mabayaran ang aking loan payment sa takdang araw ng aking pagbabayad.</h6>

                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 12px;">6. Na kung sakali man ang aking pinag kakautangan ay humantong sa pagsasampa ng kaso laban sa akin upang mabayaran ang aking utang, at umabot sa kamay at kustodiya ng isang abogado para kulektahin ang aking pagkakautang, Ako bilang gumagawa ng "Promissory Note" na ito ay siyang sasagot sa attorney's fee.</h6>


                        <h6 class="modal-title" style="margin-bottom: 2%; color: #5f5f5f; font-weight: bolder; font-size: 15px;">SA KATUNAYAN NG LAHAT, ako ay lumagda at nagtatak ng aking selyong pangnotaryo, ngayon ika<span class="tab"></span>ng <span class="tab"></span> dito sa Ilagan City.</h6>

                        <br>
                        <div class="form-group11">
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label style="font-size: 15px;"> Lagta at pangalan ng humiram</label>
                        </div>
                        <div class="form-group11">
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label style="font-size: 15px;"> Lagta at pangalan ng Asawa</label>
                        </div>
                        <div class="form-group11">
                            <input type="text" name="lugar_asawa"  class="form-control" value="">
                            <label style="font-size: 15px;"> Lagta at pangalan ng Co-marker</label>
                        </div>

                        




                        

                    </div>

                    <?php
                                            }
                                        }

                    ?>

                </form>

            </div>
        </div>
    </div>
            </div>
</section>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        
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