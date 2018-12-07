 <!DOCTYPE html>
<html>
<head>
		<title>inlogpagina</title>
		<link rel="stylesheet" type="text/css"  href="danielsmoeder.css">
</head>
<body>

<a href="inlogsysteempo.php" class="buttonstartpagina">Terug naar startpagina</a>
<br>
<br>
<hr>
<form action="inloggenFormulier.php" method="post">

 <label for="email"><h4>Email</h4></label>
     <input type="text" placeholder="Email" name="GN" required>

<!--Email: <input type="text" name="GN"><br>-->

 <label for="psw"><h4>Wachtwoord</h4></label>
    <input type="password" placeholder="Wachtwoord" name="WW" required>
	
<!--Wachtwoord: 	<input type="password" name="WW"><br>-->
<br>
<br>
<div>
				<input type="submit" name="submit" value="versturen" class="buttonleft">
</form>
				</div>
<?php
//include "inloggenp.php"		; 	
//include "registreren.php"	;
session_start();
if(isset($_SESSION['login'])) {
	echo $_SESSION['login'];
}


?>

</body>
</html>
   
        
       
   