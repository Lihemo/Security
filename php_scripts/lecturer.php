<?php
 //this code is for submitting data to the database from  the lecturer form.
	include "EshiwaniConnection.php";

	if(isset($_REQUEST['ClickMe_Two']))
	{
		$car = $_REQUEST['car'];
		$chair = $_REQUEST['chair'];
		$old = $_REQUEST['old'];
		$gender = $_REQUEST['gender'];

		$insert = "insert into lecturerData(Name,Faculty,laptopModel,serialNumber) values ('$car', '$chair', '$old','$gender')";
		mysqli_query($link,$insert) or die("Cannot Execute Query".msqli_error($link));
	};

	header ("location: ./ index.html");

?>