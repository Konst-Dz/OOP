<?php


class TagHelper
{
    public function open($name, $attrs = [])
    {
        $attrsStr = $this->getAttrsStr($attrs);
        return "<$name $attrsStr>";
    }

    public function close($name)
    {
        return "</$name>";
    }

    public function show($name, $text)
    {
        return $this->open($name) ."$text" . $this->close($name);
    }

    private function getAttrsStr($attrs)
    {
        if (!empty($attrs)){
            $result = '';
            foreach ($attrs as $key => $value) {
                if ($value === true){
                    $result .= "$key";
                }
                else{
                    $result = " $key = \"$value\" ";
                }
                return $result;
            }
        }
        else{
            return '';
        }
    }


}