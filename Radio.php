<?php
require_once 'Tag.php';

class Radio extends Tag
{
  public function __construct()
  {
      $this->setAtrr('type','radio');
      parent::__construct('input');
  }

  public function open()
  {
      $name = $this->getElem('name');
      if ($name){
          if (isset($_REQUEST[$name])){
              $value = $_REQUEST[$name];
              if ($this->getElem('value') == $value){
                  $this->setAtrr('checked');
              }
              else{
                  $this->removeAttr('checked');
              }
          }
      }
      return parent::open();
  }

    public function __toString()
  {
      return $this->open();
  }
}