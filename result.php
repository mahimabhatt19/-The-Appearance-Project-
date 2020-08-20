<!doctype html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="tap";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select * from admin_select_volunteer;";
		$result=$conn->query($sql);
		$c=$result->num_rows;
		echo"<p> The following are the candidates selected as TAP Volunteers.</p>";

		//echo $c;
		if ($c > 0)
		{
		while($row=$result->fetch_assoc())
		{
		echo "<p align='center' style='font-size:20px'> ".$row['fname']."  ".$row['lname']."</p>";
		}
}
			$conn->close();
?>
			
