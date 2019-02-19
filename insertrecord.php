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


$name= $_POST['name']; 
$rollno= $_POST['rollno']; 
$remarks= $_POST['remarks']; 


//echo($name.$email.$phone.$time.$message);


// if($db){
// 	echo "connected";
// }
// else{
// 	echo "error in connection";
// }
$sql= "INSERT INTO student (name,rollno,remarks)VALUES('$name','$rollno','$remarks')";

if($conn->query($sql)==TRUE){
	echo "New record inserted successfully";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>
