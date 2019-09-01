<?php 

namespace Bot\Commands;

class HelpCommand extends \Botlicious\Contracts\Command
{

    public $handlers = ['/help','/helpp'];


    public function execute($input, $full_input)
    {
        
        $bot = \Bot\Bot::getInstance();
        
        $bot->sendDocument('https://www.cs.cmu.edu/afs/cs.cmu.edu/user/gchen/www/download/java/LearnJava.pdf');
        $bot->sendMessage('3This is a help text. What can i help you?');

    }
    
}
