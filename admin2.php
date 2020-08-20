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
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$ans1=$_POST['Q1'];
$ans2=$_POST['Q2'];
$ans3=$_POST['Q3'];



if ($ans1>=3 && $ans2>=3 && $ans3>=3){
	$sql = "INSERT INTO admin_select_volunteer (fname,lname) VALUES ('$fname','$lname')";
if ($conn->query($sql) === TRUE) {
	echo '<script>alert("Record inserted successfully since the criteria is met of average score greater than equal to 3")</script>';
	header('refresh:5; url=index.html');
}
 else {
    echo "Error creating table: " . $conn->error;
}

}
else{
echo '<script>alert("As volunteer donot fit in the criteria your application is rejected")</script>';
header('refresh:5; url=index.html');

}





$conn->close();
?>
</body>
</html>
