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
		<h1>Registration Form</h1><br>
	</head>
	<form action" method="get">
	<body>
		<table class="center">
			<tr>
				<td>Nameof company: </td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Address: </td>
				<td><input type="text" name="add" required></td>
			<tr>
				<td>Phone: </td>
				<td><input type="text" name="phn" required></td>
			</tr>
			<tr>
				<td>Email Id: </td>
				<td><input type="email" name="mail" required></td>
			</tr>
			
			<tr>
				<td><button><input type="reset" value="Cancel"></button></td>
				<td><button><input type="submit" value="Register">
			<?php
				global $cname,$addres,$phone,$email;
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
				if(isset($_POST['name']))
				{
					$cname=$_POST["name"];
					echo "$cname";
				}
				$_SESSION['username'] = $cname;
				if(isset($_POST['add']))
				{
					$addres=$_POST["add"];
				}
				if(isset($_POST['phn']))
				{
					$phone=$_POST["phn"];
				}
				if(isset($_POST['mail']))
				{
					$email=$_POST["mail"];
				}
				$sql="INSERT INTO proreg(Name_of_company,Address,Email,Phone) VALUES ('$cname','$addres','$phone','$email')";
				if($conn->query($sql)===TRUE)
				{
				
				}
				else	
				{
					echo "failed".$conn->error;
				}
			
				$conn->close();


			?>
			</button></td>
			</tr>
		</table>
		
	</body>
</div>
</html>
