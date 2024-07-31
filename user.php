<?php
$servername = "localhost";
$username = "root";
$password = "wptcekm1";
$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
die("connection failed : ". mysqli_connect_error());
}
echo "succuss";
$sql = "CREATE DATABASE SHEJOBS";
$queryResult = $conn -> query($sql);
if($queryResult === TRUE){
	echo "db succus";
}
else{
 "error : ".$conn -> error;
}
$sql = "USE SHEJOBS";
$queryResult = $conn -> query($sql);
if($queryResult === TRUE){
	echo "db used";
}
else{
	echo "error: ".$conn ->error;
}
$sql = "CREATE TABLE USERLOG(MAIL_ID VARCHAR(50),PASSWORD VARCHAR(20))";
$queryResult = $conn -> query($sql);
if($queryResult === TRUE){
	echo "table succus";
}
else{
 echo "error : ".$conn -> error;
}
$MAIL_ID = $_POST["mail"];
$PASSWORD = $_POST["pass"];
echo "$MAIL";
echo "$PASS";
$INSERT = "INSERT INTO `USERLOG` (`MAIL_ID`,`PASSWORD`) VALUES (`$MAIL_ID`,`$PASSWORD`)";
$queryResult = $conn -> query($sql);
if($queryResult === TRUE)
{
	echo "Contact Records Inserted";
}
else{
	echo"not inserted";
}
$conn-> close();
?>
