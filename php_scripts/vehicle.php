<?php
	 //this code is for submitting data to the database from  the student form.
	include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";
	

	if(isset($_POST['ClickMe_six']))
	{
		$brandi = $_POST['brand'];
		$mbele = $_POST['bumper'];
		$unda = $_POST['make'];
		$hit = $_POST['gonga'];

		$sql= "INSERT INTO gariData (Name,IDNumber,VehicleModel,PlateNumber) VALUES ('$brandi', '$mbele', '$unda','$hit')";
		
		mysqli_query($con,$sql);
	}

	header ("Location: {$_SERVER['HTTP_REFERER']}");

?>

