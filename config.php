<?php 

define( 'BOT_API_KEY' , '900389649:AAGIr3xJOATXqZ8bu9oELM41DsGBNd-mlPQ/');
define( 'BOT_USERNAME', 'deqiq_bot');
define( 'DEV', true);

function tg_api()
{
    $tg_api = "https://api.telegram.org/bot".BOT_API_KEY;
    return $tg_api;
}

function fire_method($method, $chat_id, $compact_args)
{
    $url = tg_api().$method."?chat_id=".$chat_id;
    foreach($compact_args as $key => $arg){
        if($arg !== null){
            $url .= "&".$key."=".$arg;
        }
        logMessage($url,'error');
    }

    $e = file_get_contents($url);
}



function logMessage($text, $mode='normal')
{
    $fp = fopen('log'.$mode.'.txt', 'a');
    fwrite($fp, $text.PHP_EOL);
    fclose($fp);
}