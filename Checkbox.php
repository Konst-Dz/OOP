<?php
require_once 'Tag.php';

class Checkbox extends Tag
{
    public function __construct()
    {
        $this->setAtrr('type', 'checkbox');
        $this->setAtrr('value', '1');
        parent::__construct('input');
    }

    public function open()
    {
        $name = $this->getElem('name');
        if ($name){
            $hidden = (new Hidden()) ->setAtrr('name',$name)->setAtrr('value','0');
            if (isset($_REQUEST[$name])){
                $value = $_REQUEST[$name];
                if ($value == 1){
                    $this->setAtrr('checked');
                }
                else{
                    $this->removeAttr('checked');
                }
            }
            return $hidden->open() . parent::open();
            }
            else{
                return parent::open();
            }

    }

    public function __toString()
    {
        return $this->open();
    }
}