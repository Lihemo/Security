<?php
 //this code is for submitting data to the database from the visitors form.
	include "EshiwaniConnection.php";

	if(isset($_POST['ClickMe_four']))
	{
		$clueless = $_POST['clueless'];
		$looking = $_POST['looking'];
		$nervous = $_POST['nervous'];
		$thanks = $_POST['thanks'];

		$sql = "INSERT INTO visitorsData (Name,Destination,laptopModel,serialNumber) 
		VALUES ('$clueless', '$looking', '$nervous','$thanks')";

		mysqli_query($con,$sql);
	};

	header ("Location: {$_SERVER['HTTP_REFERER']}")

?>