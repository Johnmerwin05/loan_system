<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

@media only screen and (max-width: 600px) {
  .modal-dialog {
    width: 60%;
    margin-left: 22%;
    justify-content: center;
  }

  .header img{
    margin-left: 10%;
    width: 60px;

}

.header h5 {
    margin-left: 25%;
    font-size: 17px;
    margin-top: -10%;
}

.header h7 {
    margin-left: 41%;
    font-size: 10px;

}

.modal-body .modal-title{
    font-size: 13px;
    margin-top: 5%;
}

.form-group {
    display: inline-block; width:48.5%;
        }
.form-group1 {
    display: inline-block; width:48.5%;
        }
.form-group11 {
    display: inline-block; width:48.5%;
        }        
.pl-5 {
  padding: 0 !important;
}

.pr-5 {
  padding: 0 !important;
} 

.mr-4 {
    margin: 0 !important;
}

.form_group label {
    width: 50% !important;
    font-size: 10px;
        }

.form-group .cf-medium {
    width:50%;
    font-size: 10px;

        }        

}
    </style>

</head>

<body id="page-top">


                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="modal-dialog" >
                <div class="modal-content pl-5 pr-5" style="width: 165%; margin-left: -35%; color: #535353;">
                <div class="header">
                    <img src="img/logo.png" alt="" width="120">
                    <h5 class="modal-title" > JBM LENDING INVESTOR INC </h5>
                    <h7 class="modal-title"  > ILAGAN BRANCH </h7>
                </div>

                <form method="POST" action="officer/connection/borrower1.php" enctype="multipart/form-data">

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
                        <option value="UMID">UMID</option>
                        <option value="Drivers License">Driver's License</option>
                        <option value="Passport">Passport</option>
                        <option value="SSS ID">SSS ID</option>
                        <option value="Voters ID">Voter's ID</option>
                        <option value="Employees ID">Employee's ID</option>
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
                        <a href="index.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

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