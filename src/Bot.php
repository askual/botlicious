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

    protected static $instance = null;
    
    public static function getInstance($update = null)
    {
        if (self::$instance == null)
        {
            self::$instance = new \Bot\Bot($update);
        }
        return self::$instance;
    }

    function __construct( $update) {
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

    

    protected function handleCommand($command)
    {
        $realCommand = explode(' ',$command)[0];
        $realCommand = explode('?',$realCommand)[0];
        if(!isset($this->commands[$realCommand])){
            \logMessage($command, 'wrong_commands');
            $err = new \Botlicious\Commands\ErrorCommand;
            $err->execute($realCommand, $command);
        }
        $this->commands[$realCommand]->execute($realCommand, $command);
    }
    
}
