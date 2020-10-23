<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Login page</title>
</head>
<body>
	<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
			<fieldset >
				<legend>Login</legend>
				<input type="text" name="uname" placeholder="Username" required/>
				<input type="password" name="pass" placeholder="Password" required/>
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