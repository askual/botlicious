<?php 

namespace Botlicious\Types;

class CallbackQuery
{
    // Unique identifier for this query
    public $id;
    // Sender
    public $from;

    // Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
    public $message;
    // Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
    public $chat_instance;
    // Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
    public $data;

    public function __construct( array $callback_query_array  ) {
        $this->id = $callback_query_array['id'];
        
        $this->from = new \Botlicious\Types\User($message_array['from']);
        if(isset($callback_query_array['message']))
            $this->message = new Message($callback_query_array['message']);
        if(isset($callback_query_array['chat_instance']))
            $this->data = $callback_query_array['chat_instance'];
        if(isset($callback_query_array['data']))
            $this->data = $callback_query_array['data'];

    }


}