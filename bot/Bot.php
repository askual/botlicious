<?php 

namespace Bot;
/**
 * 
 */
class Bot extends \Botlicious\Bot
{

	function __construct( $update) {
        parent::__construct($update);
    }
	
	public function run()
    {

        $type = $this->update->getType();

        switch ($type) {
            case 'command':
                $t = $this->update->message->text;
                $this->handleCommand($t);
                break;
            case 'text':
                $t = $this->update->message->text;

                switch ($t) {
                    case 'bekele':
                        $this->sendMessage('bekeeeeee'. $this->chat_id);
                        break;
                    
                    default:
                        $this->sendMessage('popo');
                        break;
                }
                
                break;
            case 'contact':
                $this->sendMessage('THe Contact too', null, \json_decode((object)['hide_keyboard'=>true]));
                break;
            case 'callbackquery':
                $this->answerCallbackQuery($this->update->callback_query->id, 'hjhjkhjh');
                $this->chat_id = $this->update->callback_query->message->chat->id;
                $this->sendMessage('niceeeeee');
                break;
            
            default:

                break;
        }
    }
}