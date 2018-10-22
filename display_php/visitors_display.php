<?php
//this code is for displaying data(records) from the various tables in the database
include "EshiwaniConnection.php";

$mytextbox = $_POST['mytextbox'];

echo "<h3>Student</h3>";
$disp= mysqli_query($con,"SELECT * FROM studentData WHERE Name='$mytextbox'");

	if($record = mysqli_fetch_array($disp))
		{
		echo $record['Name'];
		echo $record['Course'];
		echo $record['laptopModel'];
		echo $record['serialNumber'];
		echo "<br/>";
		}

		else{
			echo"Student Not in the Database!!";
		}

?>
