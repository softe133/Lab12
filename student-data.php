<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_table";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 =>'id', 
	1 => 'name',
	2=> 'rollno'
);




// getting total number records without any search
$sql = "SELECT name, rollno, remarks ";
$sql.=" FROM student";
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.




$sql = "SELECT name, rollno, remarks  ";
$sql.=" FROM student WHERE 1 = 1";

// getting records as per search parameters
if( !empty($requestData['columns'][0]['search']['value']) ){   //name
	$sql.=" AND name LIKE '".$requestData['columns'][0]['search']['value']."%' ";
}
if( !empty($requestData['columns'][1]['search']['value']) ){  //rollno
	$sql.=" AND rollno LIKE '".$requestData['columns'][1]['search']['value']."%' ";
}
if( !empty($requestData['columns'][2]['search']['value']) ){ //remarks
	$sql.=" AND remarks LIKE '".$requestData['columns'][2]['search']['value']."%' ";
	}
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
	
// $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";  // adding length

$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

	


$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["name"];
	$nestedData[] = $row["rollno"];
	$nestedData[] = $row["remarks"];
	
	$data[] = $nestedData;
}


 $json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
	"data"            => $data   // total data array
		);

 echo json_encode($json_data);  // send data as json format

?>
