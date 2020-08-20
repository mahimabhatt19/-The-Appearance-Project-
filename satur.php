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
$c=$_POST['pno'];
$neareststn=$_POST['nstn'];
$confirm=$_POST['confirm'];
//$choice=$_POST['choice'];

if($confirm=='Yes'){
$sql = "INSERT INTO finalvolunteers(fname,lname,contactno,neareststn) VALUES ('$fn1','$ln1','$c','$neareststn')";
if ($conn->query($sql) === TRUE) {
	echo '<script>alert("Your confirmation is recorded")</script>';
    echo "Record inserted successfully";
	//header("Location:form_valid.html");
	echo '<a href="wap1.php">click here to let TAP KNOW that you are visiting this saturday!!!</a>';


	}
else{
    echo "Error creating table: " . $conn->error;
	}

}

if($confirm=='No'){
	echo '<script>alert("See you next Saturday")</script>';
	$sql1 = "INSERT INTO absentvolunteers(fname,lname,contactno,neareststn) VALUES ('$fn1','$ln1','$c','$neareststn')";
	if ($conn->query($sql1) === TRUE) {
    echo "Record inserted successfully";
//echo '<a href="wap1.php">click here to let TAP KNOW TAHT YOU ARE COMINGabout people coming on saturday on whatsapp</a>';
	}
else{
    echo "Error creating table: " . $conn->error;
	}

}


	//$msg="As you donot fit in the criteria your application is rejected";
	//$msg=wordwrap($msg,50);
	//mail("purnima.chhabria@gmail.com","TAP",$msg);

	




$conn->close();
?>
</body>
</html>
