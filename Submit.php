<?php
require_once 'Input.php';

class Submit extends Input
{
    public function __construct()
    {
        $this->setAtrr('type','submit');
        parent::__construct();
    }

}