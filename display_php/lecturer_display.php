<?php
//this code is for displaying data(records) from the various tables in the database
include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

$mytextbox2 = $_POST['lecturerdisplay'];

echo "<h3>LECTURER</h3>";
$disp= mysqli_query($con,"SELECT * FROM lecturerData WHERE Name='$mytextbox2'");

	if($record = mysqli_fetch_array($disp))
		{
		echo "<br /> <b>Name</b>:".$record['Name'];
		echo "<br /> <b>Faculty</b>:".$record['Faculty'];
		echo "<br /> <b>Laptop Model</b>:".$record['laptopModel'];
		echo "<br /> <b>Serial Number</b>:".$record['serialNumber'];
		}

		else{
			echo"Lecturer Not Present in the Database!!";
		}

?>
