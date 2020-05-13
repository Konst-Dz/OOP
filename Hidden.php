<?php
require_once 'Input.php';

class Hidden extends Input
{
    public function __construct()
    {
        $this->setAtrr('type','hidden');
        parent::__construct('input');
    }
}