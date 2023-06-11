<?php
//error_reporting(0);

$msg = "";

$pages = range(10000,100000);
// Shuffle numbers
shuffle($pages);
// Get a page
$page = array_shift($pages);

include '../t/db_conn.php';

// If upload button is clicked ...
if (isset($_POST['submit'])) {

	$filename = $_FILES["filename"]["name"];
	$tempname = $_FILES["filename"]["tmp_name"];
	$folder = "./image/" . $filename;

    $ticket = $page;
    $name = $_POST["name"];
    $amount = $_POST["amount"];
    $gender = $_POST["gender"];
    $civil = $_POST["civil"];
    $birthday = $_POST["birthday"];
    $age = $_POST["age"];
    $anak = $_POST["anak"];
    $study = $_POST["study"];
    $paninirahan = $_POST["paninirahan"];
    $address = $_POST["address"];
    $work = $_POST["work"];
    $phone = $_POST["phone"];
    $mobile = $_POST["mobile"];
    $negosyo = $_POST["negosyo"];
    $email = $_POST["email"];
    $asawa = $_POST["asawa"];
    $t_asawa = $_POST["t_asawa"];
    $bday_asawa = $_POST["bday_asawa"];
    $mobile_asawa = $_POST["mobile_asawa"];
    $paninirahan_asawa = $_POST["paninirahan_asawa"];
    $lugar_asawaa = $_POST["lugar_asawaa"];
    $Valid = $_POST["Valid"];
    $gamit1 = $_POST["gamit1"];
    $gamit2 = $_POST["gamit2"];
    $gamit3 = $_POST["gamit3"];
    $s1 = $_POST["s1"];
    $s2 = $_POST["s2"];
    $s3 = $_POST["s3"];
    $v1 = $_POST["v1"];
    $v2 = $_POST["v2"];
    $v3 = $_POST["v3"];

	$sql = "INSERT INTO borrower (filename, ticket, name, amount, gender, civil, birthday, age, anak, study, paninirahan, address, work, phone, mobile, negosyo, email, asawa, t_asawa, bday_asawa, mobile_asawa, paninirahan_asawa, lugar_asawaa, Valid, gamit1,gamit2,gamit3,s1,s2,s3,v1,v2,v3) VALUES ('$filename','$ticket','$name','$amount','$gender','$civil','$birthday','$age','$anak','$study','$paninirahan','$address','$work','$phone','$mobile','$negosyo', '$email' ,'$asawa','$t_asawa','$bday_asawa','$mobile_asawa','$paninirahan_asawa','$lugar_asawaa', '$Valid', '$gamit1', '$gamit2', '$gamit3', '$s1', '$s2', '$s3', '$v1', '$v2', '$v3')";

	mysqli_query($conn, $sql);

	if (move_uploaded_file($tempname, $folder)) {

		echo "<script type='text/javascript'>window.top.location='../../thanks.html';</script>"; exit;
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>