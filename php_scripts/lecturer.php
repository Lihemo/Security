<?php
 //this code is for submitting data to the database from  the lecturer form.
	include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

	if(isset($_POST['ClickMe_four']))
	{
		$arc = $_POST['clueless'];
		$kalisha = $_POST['kiti'];
		$buda = $_POST['uzee'];
		$mdem = $_POST['jinsia'];

		$sql = "INSERT INTO lecturerData (Name,Faculty,laptopModel,serialNumber) 
		VALUES ('$arc', '$kalisha', '$buda','$mdem')";

		mysqli_query($con,$sql);
	}

	header ("Location: {$_SERVER['HTTP_REFERER']}");

	include "/opt/lampp/htdocs/security/includes/";

?>
