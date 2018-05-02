<?php 
/** url-shortener project by GitHub user @seb646. Source: https://github.com/seb646/url-shortener. */

// Start a session 
session_start();

// Import Shortener class
require_once 'classes/Shortener.php';

$s = new Shortener;

if(isset($_POST['url'])){
	$url =  $_POST['url'];
	
	if($code = $s->makeCode($url)){
		// Display success message with shortened URL
		$_SESSION['alert'] = '<div class="alert alert-success" role="alert">Your short link is <a href="//'.$_SERVER['HTTP_HOST'].'/'.$code.'" target="_blank">'.$_SERVER['HTTP_HOST'].'/'.$code.'<a></div>';
	} else{
		// Display error message
		$_SESSION['alert'] = '<div class="alert alert-danger" role="alert">There was a problem with the URL you provided.</div>';
	}
}

header('Location: /index.php');