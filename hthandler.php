<?php
include("admin/includes/include.php"); 
define( 'SITE', "http://".$_SERVER['HTTP_HOST'].str_replace(basename($_SERVER['PHP_SELF']),"",$_SERVER['PHP_SELF']) );
$reqs = str_replace(".php","",str_replace("buy-","",$_GET['rt']));
if(preg_match('/^buy-/i', $_GET['rt'],$matches)) {

	$content = file_get_contents(SITE."product.php?name=$reqs&site_currency=".$_SESSION['site_currency']);
	echo $content;
} else {
	header("HTTP/1.0 404 Not Found");
	header('Location: 404.php');
}

?>