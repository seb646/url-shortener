<?php 
require_once 'assets/classes/Shortener.php';

if(isset($_GET['code'])){
	$s = new Shortener;
	$code = $_GET['code'];

	$mysqli = mysqli_connect("localhost", "USERNAME", "PASSWORD", "surl");
	$mysqli->query("UPDATE links SET clicks = clicks + 1 WHERE code = '{$code}'");
	$mysqli->close();

	// Redirect to URL from MySQL entry
	if($url = $s->getUrl($code)){
		header("Location: {$url}");
		die();
	}
}