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
$newrollno= $_POST['newrollno']; 



//echo($name.$email.$phone.$time.$message);


// if($db){
// 	echo "connected";
// }
// else{
// 	echo "error in connection";
// }
$sql= "UPDATE student SET rollno='$newrollno' WHERE name='$name'";

if($conn->query($sql)==TRUE){
	echo $newrollno.":  assigned to ".$name. "successfully";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>