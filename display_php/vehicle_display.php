<?php
//this code is for displaying data(records) from the various tables in the database for the vehicles tables
include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

$mytextbox6 = $_POST['vehicledisplay'];

echo "<h3>Vehicle</h3>";
$disp= mysqli_query($con,"SELECT * FROM gariData WHERE Name='$mytextbox6'");

	if($record = mysqli_fetch_array($disp))
		{
		echo "<br /> <b>Name</b>:".$record['Name'];
		echo "<br /> <b>ID Number</b>:".$record['IDNumber'];
		echo "<br /> <b>Vehicle Model</b>:".$record['VehicleModel'];
		echo "<br /> <b>Plate Number</b>:".$record['PlateNumber'];
		}

		else{
			echo"Vehicle Not Present in the Database!!";
		}

?>
