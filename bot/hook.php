<?php

require '../vendor/autoload.php';

$content = file_get_contents("php://input");
$updateArray = json_decode($content, true);
logMessage( json_encode($updateArray) , 'everything');
$update = new \Botlicious\Types\Update($updateArray);

try {

    $bot = \Bot\Bot::getInstance($update);
    $bot->setCommands([
        
        new \Bot\Commands\StartCommand,
        new \Bot\Commands\HelpCommand,

    ]);
    
    $bot->run();
    

} catch (\Exception $e) {
    logMessage($e->message.PHP_EOL,'errors');
}
