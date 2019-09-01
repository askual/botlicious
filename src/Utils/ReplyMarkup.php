<?php 


namespace Botlicious\Utils;

class ReplyMarkup
{

    private $type;
    private $markup;
    private $row = -1;
    private $column = 0;

    public function __construct($type = 'inline_keyboard') {
        $this->type = $type;
        if($this->type == 'inline_keyboard'){
            $this->markup = array(
                "inline_keyboard" => array(array(array()))
            );
        }
    }

    public function addRow($text, $callback_data)
    {
        $this->row++;
        $this->markup['inline_keyboard'][$this->row][0]['text'] = $text;
        $this->markup['inline_keyboard'][$this->row][0]['callback_data'] = $callback_data;

        $this->column = 1;
    }

    public function appendColumn($text, $callback_data)
    {
        $this->markup['inline_keyboard'][$this->row][$this->column]['text'] = $text;
        $this->markup['inline_keyboard'][$this->row][$this->column]['callback_data'] = $callback_data;

        $this->column++;
    }

    public function get()
    {
        return json_encode($this->markup, true);
    }


}