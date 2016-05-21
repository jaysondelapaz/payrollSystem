<!doctype html>
<html>
<head>
	<title>EmployeeList</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="myScript.js"></script>
	<link rel="stylesheet" href="style.css"/>

</head>
<body>




	<?php

include("dbcon.php");

try{

	$result = $mysqli->query("SELECT * FROM emp_tbl");
	//print_r($result->num_rows); count the row number in a table
	if($result->num_rows>0){
		//$rows=$result->fetch_assoc();//associative array
		//$rows = $result->fetch_all(MYSQLI_ASSOC);//load all data in array format
								//MYSQLI_ASSOC
								//MYSQLI_BOTH
								//MYSQLI_NUM the default
		//echo '<pre>',print_r($rows),'</pre>';
		/*
		while($row=$result->fetch_assoc()){
			echo $row['sname'],' ',$row['fname'];
		}
		*/
		//echo"<div class='table-responsive'>";
		echo"<table class='table table-bordered'>";
		echo"<tr style='background-color:#58CBB9;'>";
		echo"<th>EmployeeID</th>";
		echo"<th>LastName</th>";
		echo"<th>FirstName</th>";
		echo"<th>MiddleName</th>";
		echo"<th>Gender</th>";
		echo"<th>Age</th>";
		echo"<th>Address</th>";
		echo"<th>ContactNo</th>";
		echo"<th>Company</th>";
		echo"<th>Position</th>";
		echo"<th>Image</th>";
		echo"<th>DateRegister</th>";
		echo"<th>Action</th>";
		echo"</tr>";
		while($row=$result->fetch_object()){ //use object oriented style/ past data in to an object
			//echo "<input type='text' value='$row->sname'><br />";
			//echo"<input type='text' value='$row->fname'/><br />";
			//echo $row->sname,"<br />",$row->fname;	
			echo"<tr>";
					echo"<td>$row->empID</td>";
					echo"<td><input type='text' id='txt' value='$row->sname' disabled/></td>";
					echo"<td>$row->fname</td>";
					echo"<td>$row->mname</td>";
					echo"<td>$row->gender</td>";
					echo"<td>$row->age</td>";
					echo"<td>$row->address</td>";
					echo"<td>$row->contact</td>";
					echo"<td>$row->company</td>";
					echo"<td>$row->position</td>";
					echo"<td><img id='fetch_img' src='$row->image'/></td>";
					echo"<td>$row->dateReg</td>";	
					//echo"<td><button id='btn_edit' name='btn_edit'><span class='glyphicon glyphicon-pencil'><a href='editform.php?id=$row->empID'></a></span></button></td>";				
					echo"<td><button name='btn_delete' id='btn_delete' data-id='$row->empID'><span class='glyphicon glyphicon-remove'></span></button></td>";
					echo"<td><a href='editform.php?id=$row->empID'>load</a></td>";
					
					

			echo"</tr>";


		}


		echo"</table>";
		//echo"</div>";

	}else{
	throw new Exception("There something error with you query:"."<p style='color:red;'>".$mysqli->error."</p>");
		}

}catch(Exception $e){
	echo"catch" .$e->getMessage();
}

?>


	
</body>
</html>