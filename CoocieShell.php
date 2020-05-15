<?php

class CookieShell
{
    public function set($name, $value, $time)
    {
        // устанавливает куки
        // $time задает время в сек, через сколько кука умрет
        setcookie($name, $value, time() + $time);
        $_COOKIE[$name] = $value;
        return $this;
    }

    public function get($name)
    {
        // получает куки
        return $_COOKIE[$name];
    }

    public function del($name)
    {
        // удаляет куки
        setcookie($name,'',time());
        $_COOKIE[$name] = null;
        return $this;
    }

    public function exists($name)
    {
        // проверяет наличие куки
        //var_dump($_COOKIE['$name']);
        return (isset($_COOKIE[$name]));
    }
}
