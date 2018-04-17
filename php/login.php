<?php
      header('Content-Type: text/html; charset=utf-8');
      $username= "root";
      $password = "";
      $mysqli = new mysqli("localhost", $username, $password, "group6");
      if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
      }
      mysqli_set_charset($mysqli,"utf8");
      $result = $mysqli->query("SELECT * FROM user");
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
			if($row["Username"] == $_POST["name"]){
				if($row["Password"] == $_POST["psw"]){
					header("Location: ../index.php");
					exit;
				}else{
					echo "Fail! Wrong password";
				}
			}else{
				echo "USER NOT FOUND!";
			}
		}
      }else{
        echo "0 results";
	  }
      $mysqli->close();
?>