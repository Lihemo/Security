<?php
 //this code is for submitting data to the database from the visitors form.
	include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

	if(isset($_POST['ClickMe_four']))
	{
		$kosa = $_POST['less'];
		$rada = $_POST['angalia'];
		$wasiwasi = $_POST['viatu'];
		$asante = $_POST['njia'];

		print "$kosa<br /> $rada<br /> $wasiwasi<br /> $asante";

		$sql = "INSERT INTO visitorsData (Name,Destination,laptopModel,serialNumber) VALUES ('$kosa', '$rada', '$wasiwasi','$asante')";

		mysqli_query($con,$sql);
	};

	header ("Location: {$_SERVER['HTTP_REFERER']}")

?>
