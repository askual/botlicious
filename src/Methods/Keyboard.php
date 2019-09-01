<?php 

namespace Botlicious\Methods;


trait Keyboard
{


    // public function KeyboardButton($text, $request_contact = false, $request_location = false)
    // {
    //     return (object)['text'=>$text,'request_contact'=> $request_contact, 'request_location' => $request_location];
    // }

    public function answerCallbackQuery( $callback_query_id, $text=null, $show_alert=null, $url=null, $cache_time=null)
    {
        fire_method('answerCallbackQuery',$this->chat_id,compact(
            'callback_query_id', 'text', 'show_alert', 'url', 'cache_time'
        ));
        
    }

    

}