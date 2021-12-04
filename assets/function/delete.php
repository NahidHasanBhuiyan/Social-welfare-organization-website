<?php
	include_once("func.php");
	
	$key = $_GET['sl'];

	$conn->query("DELETE FROM `status` WHERE `status`.`sl` = $key");
	header("location: ../../login.php");

?>