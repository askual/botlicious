<?php 

namespace Botlicious\Commands;

class ErrorCommand extends Command
{

    public $error = true;


    public function execute($input, $full_input)
    {

        $bot = \Botlicious\Bot::getInstance();

        $keyboard = new \Botlicious\Utils\ReplyMarkup('inline_keyboard');
        $keyboard->addRow("📮የፈተና ውጤት📮","1");
        $keyboard->appendColumn("🛫 የምደባ ውጤት 🛬","2");
        $keyboard->addRow("📊 የሁሉም Subject የሃገር አቀፍ ደረጃዎች 📊","3");
        $keyboard->addRow("📊 የሁሉም Subject የሃገር አቀፍ ደረጃዎች 📊","4");
        $keyboard->appendColumn("🛫 የምደባ ውጤት 🛬","5");
        $text = "ይምረጡ 👇";
        $bot->sendMessage($text, null, $keyboard->get());
        // $bot->sendMessage('If loving you is wrong, I don\'t wanna be right');

    }
    
}
