<?php
//this code is for displaying data(records) from the various tables in the database
include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

$mytextbox2 = $_POST['lecturerdisplay'];

echo "<h3>Lecturer</h3>";
$disp= mysqli_query($con,"SELECT * FROM lecturerData WHERE Name='$mytextbox2'");

	if($record = mysqli_fetch_array($disp))
		{
		echo $record['Name'];
		echo $record['Faculty'];
		echo $record['laptopModel'];
		echo $record['serialNumber'];
		}

		else{
			echo"Lecturer Not Present in the Database!!";
		}

?>
