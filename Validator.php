<?php

class Validator
{
    public function isEmail($str)
    {
        // проверяет строку на то, что она корректный email
        return preg_match('#^[a-z0-9\._-]+@[a-z0-9_-]+\.[a-z0-9]{2,3}$#i',$str);
    }

    public function isDomain($str)
    {
        // проверяет строку на то, что она корректное имя домена
        return preg_match('#^[a-z0-9\._-]+\.[a-z0-9]{2,3}$#i',$str);
    }

    public function inRange($num, $from, $to)
    {
        // проверяет число на то, что оно входит в диапазон
        $arr = range($from,$to);
        return (in_array($num,$arr));
    }

    public function inLength($str, $from, $to)
    {
        // проверяет строку на то, что ее длина входит в диапазон
        $count = mb_strlen($str);
        return $this->inRange($count,$from,$to);
    }
}