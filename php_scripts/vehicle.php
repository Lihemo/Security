<?php
//this code is for displaying data(records) from the various tables in the database
include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

$mytextbox5 = $_POST['vehicledisplay'];

echo "<h3>STUDENT</h3>";
$disp= mysqli_query($con,"SELECT * FROM gariData WHERE Name='$mytextbox5'");	

if($record = mysqli_fetch_array($disp))
	{
		echo "<br /> <b>Name</b>:" .$record['Name'];
		echo "<br /> <b>ID Number</b>:" .$record['IDNumber'];
		echo "<br /> <b>Vehicle Model</b>:" .$record['VehicleModel'];
		echo "<br /> <b>Plate Number</b>:" .$record['PLateNumber'];
	}

	else{
		echo"Vehicle Not Present in the Database!!";
	} 
	
?>

