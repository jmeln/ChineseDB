<!DOCTYPE HTML>
<html>

<head>
  <title>Mercer Chinese Database</title>
  <meta charset="utf-8" />
  <meta name=viewport" content="width=divice-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="icon" href="assets/images/favicon.ico" sizes="32x32" />
</head>

<div id="container">

   <div id="header">
      <h1>Mercer HSK Database</h1>
    </div>

  <div id="body">
    <table id="data">
      <tr>
        <th>Character</th>
        <th>Pinyin</th>
        <th>Definition</th>
        <th>Radical</th>
        <th>Stroke Count</th>
        <th>HSK Level</th>
        <th>Frequency Rank</th>
      </tr>
      <?php
		//UserData, WIll change on a per database basis. Default MySQL user and password used
		$username= "root";
		$password = "";
		
		//Creates mysqli object to handle the database. Only works if mysqli is supported. Use PDO if mysqli is unavailable.
        $mysqli = new mysqli("localhost", $username, $password, "group6");
		
		//Checks to see if mysqli is comunicating with the database. Dies and returns an error if false.
		if ($mysqli->connect_error) {
			die("Connection failed: " . $mysqli->connect_error);
		}
		
		//Runs the query
        $result = $mysqli->query("SELECT * FROM chineseterms ");
		
		//Prints the result of the query. [add HTML tags here START]
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["CHNcharacter"]."</td><td>".$row["Pinyin"]."</td><td>".$row["Definition"]."</td><td>".$row["Radical"]."</td><td>".$row["StrokeCount"]."</td><td>".$row["HSKlevel"]."</td><td>".$row["FrequencyRank"]."</td></tr>";
		}
		echo "</table>";
		//[add HTML tags here END]
		//Prints if no results found in query
		}else{
			echo "0 results";
		}
		
		//Closes the database
		$mysqli->close();
      ?>
    </table>

  </div>

  <div id="footer">
    <p>Devleoped by Cody Lee, Jarrett Melnick, and Vincent</p>
    <a href="https://opensource.org/licenses/MIT">© Copyright 2018 Jarrett Melnick. MIT</a>
  </div>
</div>

</html>
