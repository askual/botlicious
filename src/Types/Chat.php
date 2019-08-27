<?php 

namespace Botlicious\Types;

class Chat
{
    
    // Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
    public $id;
    // Type of chat, can be either “private”, “group”, “supergroup” or “channel”
    public $type;

    // Optional. Title, for supergroups, channels and group chats
    public $title;
    // Optional. Username, for private chats, supergroups and channels if available
    public $username;
    // Optional. First name of the other party in a private chat
    public $first_name;
    // Optional. Last name of the other party in a private chat
    public $last_name;


    public function __construct( array $chat_array  ) {
        $this->id = $chat_array['id'];
        $this->type = $chat_array['type'];

        $this->title = $chat_array['title'] ?? null;
    }


}
