<?php 
session_start();
require_once 'abraham/twitteroauth.php';
require_once 'config.php';

if (!isset($_SESSION["twitter_status"]) || !$_SESSION["twitter_status"])
{	//Si no estamos logueados en Twitter
	$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	$twitter_temp = $twitter->getRequestToken(OAUTH_CALLBACK);
	$_SESSION['temp_token'] = $twitter_temp['oauth_token'];
	$_SESSION['temp_token_secret'] = $twitter_temp['oauth_token_secret'];

	$twitter_url = $twitter->getAuthorizeURL ($twitter_temp['oauth_token']);

	$enlace = "<div id='login'><a href='$twitter_url'><img src='img/sign.png' /></a></div>";
	echo $enlace;
}
else 
{	//Si ya estamos logueados en twitter
	$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION["twitter_token"], $_SESSION["twitter_secret"]);
	$user_info = $twitter->get('account/verify_credentials');
	echo "<div id='login' '><h2>Hola ".$user_info->name."!</h2></div>";
	//$twitter->post('statuses/update', array('status' => "Mensaje de prueba"));
}

?>