<?php
require_once 'Tag.php';

class Select extends Tag
{
    private $options=[];

    public function __construct()
    {
        parent::__construct('select');
    }

    public function add(Option $option)
    {
        $this->options[] = $option;
        return $this;
    }

    public function show()
    {
        $name = $this->getElem('name');
        if ($name){
            $item = $_REQUEST[$name] ?? null;
        }

        $result = $this->open();
        foreach ($this->options as $option) {
            if ($item == $option->getText()){
                $option->setSelected();
            }
            $result .= $option->show();
        }
        $result .= $this->close();
        return $result;
    }
}