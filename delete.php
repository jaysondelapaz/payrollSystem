<?php

include('dbcon.php');

$id = $_POST['id'];
//echo"my id is: " .$id;

$delete = "DELETE FROM emp_tbl WHERE empID=$id";
$mysqli->query($delete) or die($mysqli->error);
echo"Record Deleted!";



?>