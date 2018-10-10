<?php
 //this code is for submitting data to the database from  the student form.
	include "EshiwaniConnection.php";

	if(isset($_POST['ClickMe_one']))
	{
		$jina = $_POST['jina'];
		$john = $_POST['john'];
		$model = $_POST['model'];
		$serial = $_POST['serial'];

		$sql= "INSERT INTO studentData (Name,Course,laptopModel,serialNumber) 
			VALUES ('$jina', '$john', '$model','$serial')";
		
		mysqli_query($con,$sql);
	}

	header ("Location: {$_SERVER['HTTP_REFERER']}");
	
?>