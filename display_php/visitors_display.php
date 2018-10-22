<?php
//this code is for displaying data(records) from the various tables in the database
include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

$mytextbox4 = $_POST['visitorsdisplay'];

echo "<h3>Visitor</h3>";
$disp= mysqli_query($con,"SELECT * FROM visitorsData WHERE Name='$mytextbox4'");

	if($record = mysqli_fetch_array($disp))
		{
		echo $record['Name'];
		echo $record['Destination'];
		echo $record['laptopModel'];
		echo $record['serialNumber'];
		}

		else{
			echo"Visitor Not Present in the Database!!";
		}

?>
