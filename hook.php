<?php

require 'vendor/autoload.php';

$content = file_get_contents("php://input");
$updateArray = json_decode($content, true);
logMessage($content);


$update = new \Botlicious\Types\Update($updateArray);

try {

    $bot = \Botlicious\Bot::getInstance($update);
    
    $bot->setCommands([
        new \Botlicious\Commands\StartCommand,
        new \Botlicious\Commands\HelpCommand,
        // Other commands
    ]);
    
    $bot->run();
    

} catch (\Exception $e) {
    logMessage($e->message.PHP_EOL,'error');
}
