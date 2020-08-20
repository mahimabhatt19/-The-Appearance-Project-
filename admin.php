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

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];


/*if($city=='Mumbai' || $city=='Pune'){
$sql = "INSERT INTO participant (fname,lname,email,city,choice) VALUES ('$fn1','$ln1','$e','$city','$choice')";
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
	//header("Location:form_valid.html");


} else {
    echo "Error creating table: " . $conn->error;
}

}

if($city=='Other'){
	echo '<script>alert("As you donot fit in the criteria your application is rejected")</script>';
	$msg="As you donot fit in the criteria your application is rejected";
	$msg=wordwrap($msg,50);
	mail("purnima.chhabria@gmail.com","TAP",$msg);

	
}*/

$sql="Select * from form2 where fname='$fname' and lname='$lname' ";
$result=$conn->query($sql);

$row=$result->fetch_assoc();

echo "<h1>Firstname:".$row['fname']."</h1>";
//echo "<br>";
echo "<h1>Lastname:".$row['lname']."</h1>";

//echo "<br>";
echo "<h1>Contact:".$row['contact']."</h1>";
//echo "<br>";
echo "<h1>Ans1:".$row['qu1']."</h1>";
//echo "<br>";
echo "<h1>Ans2:".$row['qu2']."</h1>";
//echo "<br>";
echo "<h1>Ans3:".$row['qu3']."</h1>";
//echo "<br>";
echo "<h1>Location:".$row['location']."</h1>";
//echo "<br>";
echo "<h1>Date:".$row['date1']."</h1>";
//echo "<br>";
echo "<h1>Time:".$row['time']."</h1>";
//echo "<br>";
echo '<h1><a href= "admin2.html">go to rating</a></h1>';
//echo "<br>";
//echo "<button name='rate' type='submit' value='rate' onclick='location.href='admin2.html''>Rate</button>";
//echo "<input type =button onclick='Javascript:window.location.href='admin2.html''/>";

$conn->close();
?>
</body>
</html>
