<?php
error_reporting(0);
$empID = $_POST['empID'];
$sname = $_POST['surname'];
$fname = $_POST['firstname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$no = $_POST['num'];
$com = $_POST['company'];
$pos = $_POST['position'];

/*echo $sname.
	"<br/ >".$fname.
	"<br />".$mname.
	"<br />".$gender.
	"<br />".$age.
	"<br />".$address.
	"<br />".$no.
	"<br />".$com.
	"<br />".$pos;
*/
function uploadImage(){
	if($_FILES['img']!=""){
		move_uploaded_file($_FILES['img']['tmp_name'],"upload_images/".$_FILES['img']['name']);	
	}else{
		echo"No file chosen";
	}
}
uploadImage();	//return function
	
try{

	$upload_dir= "upload_images/".$_FILES['img']['name'];

		if($empID && $sname && $fname && $mname && $gender && $age && $address && $no && $com && $pos){
				include('dbcon.php');
				$query = "INSERT INTO emp_tbl VALUES($empID, '$sname', '$fname', '$mname', '$gender', '$age', '$address', '$no', '$com', '$pos', '$upload_dir', NOW())";
				$mysqli->query($query)or die($mysqli->error);
				echo"<p style='color:green;'>Employee record added</p>";
				header('Refresh:2; url=home.php');
		
		}else{
			 throw new Exception("You have to complete all the fields!");
		}

}catch(Exception $e) {
  echo"<p style='color:red;'>ERROR: " .$e->getMessage();
}
	
?>

