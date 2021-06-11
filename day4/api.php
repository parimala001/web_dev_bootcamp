<?php
	
	// Step - 1: Data Collection
	
	$emailid=$_POST['emailid'];
	
	// Push data to Database Server

	// Step -2 - Confinguring your Server Details
	// Server Details
	$server="localhost:3306";
	$dbname="parimala";
	$username="root";
	$password="";

	$sFlag=0;

	
	$conn=mysqli_connect($password);
	if(!$conn) {
		echo 'Server Connection Failure';
		$sFlag=0;
	} else {
		echo 'Server Connection Authorised';
		$sFlag=1;
	}
	echo '<br/>';
	
	if($sFlag==1) {

		
		$sql="INSERT INTO contact_form (email_id) VALUES('".$emailid."');";

	
		$a=mysqli_query($conn,$sql);

		if($a) {
			echo "Data Inserted Successfully";
		} else {
			echo $conn->error;
		}

	}

?>