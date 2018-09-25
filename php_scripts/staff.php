<?php
	include "EshiwaniConnection.php";

	if(isset($_REQUEST['ClickMe']))
	{
		$jina = $_REQUEST['jina'];
		$john = $_REQUEST['john'];
		$model = $_REQUEST['model'];
		$serial = $_REQUEST['serial'];

		$insert = "insert into studentData(Name,Course,laptopModel,serialNumber) values ('$jina', '$john', '$model','$serial')";
		mysqli_query($link,$insert) or die("Cannot Execute Query".msqli_error($link));
		echo "Data inserted successfully!!!"
	};

	header ("location: ./"index.html");

?>