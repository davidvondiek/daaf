<?php
 session_start();

	$GN = $_POST['GN'];
	$WW = $_POST['WW'];
	
$connection = mysqli_connect('localhost', 'root', 'usbw', 'loginsysteem'); 

$query = ("SELECT user_password FROM users
			WHERE user_name = '$GN'");

$result = mysqli_query($connection, $query);

if($rij = mysqli_fetch_assoc($result)) {
	$_SESSION['login'] = "ingelogd";
	header("Location:inlogsysteempo.php?sended");
	exit();
}else {
	header("Location:inlogsysteempo.php?wrongLogin");
	exit();
	
	
}

?>