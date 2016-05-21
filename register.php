<?php

$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

if($pass && $cpass){

	function confirm($pass1,$cpass1){
		if($pass1 == $cpass1){
				 //echo"welcome";
		}else{
			echo"Password did not match!";
		}
	}
	confirm($pass,$cpass);//kinuha ko ung value ng password at cpassword s taas tsaka ko pinasa sa parameter ng function ko

}else{
	echo"You have to complete all the fields!";
}


$pass=md5($pass); // i translated password to md5 pra secured
function regNow($pas){
	include('dbcon.php');
	
	$query = mysqli_query($conn, "INSERT INTO admin_tbl VALUES(NULL,'$pas')")or die(mysqli_error());
	echo"<p style='color:green;'>Password accepted and ready to use</p>";
	header('Refresh:2; url=admin.php');
}
regNow($pass); //e2 n ung value ng parameter ko which is nka translate n s md5

?>