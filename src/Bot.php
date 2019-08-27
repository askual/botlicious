<?php 

namespace Botlicious;

class Bot
{
    use \Botlicious\Methods\Message;
    use \Botlicious\Methods\Chat;
    use \Botlicious\Methods\Keyboard;
    use \Botlicious\Methods\Multimedia;

    public $update;
    public $chat_id;
    public $commands = [];

    private static $instance = null;
    
    public static function getInstance($update = null)
    {
        if (self::$instance == null)
        {
            self::$instance = new Bot($update);
        }
        return self::$instance;
    }

    private function __construct( $update) {
        $this->update = $update;
        $this->chat_id = $update->message->chat->id;
    }

    public function setCommands(array $commands)
    {
        foreach ($commands as $command) {
            foreach ($command->handlers as $handler) {
                $this->commands[$handler] = $command;
            }
        }
    }

    public function run()
    {

        $type = $this->update->getType();
        \logMessage($type,'type2');

        switch ($type) {
            case 'command':
                $t = $this->update->message->text;
                $this->handleCommand($t);
                break;
            case 'text':
                $t = $this->update->message->text;
                $this->sendMessage($t .' too');
                break;
            case 'contact':
                $this->sendMessage('THe Contact too', null, \json_decode((object)['hide_keyboard'=>true]));
                break;
            case 'callbackquery':
                $this->answerCallbackQuery($this->update->callback_query->id, 'hjhjkhjh');
                $this->chat_id = $this->update->callback_query->message->chat->id;
                $this->sendMessage('niceeeeee');
                break;
            
            default:

                break;
        }

    
    }

    private function handleCommand($command)
    {
        $realCommand = explode(' ',$command)[0];
        $realCommand = explode('?',$realCommand)[0];
        if(!isset($this->commands[$realCommand])){
            \logMessage($command, 'qwerty');
            $err = new \Botlicious\Commands\ErrorCommand;
            $err->execute($realCommand, $command);
        }
        $this->commands[$realCommand]->execute($realCommand, $command);
    }
    
}
