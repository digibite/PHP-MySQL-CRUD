<?php
include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
	$sql = "SELECT * FROM `company` WHERE `id` = " . mysqli_real_escape_string($dbConn, $_GET['id']) . " LIMIT 1";
	$result = dbQuery($sql);
	
	$row = dbFetchAssoc($result);
	
	echo json_encode($row);
} else {
	$sql = "SELECT * FROM company";
	$results = dbQuery($sql);
	
	$rows = array();
	
	while($row = dbFetchAssoc($results)) {
		$rows[] = $row;
	}
	// return company values from DB when index.php using JSON
	echo json_encode($rows);
}