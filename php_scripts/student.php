<?php
 //this code is for submitting data to the database from  the student form.
	include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";
	

	if(isset($_POST['ClickMe_one']))
	{
		$naji = $_POST['jina'];
		$lihemo = $_POST['john'];
		$moo = $_POST['model'];
		$siri = $_POST['serial'];

		$sql= "INSERT INTO studentData (Name,Course,laptopModel,serialNumber) VALUES ('$naji', '$lihemo', '$moo','$siri')";
		
		mysqli_query($con,$sql);
	}

	header ("Location: {$_SERVER['HTTP_REFERER']}");
	
?>
