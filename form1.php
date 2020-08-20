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

$fn1=$_POST['fname'];
$ln1=$_POST['lname'];
$e=$_POST['email'];
$city=$_POST['city'];
$choice=$_POST['choice'];

if($city=='Mumbai' || $city=='Pune'){
$sql = "INSERT INTO participant (fname,lname,email,city,choice) VALUES ('$fn1','$ln1','$e','$city','$choice')";
if ($conn->query($sql) === TRUE) {
    echo "<h1>Record inserted successfully</h1>";
	echo '<h1><a href="
form2.html">Form 2</a></h1>';
	//header("Location:form_valid.html");


	}
else{
    echo "Error creating table: " . $conn->error;
	}

}

if($city=='Other city'){
	echo '<script>alert("As you donot fit in the criteria your application is rejected")</script>';
	header('refresh:5; url=index.html');
	//$msg="As you donot fit in the criteria your application is rejected";
	//$msg=wordwrap($msg,50);
	//mail("purnima.chhabria@gmail.com","TAP",$msg);

	
}



$conn->close();
?>
</body>
</html>
