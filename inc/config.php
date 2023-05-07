<?php

include_once 'secret.php';

if (!isset($localSite)) {
    $localSite = 0;
}

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



if ($localSite) {
	$link = $localSiteLink;	
	$idUrl = "http://id-findcreek.com";
	// $apiUrl = "http://api-findcreek.com";
	// $cloudUrl = "http://cloud-findcreek.com";
}

