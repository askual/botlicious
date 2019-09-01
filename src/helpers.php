<?php 


function load_env()
{
    $dotenv = \Dotenv\Dotenv::create(__DIR__."/../");
    $dotenv->load();
}


function set_webhook($host, $self)
{
    load_env();
    if (getenv('DEV') == true) {
        $actual_link = 'https://'.$host.$self;
        $url = substr($actual_link,0,strlen($actual_link)-7 )."hook.php";
        
        $u = tg_api().'setwebhook?url='.$url;
        $result = file_get_contents($u);
        $json = json_decode($result);
        echo $json->description;
    }
}

function delete_webhook()
{
    $u = tg_api().'deleteWebhook';
    $result = file_get_contents($u);
    $json = json_decode($result);
    echo $json->description;
}



function tg_api()
{
    load_env();

    $tg_api = "https://api.telegram.org/bot".getenv('BOT_API_KEY');
    return $tg_api;
}



function fire_method($method, $chat_id, $compact_args)
{
    $url = tg_api().$method."?chat_id=".$chat_id;
    foreach($compact_args as $key => $arg){
        if($arg !== null){
            $url .= "&".$key."=".$arg;
        }
    }

    $e = file_get_contents($url);
}



function logMessage($text, $mode='normal')
{
    $fp = fopen(__DIR__.'/../assets/logs/'.date('Y-m-d')."-".$mode.'.txt', 'a');
    fwrite($fp, $text.PHP_EOL);
    fclose($fp);
}



