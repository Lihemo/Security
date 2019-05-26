<?php
//this code is for displaying data(records) from the various tables in the database
include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

$mytextboxv = $_POST['staffdisplay'];

echo "<h3>STAFF</h3>";
$disp= mysqli_query($con,"SELECT * FROM staffData WHERE Name='$mytextboxv'");

	if($record = mysqli_fetch_array($disp))
		{
		echo "<br /> <b>Name:</b>".$record['Name'];
		echo "<br /> <b>Department:</b>" .$record['Department'];
		echo "<br /> <b>Laptop Model:</b>" .$record['laptopModel'];
		echo "<br /> <b>Serial Number:</b>" .$record['serialNumber'];
		}

		else{
			echo"Staff Not Present in the Database!!";
		}

?>
