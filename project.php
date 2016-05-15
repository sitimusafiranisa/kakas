<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href="bootstrap-3.3.2/css/bootstrap.css" rel="stylesheet" media="screen" type="text/css"/>		
		<link href="bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css"/>		
		<!--<link href="css/normalize.css" rel="stylesheet" media="screen" type="text/css"/>-->
		<link rel="stylesheet" href="style.css">
		<script src="js/jquery.min.js" type="text/javascript"></script>		
		<script src="bootstrap-3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
		<SCRIPT LANGUAGE="JavaScript">
			function validate(){
			submitOK="True"
			x=document.signup

			//validasi password 
			pass=x.password.value
			verifypass=x.password1.value
			if (pass!=verifypass)
			{
			 alert("Password and Re-enter password harus sama!")
			 submitOK="False"
			}
			if (submitOK=="False") 
			 {
			return false
			 }
			}
 
		</script>
	</head>
	<body>
		<div id="main">
		<input id="tab1" type="radio" name="tabs" checked>
		<label for="tab1">Login</label>
		<input id="tab2" type="radio" name="tabs">
		<label for="tab2">Sign Up</label>
		
		<section id="content1">
			<form action="login.php" method="POST">
				<table class="table table-bordered" border=1>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" class="form-control"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" class="form-control"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" name="login" value="Login" class="btn btn-primary"></td>
					</tr>
				</table>
			</form>
		</section>
			
		<section id="content2">
			<form name="signup" onSubmit="return validate()" action="signup.php" method="POST">
				<table class="table table-bordered" border=1>
					<tr>
						<td>Nama Lengkap</td>
						<td><input type="text" name="nama" class="form-control" required></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" class="form-control" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" class="form-control" required></td>
					</tr>
					<tr>
						<td>Re-enter password</td>
						<td><input type="password" name="password1" class="form-control" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" class="form-control" required></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" name="submit" value="Sign Up" class="btn btn-primary"></td>
					</tr>
				</table>
			</form>
		</section>
		</div>
	</body>
</html>