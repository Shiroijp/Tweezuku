<?php	
	session_start();
	require_once 'abraham/twitteroauth.php';
	require_once 'config.php';

	$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION["twitter_token"], $_SESSION["twitter_secret"]);
	$twitter->post('statuses/update', array('status' => $_REQUEST['msg']));
?>
