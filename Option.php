<?php
require_once 'Tag.php';

class Option extends Tag
{
    public function __construct()
    {
        parent::__construct('option');
    }

    public function setSelected(){
        $this->setAtrr('selected');
        return $this;
    }

}