<?php
session_start();
require_once 'abraham/twitteroauth.php';
require_once 'config.php';

$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['temp_token'], $_SESSION['temp_token_secret']);

$twitter_token = $twitter->getAccessToken($_REQUEST['oauth_verifier']);

if ($twitter->http_code == 200)
{
	//Verificado
	$_SESSION['twitter_token']  = $twitter_token["oauth_token"];
	$_SESSION['twitter_secret'] = $twitter_token["oauth_token_secret"];
	$_SESSION['twitter_status'] = true;
	header("Location: index.php");
} 
else 
{
	//No está verificado
	Echo "Error";
}

?>

