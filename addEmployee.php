<!doctype html>
<html>
<head>
	<title>Add employee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css"/>
	




</head>

<body>

	<form action="regEmp.php" method="post" enctype="multipart/form-data">
		<h1>Employee Registration</h1>
	<label>EmployeeID</label><input type="number" name="empID"/><br />	
	<label>Surname</label><input type="text" name="surname"/><br />
	<label>Firstname</label><input type="text" name="firstname"/><br />
	<label>Middlename</label><input type="text" name="mname"/><br />
	<label>Gender</label><input type="radio" value="M" name="gender">Male<input type="radio" value="F" name="gender">Female<br />
	<label>Age</label><input type="number" name="age"/><br />
	<label>Address</label><input type="text" name="address"/><br />
	<label>Contact No.</label><input type="number"  maxlength="11" name="num"/><br />
	<label>Company</label><input type="text" name="company"/><br />
	<label>Position</label><input type="text" name="position"/><br />
	<label>Image</label><input type="file" name="img"/><br /><br />
	<input type="submit" value="register"/>
</form>

</body>
</html>




	
