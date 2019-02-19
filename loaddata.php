
<!DOCTYPE html>
<html>
<head>
	<title>insert Records</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
     <h1>Add Student Information</h1><br>
     <form action="insertrecord.php" method="post">
     <input type="text" name="name" placeholder="Enter name">&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="rollno" placeholder="Enter rollno">&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="remarks" placeholder="Enter remarks"><br><br>
     <input type="submit" name="insert" value="Add Students" class="btn btn-primary">
     </form>

     <h1>Delete Student Information</h1><br>
     <form action="deleterecord.php" method="post">
     <input type="text" name="rollno" placeholder="Enter rollno">
     <input type="submit" name="Delete" value="Delete Students" class="btn btn-danger">
     </form>

     <h1>Change Student Information</h1><br>
     <form action="updaterecord.php" method="post">
     <input type="text" name="name" placeholder="Enter name">&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="newrollno" placeholder="Enter Newrollno">
     <input type="submit" name="update" value="Update Students" class="btn btn-success">
     </form>
</body>
</html>