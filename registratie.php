<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="danielsmoeder.css">
</head>

<form action="registratieverwerking.php" method="POST">
  <div class="container">
  <div class="registratietekst">
    <h4>Registreren</h4>
    <hr>

    <label for="email"><h4>Email</h4></label>
    <input type="text" placeholder="Email" name="email" required>

    <label for="psw"><h4>Wachtwoord</h4></label>
    <input type="password" placeholder="Wachtwoord" name="psw" required>

    <label for="psw2"><h4>Wachtwoord herhalen</h4></label>
    <input type="password" placeholder="Wachtwoord herhalen" name="psw2" required>
    <hr>

    <input type="submit" name="actie" value="Nieuw account maken" class="buttonregistreren">

  <div class="container signin">
  <div class="alingelogd">
    <h4>Heb je al een account? <a href="#">log in</a>.</h4>
	</div>
  </div>
  </div>
  </div>
</form>

<?php



if(isset($_GET['ww'])){	

 $ww = $_GET['ww'];
}

if(isset($_GET['ww'])) {

if ($ww == "fail") {
		echo '<div class="rood">Je wachtwoorden komen niet overeen!</div>';
		
} else if ($ww == "good") {
	echo '<div class="green">Je wachtwoorden komen overeen</div>';
}	else {
	print "error";
}
}

?>

</html>