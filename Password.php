<?php
require_once 'Input.php';

class Password extends Input
{
    public function __construct()
    {
        $this->setAtrr('type','password');
        parent::__construct();
    }

}