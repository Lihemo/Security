<?php
//this code is for displaying data(records) from the various tables in the database
include "/opt/lampp/htdocs/security/php_scripts/EshiwaniConnection.php";

$mytextbox5 = $_POST['mobiledisplay'];

echo "<h3>Mobile</h3>";
$disp= mysqli_query($con,"SELECT * FROM mobileData WHERE Name='$mytextbox5'");

	if($record = mysqli_fetch_array($disp))
		{
		echo "<br /> <b>Name</b>:".$record['Name'];
		echo "<br /> <b>ID Number</b>:".$record['IDNumber'];
		echo "<br /> <b>Phone Model</b>:".$record['PhoneModel'];
		echo "<br /> <b>IMEI Number</b>:".$record['IMEINumber'];
		}

		else{
			echo"Phone Not Present in the Database!!";
		}

?>
