<?php
require_once "Tag.php";

class Link extends Tag
{

    const CONSTANTLINK = 'activate';

    public function __construct()
    {
        parent::__construct('a');
        $this->setAtrr('href','');
    }

    private function activateSelf(){
        if($this->getElem('href') == $_SERVER['REQUEST_URI']){
            $this->addClass(self::CONSTANTLINK);
        }
    }

    public function open()
    {
        $this->activateSelf();
        return parent::open();
    }

}