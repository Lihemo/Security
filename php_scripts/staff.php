<?php
  //this code is for submitting data to the database from the staff form.
	include "EshiwaniConnection.php";

	if(isset($_REQUEST['ClickMe_three']))
	{
		$dart = $_REQUEST['dart'];
		$shade = $_REQUEST['shade'];
		$bet = $_REQUEST['bet'];
		$polite = $_REQUEST['polite'];

		$insert = "insert into staffData(Name,Department,laptopModel,serialNumber) values ('$dart', '$shade', '$bet','$polite')";
		mysqli_query($link,$insert) or die("Cannot Execute Query".msqli_error($link));
	};

	header ("location: ./ index.html");

?>