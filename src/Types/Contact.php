<?php 
namespace Botlicious\Types;

class Contact
{
    // Contact's phone number
    public $phone_number;  
    // Contact's first name
    public $first_name;  

    // Optional. Contact's last name
    public $last_name;  
    // Optional. Contact's user identifier in Telegram
    public $user_id;  
    // Optional. Additional data about the contact in the form of a vCard
    public $vcard;  

    public function __construct($contact_array) {
        $this->phone_number = $contact_array['phone_number'];
        $this->first_name = $contact_array['first_name'];

        if(isset($contact_array['last_name']))
            $this->last_name = $contact_array['last_name'];
        if(isset($contact_array['user_id']))
            $this->user_id = $contact_array['user_id'];
        if(isset($contact_array['vcard']))
            $this->vcard = $contact_array['vcard'];
    }

}