<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Login pagina</title>
</head>
<body>
	<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
			<fieldset >
				<legend>Login</legend>
				<input type="text" name="uname" placeholder="Gebruikersnaam" required/>
				<input type="password" name="pass" placeholder="Wachtwoord" required/>
				<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		  	<p>
		  		Geen lid? <a href="signup.php">Registeer</a>
		  	</p>
		  	<p>
		  		Reset wachtwoord? <a href="lostpsw.php">Reset</a>
		  	</p>
		</form>
</body>
</html>