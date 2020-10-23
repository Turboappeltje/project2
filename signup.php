<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Signup page</title>
</head>
<body>
	<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
			<fieldset >
				<legend>Signup</legend>
				<input type="text" name="vnaam" placeholder="Voornaam" required/>
				<input type="text" name="tvoegsel" placeholder="Tussenvoegsel" required/>
				<input type="text" name="anaam" placeholder="Achternaam" required/>
				<input type="email" name="email" placeholder="Email" required/>
				<input type="text" name="uname" placeholder="Gebruikersnaam" required/>
				<input type="password" name="pass" placeholder="Wachtwoord" required/>
				<input type="password" name="uname" placeholder="Herhaal wachtwoord" required/>
				<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		  	<p>
		  		Not a member? <a href="signup.php">Sign Up</a>
		  	</p>
		  	<p>
		  		Reset Password? <a href="lostpsw.php">Reset</a>
		  	</p>
		</form>
</body>
</html>