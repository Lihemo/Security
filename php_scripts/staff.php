<?php
  //this code is for submitting data to the database from the staff form.
	include "/opt/lampp/htdocs/secure/php_scripts/EshiwaniConnection.php";

	if(isset($_POST['ClickMe_three']))
	{
		$dart = $_POST['dart'];
		$shade = $_POST['shade'];
		$bet = $_POST['bet'];
		$polite = $_POST['polite'];

		$sql = "INSERT INTO staffData (Name,Department,laptopModel,serialNumber)
		 VALUES ('$dart', '$shade', '$bet','$polite')";
		
		mysqli_query($con,$sql);
	};

	header ("Location: {$_SERVER['HTTP_REFERER']}");

?>