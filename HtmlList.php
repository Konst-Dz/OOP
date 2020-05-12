<?php
require_once 'Tag.php';

class HtmlList extends Tag
{
    protected $li = [];

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function addItem(ListItem $li){
        $this->li[] = $li;
        return $this;
    }

    public function show()
    {
        $result = $this->open();
        foreach ($this->li as $item) {
            $result .= $item;
        }
        $result .=$this->close();
        return $result;
    }

    public function __toString()
    {
        return $this->show();
    }

}