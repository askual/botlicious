<?php 

namespace Botlicious\Types;

class MessageEntity
{

    // Type of the entity. Can be mention (@username), hashtag, cashtag, bot_command, url, email, phone_number, bold (bold text), italic (italic text), code (monowidth string), pre (monowidth block), text_link (for clickable text URLs), text_mention (for users without usernames)
    public $type;
    // Offset in UTF-16 code units to the start of the entity
    public $offset;
    // Length of the entity in UTF-16 code units
    public $length;

    // Optional. For “text_link” only, url that will be opened after user taps on the text
    public $url;
    // Optional. For “text_mention” only, the mentioned user
    public $user;

    public function __construct( array $message_entity_array  ) {
        $this->type = $message_entity_array['type'];
        $this->offset = $message_entity_array['offset'];
        $this->length = $message_entity_array['length'];
        
    }




}