<?php  

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "project";
$db= mysqli_connect($sName, $uName, $pass, $db_name);
try {
	$conn= new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}
$con= new mysqli('localhost','root','','project')or die("Could not connect to mysql".mysqli_error($con));