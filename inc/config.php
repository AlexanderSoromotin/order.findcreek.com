<?php

include_once 'secret.php';

$link = 'https://order.findcreek.com';
$localSiteLink = 'http://order-findcreek.com';

$mainUrl = "https://findcreek.com";
$idUrl = "https://id.findcreek.com";
$apiUrl = "https://api.findcreek.com";
$cloudUrl = "https://cloud.findcreek.com";
$markUrl = "https://mark.findcreek.com";
$mateUrl = "https://mark.findcreek.com";

$wsUrl = "wss://api.findcreek.com";

if ($localSite) {
	$link = $localSiteLink;	
	$apiUrl = "http://api-findcreek.com";
	$idUrl = "http://id-findcreek.com";
	$wsUrl = "ws://localhost";

	// error_reporting(E_ERROR | E_PARSE);
	error_reporting(0); 
}

$connection_apiFindcreek;
$connection_findcreekId;
$connection_mark;

$dbConnectParams = array(
	"findcreek_id" => array(
		"db_url" => "localhost",
		"db_username" => "findcreek",
		"db_password" => $db_password,
		"db_name" => "findcreek_id"
	),
	"findcreek_api" => array(
		"db_url" => "localhost",
		"db_username" => "findcreek",
		"db_password" => $db_password,
		"db_name" => "findcreek_api"
	),
	"findcreek_mark" => array(
		"db_url" => "localhost",
		"db_username" => "findcreek",
		"db_password" => $db_password,
		"db_name" => "mark"
	)
);

if ($localSite) {
	$dbConnectParams['findcreek_id']['db_url'] = "127.0.0.1"; 
	$dbConnectParams['findcreek_id']['db_username'] = "root";
	$dbConnectParams['findcreek_id']['db_password'] = "";

	$dbConnectParams['findcreek_api']['db_url'] = "127.0.0.1"; 
	$dbConnectParams['findcreek_api']['db_username'] = "root";
	$dbConnectParams['findcreek_api']['db_password'] = "";

	$dbConnectParams['findcreek_mark']['db_url'] = "127.0.0.1"; 
	$dbConnectParams['findcreek_mark']['db_username'] = "root";
	$dbConnectParams['findcreek_mark']['db_password'] = "";

	$link = $localSiteLink;	
	$idUrl = "http://id-findcreek.com";
	// $apiUrl = "http://api-findcreek.com";
	// $cloudUrl = "http://cloud-findcreek.com";
}

function openConnection ($systemName) {
	global $connection_apiFindcreek;
	global $connection_findcreekId;
	global $connection_mark;
	global $dbConnectParams;

	if ($systemName == 'findcreek_id') {
		$connection_findcreekId = mysqli_connect(
			$dbConnectParams[$systemName]['db_url'], 
			$dbConnectParams[$systemName]['db_username'], 
			$dbConnectParams[$systemName]['db_password'], 
			$dbConnectParams[$systemName]['db_name']
		);

		$connection_findcreekId -> set_charset("utf8mb4");
	}

	if ($systemName == 'findcreek_api') {
		$connection_apiFindcreek = mysqli_connect(
			$dbConnectParams[$systemName]['db_url'], 
			$dbConnectParams[$systemName]['db_username'], 
			$dbConnectParams[$systemName]['db_password'], 
			$dbConnectParams[$systemName]['db_name']
		);

		$connection_apiFindcreek -> set_charset("utf8mb4");
	}

	if ($systemName == 'findcreek_mark') {
		$connection_mark = mysqli_connect(
			$dbConnectParams[$systemName]['db_url'], 
			$dbConnectParams[$systemName]['db_username'], 
			$dbConnectParams[$systemName]['db_password'], 
			$dbConnectParams[$systemName]['db_name']
		);

		$connection_mark -> set_charset("utf8mb4");
	}
}

function closeConnection ($systemName) {
	global $connection_apiFindcreek;
	global $connection_findcreekId;
	global $connection_mark;

	if ($systemName == 'findcreek_id') {
		mysqli_close($connection_findcreekId);
	}

	if ($systemName == 'findcreek_api') {
		mysqli_close($connection_apiFindcreek);
	}

	if ($systemName == 'findcreek_mark') {
		mysqli_close($connection_mark);
	}
}