<?php 
/** url-shortener project by GitHub user @seb646. Source: https://github.com/seb646/url-shortener. */

// Import Shortener Class
require_once 'assets/classes/Shortener.php';

// Import MySQL dataabse onnection information
require_once 'assets/db_connect.php';

if(isset($_GET['code'])){
	$s = new Shortener;
	$code = $_GET['code'];

	db_connect()->query("UPDATE links SET clicks = clicks + 1 WHERE code = '{$code}'");
	db_connect()->close();

	// Redirect to URL from MySQL entry
	if($url = $s->getUrl($code)){
		header("Location: {$url}");
		die();
	}
}