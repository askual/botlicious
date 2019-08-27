<?php 

namespace Botlicious\Methods;


trait Multimedia
{

    public function sendDocument( $document, $thumb = null, $caption = null, $parse_mode = null, $disable_notification = false, $reply_to_message_id = null, $reply_markup = null)
    {
        $this->sendChatAction('upload_document');
        fire_method('sendDocument',$this->chat_id,compact(
            'document','thumb', 'caption', 'parse_mode', 'disable_notification', 'reply_to_message_id', 'reply_markup'
        ));
    }

    public function sendPhoto( $photo, $caption = null, $parse_mode = null, $disable_notification = false, $reply_to_message_id = null, $reply_markup = null)
    {
        fire_method('sendPhoto',$this->chat_id,compact(
            'photo', 'caption', 'parse_mode', 'disable_notification', 'reply_to_message_id', 'reply_markup'
        ));
    }

    public function sendAudio( $audio, $caption = null, $parse_mode = null,$duration=null, $performer = null, $disable_notification = false, $reply_to_message_id = null, $reply_markup = null)
    {
        fire_method('sendAudio',$this->chat_id,compact(
            'audio', 'caption', 'parse_mode', 'duration', 'performer', 'disable_notification', 'reply_to_message_id', 'reply_markup'
        ));
    }

    public function sendVideo( $video, $duration=null, $width = null, $height=null, $thumb=null, $caption=null,$parse_mode = null, $supports_streaming = null, $disable_notification = null, $reply_to_message_id=null, $reply_markup = null)
    {
        fire_method('sendVideo',$this->chat_id,compact(
            'video', 'duration', 'width', 'height', 'thumb', 'caption', 'parse_mode', 'supports_streaming', 'disable_notification', 'reply_to_message_id', 'reply_markup'
        ));
    }

    public function sendAnimation( $animation, $duration=null, $width = null, $height=null, $thumb=null, $caption=null,$parse_mode = null, $disable_notification = null, $reply_to_message_id=null, $reply_markup = null)
    {
        fire_method('sendAnimation',$this->chat_id,compact(
            'animation', 'duration', 'width', 'height', 'thumb', 'caption', 'parse_mode', 'disable_notification', 'reply_to_message_id', 'reply_markup'
        ));
    }

    public function sendVoice( $voice, $caption=null,$parse_mode = null, $duration = null, $disable_notification = null, $reply_to_message_id=null, $reply_markup = null)
    {
        fire_method('sendVoice',$this->chat_id,compact(
            'voice', 'caption', 'parse_mode', 'duration', 'disable_notification', 'reply_to_message_id', 'reply_markup'
        ));
    }

    
    public function sendVideoNote( $video_note, $duration = null, $length= null, $thumb=null, $disable_notification = null, $reply_to_message_id=null, $reply_markup = null)
    {
        fire_method('sendVideoNote',$this->chat_id,compact(
            'video_note', 'duration', 'length', 'thumb', 'disable_notification', 'reply_to_message_id', 'reply_markup'
        ));
    }

    public function sendMediaGroup( $media, $disable_notification = null, $reply_to_message_id=null)
    {
        fire_method('sendMediaGroup',$this->chat_id,compact(
            'media', 'disable_notification', 'reply_to_message_id'
        ));
    }



}