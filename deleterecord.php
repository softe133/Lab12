<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_table";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname)or die("not connected to database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$rollno= $_POST['rollno']; 



//echo($name.$email.$phone.$time.$message);


// if($db){
// 	echo "connected";
// }
// else{
// 	echo "error in connection";
// }
$sql= "DELETE FROM student WHERE rollno='$rollno'";

if($conn->query($sql)==TRUE){
	echo $rollno." record deleted successfully";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>