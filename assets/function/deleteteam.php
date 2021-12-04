<?php
	include_once("func.php");
	
	$ke = $_GET['sl'];

	$conn->query("DELETE FROM `team` WHERE `team`.`sl` = $ke");
	header("location: ../../login.php");

?>