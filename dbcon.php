<?php

 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "payroll_db";


$mysqli = new mysqli($host,$user,$pass,$db);// or 
//echo"Database successfully connected!";
if($mysqli->connect_errno){
	//echo $mysqli->connect_error;
	die($mysqli->error);
}

?>