<?php

$email = $_POST['email'];
$psw = $_POST ['psw'];
$psw2 = $_POST ['psw2'];

$conn = mysqli_connect('localhost', 'root', 'usbw', 'loginsysteem');

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { // ALS EMAIL NIET GOED IS:
	header("Location: registratie.php?email=fail");
	exit();
} else { // ALS EMAIL GOED IS:
	if($psw == $psw2) {
		
		$sql = "INSERT INTO users (user_name, user_password) VALUES ('$email', '$psw');";
		$result = mysqli_query($conn, $sql);
		
		header("Location: inlogsysteempo.php?actie=loggedin");
		exit();
		
	}	else {
		header("Location: registratie.php?ww=fail");
		exit();
	}
}


/*
if($psw==$psw2){
	header("Location: registratie.php?ww=good");
	exit();
}else {
	header("Location: registratie.php?ww=fail");
	exit();
}
*/


?>