<?php 

namespace Botlicious\Methods;


trait Chat
{


    // @param $action = Type of action to broadcast. Choose one, depending on what the user is about to receive: typing for text messages, upload_photo for photos, record_video or upload_video for videos, record_audio or upload_audio for audio files, upload_document for general files, find_location for location data, record_video_note or upload_video_note for video notes.
    public function sendChatAction($action)
    {
        fire_method('sendChatAction',$this->chat_id,compact(
            'action'
        ));
    }

    

}