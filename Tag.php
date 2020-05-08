<?php


class Tag
{
    private $name;
    private $attr = [];
    public function __construct($name)
    {
        $this->name=$name;
    }

    public function open(){
        $name = $this->name;
        $str = $this->getAttrStr($this->attr);
        return "<$name $str>";
    }

    public function close(){
        return "</$this->name>";
    }

    public function setAtrr($key,$value){
        $this->attr[$key] = $value;
        return $this;
    }

    public function removeAttr($key){
        unset($this->attr[$key]);
        return $this;
    }
    public function setAtrs($arrAtr){
        foreach ($arrAtr as $key=>$item) {
            $this->setAtrr($key,$item);
        }
        return $this;
    }

    private function getAttrStr($atrr)
    {
        if(!empty($atrr)){
            $str = '';
            foreach ($atrr as $key => $value) {
                if ($value === true){
                    $str .=  $key ;
                }
                else {
                    $str .= " $key = \"$value\" ";
                }
            }
            return $str;
        }
        else{
            return '';
        }
    }
}