<?php
require_once 'Tag.php';

class Textarea extends Tag
{
    public function __construct()
    {
        parent::__construct('textarea');
    }

    public function show()
    {
        $textName = $this->getElem('name');
        if ($textName){
            if (isset($_REQUEST[$textName])){
                $textName = $_REQUEST[$textName];
                $this->setText($textName);
            }
        }
        return parent::show();
    }

}