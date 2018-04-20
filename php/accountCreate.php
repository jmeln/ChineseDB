<?php
//Program to process requests to create new user accounts.
header('Content-Type: text/html; charset=utf-8');
$username= "root";
$password = "";
$mysqli = new mysqli("localhost", $username, $password, "group6");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
mysqli_set_charset($mysqli,"utf8");

//Tests if the passwords match
if($_POST["psw"] == $_POST["psw2"]){
	//Creats the user if the passwords match.
	$result = $mysqli->query("INSERT INTO users(username, password)
		VALUES ($_POST["username", $_POST["psw"]);
	echo $result;
	//header("Location: ../activesession.php");
	//exit;
}else{
	//Reloads the table
	header("Location: ../accountcreate.html");
	exit;
}

?>