<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'e56ffd6be24dd42195a71a2a497bd3b5';
$access_token  = 't7bnaCaeSuEE0aoqaxVkf+aDhNzuvBWRquyHLR13FHiz7wl2/fz6LhAGeJpcm3P01ZlGIiZn+nNNR7/+z892H4bJG5OUTuTm872YLrDe8u9MGZ0vGBXsd1Uc4yQ8ds4g5zmmXxa1KB6JWdLvNbwYmwdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
