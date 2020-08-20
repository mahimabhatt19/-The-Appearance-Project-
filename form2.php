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

$fn1=$_POST['firstname'];
$ln1=$_POST['lastname'];
$contact=$_POST['contact'];
$qu1=$_POST['subject1'];
$qu2=$_POST['subject2'];
$qu3=$_POST['subject3'];
$loc=$_POST['nlocation'];
$d=$_POST['date'];
$t=$_POST['time'];


$sql = "INSERT INTO form2 (fname,lname,contact,qu1,qu2,qu3,location,date1,time) VALUES ('$fn1','$ln1','$contact','$qu1','$qu2','$qu3','$loc','$d','$t')";



if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
	//header("Location:form_valid.html");


} else {
    echo "Error creating table: " . $conn->error;
}
echo '<script>alert("There is a verification process so you will be soon updated with your selection status")</script>';
header('refresh:5; url=index.html');


$conn->close();
?>
</body>
</html>
