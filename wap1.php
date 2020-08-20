<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'C:/Users/chhabaria/vendor/autoload.php';
//require __DIR__ . 'C:\Users\chhabaria\vendor\autoload.php';
use Twilio\Rest\Client; 
 
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="tap";
			$conn=new mysqli($servername,$username,$password,$dbname);
			if($conn->connect_error)
			{
				print("connection failed");
			}
			else
 
			$sid    = "ACd48d14d7b0d1066c4b217f623fa6efb1"; 
			$token  = "993343f67671b095743613ad33cdc89c"; 
			$twilio = new Client($sid, $token); 
 			//$sql="select * from finalvolunteers;";
			//$result=$conn->query($sql);
			//$row = mysql_fetch_row($result);
			//$data=$row[0];
			
			$sql="select * from finalvolunteers;";
				$result=$conn->query($sql);
				$c=$result->num_rows;
				//echo $c;
				if ($c > 0)
				{
					while($row=$result->fetch_assoc())
					{
						//echo "<p align='center' style='font-size:20px'>Total Cost= ".$row['cost']." + ".$row['gst']."&#37;=".$row['total']."</p>";
					
			$message = $twilio->messages 
                 		 ->create("whatsapp:+918286646549", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "the list of candidates coming up for saturday are:".$row['fname']." ".$row['lname']."--".$row['contactno']."is".$row['neareststn']
                           ) 
                  		); 
}
}
 
			print($message->sid);
			$conn->close();
?>

//"final".$row['fname']." ".$row['lname']."--".$row['contactno']."is".$row['neareststn']