<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.html?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.html?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM admins WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

			$name = $row['name'];
			$lvl = $row['level'];
            if ($row['user_name'] === $uname && $row['password'] === $pass && $row['level'] === 'Loan Officer') {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	$_SESSION["status"]= true;
				$sql2 = "INSERT INTO logs(user_name, password, name, level) VALUES('$uname', '$pass', '$name', '$lvl')";
           		$result2 = mysqli_query($conn, $sql2);
            	header("Location: ../officer/officer.php");
		        exit();		        
		        
            }else if ($row['user_name'] === $uname && $row['password'] === $pass && $row['level'] === 'Biller') {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	$_SESSION["status"]= true;
				$sql2 = "INSERT INTO logs(user_name, password, name, level) VALUES('$uname', '$pass', '$name', '$lvl')";
           		$result2 = mysqli_query($conn, $sql2);
            	header("Location: ../biller/index.php");
		        exit();		        
		        
            }else if ($row['user_name'] === $uname && $row['password'] === $pass && $row['level'] === 'Manager') {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	$_SESSION["status"]= true;
				$sql2 = "INSERT INTO logs(user_name, password, name, level) VALUES('$uname', '$pass', '$name', '$lvl')";
           		$result2 = mysqli_query($conn, $sql2);
            	header("Location: ../index.php");
		        exit();

			}else if ($row['user_name'] === $uname && $row['password'] === $pass && $row['level'] === 'Owner') {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				$_SESSION["status"] = true;
				$sql2 = "INSERT INTO logs(user_name, password, name, level) VALUES('$uname', '$pass', '$name', '$lvl')";
           		$result2 = mysqli_query($conn, $sql2);
				header("Location: ../index.php");
				exit();

			}else{
				header("Location: index.php?error=Incorect User name, User level or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name, User level or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}