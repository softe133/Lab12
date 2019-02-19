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




//echo($name.$email.$phone.$time.$message);


// if($db){
// 	echo "connected";
// }
// else{
// 	echo "error in connection";
// }
$sql= "LOAD DATA LOCAL INFILE 'student_data.txt' INTO TABLE `my_table`";

if($conn->query($sql)==TRUE){
	echo "New record inserted successfully";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>

<!-- //load data into table
$sql2 = "LOAD DATA LOCAL INFILE 'student_data.txt' INTO TABLE `test1` FIELDS TERMINATED BY ' ' ENCLOSED BY '\"' LINES TERMINATED BY '\\r\\n' (`type` , `command` , `value`)";
 -->