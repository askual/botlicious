<?php 

namespace Botlicious\Methods;


trait Message
{

    /*
    *   @param chat_id : Integer or String : Unique identifier for the target chat or username of the target channel (in the format @channelusername)
    *   @param text: Text of the message to be sent
    *   @param parse_mode: Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
    *   @param disable_web_page_preview: Disables link previews for links in this message
    *   @param disable_notification: Sends the message silently. Users will receive a notification with no sound.
    *   @param reply_to_message_id: If the message is a reply, ID of the original message
    *   @param reply_markup: Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
    */
    public function sendMessage($text, $parse_mode = null, $reply_markup=null, $disable_web_page_preview=false, $disable_notification=false, $reply_to_message_id=null)
    {
        fire_method('sendMessage',$this->chat_id,compact(
            'text', 'parse_mode', 'disable_web_page_preview', 'disable_notification', 'reply_to_message_id', 'reply_markup'
        ));
    }

    public function forwardMessage()
    {
        
    }

    public function pinChatMessage()
    {
        
    }

    public function unpinChatMessage()
    {
        # code...
    }


    // EDITING
    public function editMessageText($text, $message_id = null, $inline_message_id=null, $parse_mode=null, $disable_web_page_preview=null, $reply_markup=null)
    {
        fire_method('editMessageText',$this->chat_id,compact(
            'text', 'message_id', 'inline_message_id', 'parse_mode', 'disable_web_page_preview', 'reply_markup'
        ));
    }

    public function editMessageCaption( $message_id = null, $inline_message_id = null, $caption = null, $parse_mode = null, $reply_markup = null)
    {
        fire_method('editMessageCaption',$this->chat_id,compact(
            'message_id', 'inline_message_id', 'caption', 'parse_mode', 'reply_markup'
        ));
    }

    public function editMessageMedia( $message_id = null, $inline_message_id = null, $media = null, $reply_markup = null)
    {
        fire_method('editMessageMedia',$this->chat_id,compact(
            'message_id', 'inline_message_id', 'media', 'reply_markup'
        ));
    }
    
    public function editMessageReplyMarkup( $message_id = null, $inline_message_id = null, $reply_markup = null)
    {
        fire_method('editMessageReplyMarkup',$this->chat_id,compact(
            'message_id', 'inline_message_id', 'reply_markup'
        ));
    }

    public function stopPoll( $message_id = null, $reply_markup = null)
    {
        fire_method('stopPoll',$this->chat_id,compact(
            'message_id', 'reply_markup'
        ));
    }

    public function deleteMessage( $message_id = null)
    {
        fire_method('deleteMessage',$this->chat_id,compact(
            'message_id'
        ));
    }

    



}
