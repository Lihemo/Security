<?php
 //this code is for submitting data to the database from the visitors form.
	include "EshiwaniConnection.php";

	if(isset($_REQUEST['ClickMe_four']))
	{
		$clueless = $_REQUEST['clueless'];
		$looking = $_REQUEST['looking'];
		$nervous = $_REQUEST['nervous'];
		$thanks = $_REQUEST['thanks'];

		$insert = "insert into visitorsData(Name,Destination,laptopModel,serialNumber) values ('$clueless', '$looking', '$nervous','$thanks')";
		mysqli_query($link,$insert) or die("Cannot Execute Query".msqli_error($link));
	};

	header ("location: ./ index.html");

?>