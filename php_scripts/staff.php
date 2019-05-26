<?php
  //this code is for submitting data to the database from the staff form.
	include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

	if(isset($_POST['ClickMe_two']))
	{
		$dart = $_POST['car'];
		$shade = $_POST['chair'];
		$bet = $_POST['old'];
		$polite = $_POST['gender'];

		$sql = "INSERT INTO staffData (Name,Department,laptopModel,serialNumber)
		VALUES ('$dart', '$shade', '$bet','$polite')";
		
		mysqli_query($con,$sql);
	};

	header ("Location: {$_SERVER['HTTP_REFERER']}");

?>
