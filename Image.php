<?php

require_once "Tag.php";

class Image extends Tag
{
    public function __construct()
    {
        $this->setAtrr('src','')->setAtrr('alt','');
        parent::__construct('img');
    }

    public function __toString()
    {
        return parent::open();
    }

}