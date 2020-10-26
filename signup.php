<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Registreer pagina</title>
</head>
<body>
	<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
			<fieldset >
				<legend>Registreer</legend>
				<input type="text" name="vnaam" placeholder="Voornaam" required/>
				<input type="text" name="tvoegsel" placeholder="Tussenvoegsel" required/>
				<input type="text" name="anaam" placeholder="Achternaam" required/>
				<input type="email" name="email" placeholder="Email" required/>
				<input type="text" name="gnaam" placeholder="Gebruikersnaam" required/>
				<input type="password" name="wwoord" placeholder="Wachtwoord" required/>
				<input type="password" name="hwoord" placeholder="Herhaal wachtwoord" required/>
				<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		  	<p>
		  		Geen lid? <a href="signup.php">Registreer</a>
		  	</p>
		  	<p>
		  		Reset wachtwoord? <a href="lostpsw.php">Reset</a>
		  	</p>
		</form>
</body>
</html>