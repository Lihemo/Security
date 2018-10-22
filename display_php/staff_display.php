<?php
//this code is for displaying data(records) from the various tables in the database
include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

$mytextbox3 = $_POST['staffdisplay"'];

echo "<h3>Staff</h3>";
$disp= mysqli_query($con,"SELECT * FROM staffData WHERE Name='$mytextbox3'");

	if($record = mysqli_fetch_array($disp))
		{
		echo $record['Name'];
		echo $record['Department'];
		echo $record['laptopModel'];
		echo $record['serialNumber'];
		}

		else{
			echo"Staff Not Present in the Database!!";
		}

?>
