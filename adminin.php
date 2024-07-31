<!Doctype html>
<html>
<div>
	<head>
		<script>
			function  validateForm(){
				var x = document.getElementById("mail").value;
				var y = document.getElementById("pass").value;
				if(x=="admin@gmail.com" && y=="password"){
					return true;	
				}
				else {
					alert("invalid login");
					return false;
				}
			}
		</script>
		<link rel="stylesheet" href="assets/css/login.css" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<h1>Sign In</h1><br>
	</head>
	<form action="demo.php" target="_blank" method="post" onsubmit="return validateForm()">
	<body>
		<table class="center">
			<tr>
				<td>Mail Id: </td>
				<td><input type="text" name="mail" id="mail" required></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="pass" id="pass"required></td>
			<tr>
				<td><button><input type="reset" value="Cancel"></button></td>
				<td><button><input type="submit" value="Log In"></button></td>
			</tr>
		</table>
		
	</body>
	</form>
</div>
</html>
