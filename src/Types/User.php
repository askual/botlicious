<?php 


namespace Botlicious\Types;

class User
{
    // Unique identifier for this user or bot
    public $id;
    // True, if this user is a bot
    public $is_bot;
    // User‘s or bot’s first name
    public $first_name;

    // Optional. User‘s or bot’s last name
    public $last_name;
    // Optional. User‘s or bot’s username
    public $username;
    // Optional. IETF language tag of the user's language
    public $language_code;

    public function __construct( array $user_array  ) {
        $this->id = $user_array['id'];
        $this->is_bot = $user_array['is_bot'];
        $this->first_name = $user_array['first_name'];

        $this->last_name = $message_array['last_name'] ?? null;
        $this->username = $message_array['username'] ?? null;
        $this->language_code = $message_array['language_code'] ?? null;

    }


}
