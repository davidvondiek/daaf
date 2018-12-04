 <!DOCTYPE html>
<html>
<head>
		<title>inlogpagina</title>
		<link rel="stylesheet" type="text/css"  href="Danielsmoeder.css">
</head>
<body>

<form action="inloggenFormulier.php" method="post">

Gebruikersnaam: <input type="text" name="GN"><br>
Wachtwoord: 	<input type="password" name="WW"><br>
			
</form>
<hr>
<div>
				<input type="submit" name="submit" value="versturen" class="buttonstartpagina">
				</div>
<form action="uitloggen.php" method="post">
<input type="submit" name="submit" value="uitloggen" class="buttonstartpagina"><br>
</form>
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
   
        
       
   