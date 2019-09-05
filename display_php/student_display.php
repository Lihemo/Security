<?php
//this code is for displaying data(records) from the various tables in the database
include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

$mytextbox1 = $_POST['studentdisplay'];

echo "<h3>STUDENT</h3>";
$disp= mysqli_query($con,"SELECT * FROM studentData WHERE Name='$mytextbox1'");	

if($record = mysqli_fetch_array($disp))
	{
		echo "<br /> <b>Name</b>:" .$record['Name'];
		echo "<br /> <b>Course</b>:" .$record['Course'];
		echo "<br /> <b>Laptop Model</b>:" .$record['laptopModel'];
		echo "<br /> <b>Serial Number</b>:" .$record['serialNumber'];
	}

	else{
		echo"Student Not Present in the Database!!"; 
	} 

?>

