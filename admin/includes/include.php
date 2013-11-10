<?php
	@ob_start();
	@session_start();

	require('dbconnection.php');                           // Database connection
	require('function.php');  
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	ini_set("display_errors", 0);
	date_default_timezone_set('Asia/Calcutta');
	$script_tz = date_default_timezone_get();

	
	$list_of_currency = array('us','aus','can','hong','jap','new','sing','brit','euro');
	

	$currency = (isset($_POST['currency']) ? $_POST['currency'] : (isset($_SESSION['site_currency']) ? $_SESSION['site_currency'] : 'us') );
	
	
	if(in_array($currency, $list_of_currency)) {
		$site_currency = $currency;
	} else {
		$site_currency = (isset($_SESSION['site_currency']) ? $_SESSION['site_currency'] : 'us');
	}
	
	$_SESSION['site_currency'] = $site_currency;
	

	
  ?>