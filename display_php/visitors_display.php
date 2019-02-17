<?php
//this code is for displaying data(records) from the various tables in the database
include "/opt/lampp/htdocs/secure/php_scripts/EshiwaniConnection.php";

$mytextbox4 = $_POST['visitorsdisplay'];

echo "<h3>VISITOR</h3>";
$disp= mysqli_query($con,"SELECT * FROM visitorsData WHERE Name='$mytextbox4'");

	if($record = mysqli_fetch_array($disp))
		{
		echo "<br /><b> Name:</b>".$record['Name'];
		echo "<br /> <b>Destination:</b>".$record['Destination'];
		echo "<br /> <b>Laptop Model:</b>".$record['laptopModel'];
		echo "<br /> <b>Serial Number:</b>".$record['serialNumber'];
		}

		else{
			echo"Visitor Not Present in the Database!!";
		}

?>
