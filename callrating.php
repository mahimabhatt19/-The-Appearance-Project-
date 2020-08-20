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

/*$fn1=$_POST['fname'];
$ln1=$_POST['lname'];
$e=$_POST['email'];
$city=$_POST['city'];
$choice=$_POST['choice'];

if($city=='Mumbai' || $city=='Pune'){
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

$r=$_POST['T1'];

if ($r>=3){
	echo "WE SUGGEST YOU TO TAKE THIS CANDIDATE AS A VOLUNTEER SINCE YOU HAVE RATED THEM ABOVE 3";
	
}
if ($r<3)
{
echo "WE DON'T SUGGEST YOU TO TAKE THIS CANDIDATE AS A VOLUNTEER BASED ON YOUR SCORE";
}



$conn->close();
?>
</body>
</html>
