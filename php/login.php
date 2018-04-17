<?php
//Program to process login requests to the Webite

//Establishes connection to the database.
header('Content-Type: text/html; charset=utf-8');
$username= "root";
$password = "";
$mysqli = new mysqli("localhost", $username, $password, "group6");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
mysqli_set_charset($mysqli,"utf8");

//Queries the database to gather users
$result = $mysqli->query("SELECT * FROM user");
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
    if($row["Username"] == $_POST["name"]){
      //Checks if the username is found.
      if($row["Password"] == $_POST["psw"]){
        //If the password provided matches the database password, go to new webpage and exit. 
        #TODO: Change to webpage clone.SDS
       header("Location: ../activesession.php");
       exit;
     }else{
        //Reloads the page if the passwod is wrong
      header("Location: ../index.php");
      exit;
     }
    }else{
      //Reloads the page if user is not found. 
      #TODO: Create a new user page if user is not found.
      header("Location: ../index.php");
      exit; 
    } 
  }
}else{
  //Prints if no users exist.
  //If this prints, make sure the server is not on fire. 
  echo "ERROR 505! SOMETHING WENT HORRIBLY WRONG!";
  header("Location: ../error.html");
  exit;
}
$mysqli->close();
?>