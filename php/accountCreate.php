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
	$newUserN = $_POST["newuname"];
	$newPassWd = $_POST["psw"];
	//$uId = $mysqli->query("Select count(`UserID`) from 'user'");
	//echo $uId;
	//Creats the user if the passwords match.
	//$sql = "INSERT INTO `user`(`UserID`, `Username`, `Password`, `HSK Level`) VALUES ('($uId+1)', '$newUserN','$newPassWd',1)";
	$sql = "INSERT INTO `user`(`Username`, `Password`, `HSK Level`) VALUES ('$newUserN','$newPassWd',1)";
	if($mysqli->query($sql) === TRUE) {
		header("Location: ../activesession.php");
		exit;
	}else{
		echo "Error: <br>".$mysqli->error;
	}
}else{
	//Reloads the table
	header("Location: ../accountcreate.html");
	exit;
}
?>