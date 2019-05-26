<?php
  //this code is for submitting data to the database from the mobile form.
	include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

	

	if(isset($_POST['ClickMe_five']))
	{
		$simu = $_POST['hallo'];
		$fomu = $_POST['uko'];
		$gotea = $_POST['aje'];
		$sawa = $_POST['fiti'];

		$sql = "INSERT INTO mobileData (Name,IDNumber,PhoneModel,IMEINumber) VALUES ('$simu', '$fomu', '$gotea','$sawa')";
		
		mysqli_query($con,$sql);
	};

	header ("Location: {$_SERVER['HTTP_REFERER']}");

?>
