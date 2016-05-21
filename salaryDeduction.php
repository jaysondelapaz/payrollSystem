<!doctype html>
<html>
<head>
	<title>EmployeeList</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css"/>

</head>
<body>

	<select name="get-one">
		<option>----------EmployeeName----------</option>
		<?php
				
			function selectName(){
				include("dbcon.php");
				$query= "SELECT * FROM emp_tbl";
				$getID=$mysqli->query($query) or die($mysqli->error);

				//print_r($getID->num_rows);
				while($row = $getID->fetch_object()){

					echo"<option value='$row->empID'>",$row->sname,", " ,$row->fname," ",$row->mname,".</option>";
						
				}
				
			}
			selectName();


		?>

<form>
<label>Employee Name:</label>	
</select>
<label>Company:</label><input type="text" name="comp" id="comp" value="<?php  ?>" /><br />
<label>Position:</label><input type="text" name="pos" id="pos" /><br />
<label>Rate per day:</label><input type="number" name="rate" id="rate" /> <br />
<label>Working days:</label><input type="number" name='wdays' id="wdays"/><br />

<input type="button" onClick="sal()"/>

</form>
	
</body>
</html>