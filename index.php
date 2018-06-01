
	<?php
	$botToken = "557598202:AAH1LecDrrTUdVVSmRhCs3GzyJHv5wT2k0Y";
	$website = "https://api.telegram.org/bot".$botToken;

	$update = file_get_contents("php://input");
	$update = json_decode($update, TRUE);

	$chatId = $update["message"]["chat"]["id"];
	$name = $update["message"]["chat"]["id"]["first_name"];
	$message = $update["message"]["text"];

	$agg = json_decode($update, JSON_PRETTY_PRINT );

	sendMessage($chatId,"Hello $name! and welcome to Airchain Channel");
	
	function sendMessage ($chatId, $message) {
		$url = $GLOBALS['website']."/sendMessage?chat_id=".$chatId."&text=".urldecode($message);
		file_get_contents($url);
	}

		
?>
