<?php 

namespace Botlicious\Types;

class Message
{
    
    // Unique message identifier inside this chat
    public $message_id;
    // Conversation the message belongs to
    public $chat;
    // Date the message was sent in Unix time
    public $date;

    // Optional. Sender, empty for messages sent to channels
    public $from;
    // Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters.
    public $text;
    // Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
    public $entities = [];
    // Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
    public $reply_to_message;
    // Optional. Message is a shared contact, information about the contact
    public $contact;

    public function __construct( array $message_array  ) {
        $this->message_id = $message_array['message_id'];
        $this->chat = new \Botlicious\Types\Chat($message_array['chat']);
        $this->date = $message_array['date'];
        $this->text = $message_array['text'] ?? null;
        if(isset($message_array['from']))
            $this->from = new \Botlicious\Types\User($message_array['from']);
        if(isset($message_array['reply_to_message']))
            $this->reply_to_message = new \Botlicious\Types\Message($message_array['reply_to_message']);
        if(isset($message_array['contact']))
            $this->contact = new \Botlicious\Types\Contact($message_array['contact']);
        

        if(isset($message_array['entities'])){
            foreach($message_array['entities'] as $entity){
                $this->entities[] = new MessageEntity($entity);
            }
        }
    }


    public function isCommand( )
    {
        foreach ($this->entities as $entity) {
            if($entity->type == "bot_command"){
                return true;
            }
        }
        return false;
    }


}
