<?php
	session_start();
?>
<!Doctype html>
<html>
<div>
	<head>
		
		<link rel="stylesheet" href="assets/css/login.css" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<h1>Sign Up</h1><br>
	</head>
	<form action" method="POST">
	<body>
		
		<table class="center">
			<tr>
				<td>Mail Id: </td>
				<td><input type="text" name="email" id="email" required></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="pass" id="pass" required></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td>Conform Password: </td>
				<td><input type="password" name="pass1" id="psw1" required></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td><button><input type="reset" value="Cancel"></button></td>
				<td><button><input type="submit" value="Log In">
			
		
		<?php
			global $user,$password1;
			$servername= "localhost";
			$username= "root";
			$password= "wptcekm1";
			$conn=mysqli_connect($servername,$username,$password);
			if(!$conn)
			{
				echo "failed";
			}
			$sql="USE shejobs";
			if($conn->query($sql)===TRUE)
			{	
				
			}
			else
			{
				echo "failed".$conn->error;
			}	
			if(isset($_POST['email']))
			{
				$user=$_POST["email"];
				
			}
			$_SESSION['username'] = $user;
			if(isset($_POST['pass']))
			{
				$password1=$_POST["pass"];
			}
			$sql="INSERT INTO userlog(Email,Password) VALUES ('$user','$password1')";
			if($conn->query($sql)===TRUE)
			{
				
			}
			else	
			{
				echo "failed".$conn->error;
			}
			if($password1!='')
			{
				header("Location:/project/template135/job-website-template-135/userreg.php");
				exit();
			}
			$conn->close();


		?>
	</button>
	</td>
	</tr>
	</table>
	</form>
</div>

</body>
</html>


