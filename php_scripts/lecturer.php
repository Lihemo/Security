<?php
 //this code is for submitting data to the database from  the lecturer form.
	include "/opt/lampp/htdocs/secure/php_scripts/EshiwaniConnection.php";

	if(isset($_POST['ClickMe_two']))
	{
		$car = $_POST['car'];
		$chair = $_POST['chair'];
		$old = $_POST['old'];
		$gender = $_POST['gender'];

		$sql = "INSERT INTO lecturerData (Name,Faculty,laptopModel,serialNumber) 
		VALUES ('$car', '$chair', '$old','$gender')";

		mysqli_query($con,$sql);
	}

	header ("Location: {$_SERVER['HTTP_REFERER']}");

?>