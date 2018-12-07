<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="danielsmoeder.css">
</head>
<body>


<div class="kaas">
        <header class="main-head"></header>
		<div>
				<form action="uitloggen.php" method="post">
<input type="submit" name="submit" value="uitloggen" class="buttonleft">
</form>

<form action="inloggen.php" method="post">
<form action="registatie.php" method="post">
				<a href="registratie.php" class="buttonstartpagina">Registreren</a>
				<a href="inloggen.php" class="buttonstartpagina">Inloggen</a>
				<!--<input type="submit" name="registreren" href="registratie.php" value="Nieuw account maken" class="buttonstartpagina"> 
				<input type= "submit" name="inloggen" href="inloggen.php" value="Inloggen" class="buttonstartpagina">-->
</div>
</div>
</form>


<?php
session_start();
if(isset($_SESSION['login'])) {
	?>
	
	
	<h1>Je bent ingelogd!</h1>
	
	
	
	
	<?php
}


?>

<div class="starttekst">Welkom op de pagina van Daniel, David en Tobias. <br>
U kunt hier een account maken en inloggen. </div>

</body>
</html>
   
        
       
    </body>
</html>