<?php 


namespace Botlicious\Types;

class Update
{
    
    // The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
    public $update_id;
    // Optional. New incoming message of any kind — text, photo, sticker, etc.
    public $message;
    // New incoming callback query
    public $callback_query;

    
    public function __construct( array $update_array ) {
        $this->update_id = $update_array['update_id'];
        if(isset($update_array['message']))
            $this->message = new \Botlicious\Types\Message($update_array['message']) ;
        if(isset($update_array['callback_query']))
            $this->callback_query = new \Botlicious\Types\CallbackQuery($update_array['callback_query']);
    }


    public function getType()
    {
        
        if ($this->message) {
            
            if($this->message->isCommand())
                return 'command';
            elseif($this->message->contact)
                return "contact";
            else
                return 'text';
        }
        if($this->callback_query){
            return 'callbackquery';
        }
    }

}
