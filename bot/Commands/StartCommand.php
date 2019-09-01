<?php 

namespace Bot\Commands;

class StartCommand extends \Botlicious\Contracts\Command
{

    public $handlers = ['/start'];


    public function execute($input, $full_input)
    {
        $inputs = \explode(' ', $full_input);
        $reply_text = 'Hello!! ';
        if(\sizeof($inputs) > 1){
            $reply_text.= 'Your referee is '.$inputs[1];
        }

        $bot = \Bot\Bot::getInstance();
        $bot->sendChatAction('typing');
        // $bot->sendMessage($reply_text);
        // "parse_mode": ,
        // "reply_markup": {
        //     "one_time_keyboard": true,
        //     "keyboard": [
            //     [{
        //         text: "My phone number",
        //         request_contact: true
        //     }], ["Cancel"]]
        // }

        $arr = (object) array('one_time_keyboard'=>true, 'keyboard' =>  [  
            [(object)["text"=> "haha","request_contact" => true] ], ["cancel"]   
        ]);


        $bot->sendMessage('yellow', "Markdown", \json_encode($arr) );


           $arr = (object) array('one_time_keyboard'=>true, 'keyboard' =>  [  
            [(object)["text"=> "Main Menu"] ]   
        ]);
        $bot->sendMessage('yellow', "Markdown", \json_encode($arr) );

    }
    
}
