<?php
require_once "iTag.php";

class Tag implements iTag
{
    private $name;
    private $attr = [];
    private $text = '';

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

    public function setAtrr($key,$value=true){
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

    public function getElem($atr)
    {
        return ($this->attr[$atr]) ?  $this->attr[$atr] :  null;
    }

    public function addClass($className){
        if (!isset($this->attr['class'])){
            $this->attr['class'] = $className;
        }
        else{
            $classNames = $this->attr['class'];
            $arr = explode(" ",$classNames);
            if (!in_array($className,$arr)){
                $arr[] = $className;
                 $this->attr['class'] = implode(' ',$arr);
                 return $this;
            }
            else{
                return $this;
            }
        }
        return $this;
    }

    public function removeClass($className){
        if (isset($this->attr['class'])){
            $classNames = explode(' ',$this->attr['class']);
            if (in_array($className,$classNames)){
                $arr = $this->removeElem($className,$classNames);
                $this->attr['class'] = implode(" ",$arr);
            }
        }
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getAttr()
    {
        echo "<pre>".print_r($this->attr)."</pre>";
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function show()
    {
        $text = $this->text;
        return $this->open()."$text".$this->close();
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

    private function removeElem($elem,$arr){
        $key = array_search($elem,$arr);
        array_splice($arr,$key,1);
        return $arr;
    }
}