<!Doctype html>
<html>
<div>
	<head>
		<link rel="stylesheet" href="assets/css/login.css" />
		<h1>Registration Form</h1><br>
	</head>
	<form action="index.html" method="get">
	<body>
		<table class="center">
			<tr>
				<td>Name: </td>
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
				<td>qualification: </td>
				<td><select name="Qualification">
					<option value="sslc">SSLC</option>
					<option value="plustwo">Plus Two</option>
					<option value="dip">Diploma/ITI</option>
					<option value="degree">Degree</option>
					<option value="btech">BTECH</option>
					<option value="pg">PG</option>
					<option value="mtech">MTECH</option>
					<option value="phd">PHD</option>
				</select></td>
			</tr>
			<tr>
				<td>Specialization: </td>
				<td><select name="Specialization">
					<option value="accounting">Accounting</option>
					<option value="computer">Computer science</option>
					<option value="electronics">Electronics</option>
					<option value="medical">Medical</option>
					<option value="teaching">Teaching</option>
					<option value="aviation">Aviation</option>
				</select></td>
			</tr>
			<tr>
				<td>position applied: </td>
				<td><input type="text" name="position" required></td>
			</tr>
			<tr>
				<td>Experience: </td>
				<td><select name="Experience">
					<option value="nill">NIl</option>
					<option value="6">6 Months</option>
					<option value="1-2">1-2 yrs</option>
					<option value="2-4">2-4 yrs</option>
					<option value="none">None of these</option>
				</select></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td>Knowing Languages: </td>
				<td><input type="checkbox" value="eng">English
				<input type="checkbox" value="hin">Hindi
				<input type="checkbox" value="mal">Malayalam</td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td><button><input type="reset" value="Cancel"></button></td>
				<td><button><input type="submit" value="Register"></button></td>
			</tr>
		</table>
		
	</body>
</div>
</html>
