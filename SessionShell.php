<?php

class SessionShell
{
    // Удобно стартуем сессию в конструкторе класса:
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
        return $this;
    }

    public function get($name)
    {
        return $_SESSION[$name];
    }

    public function del($name)
    {
        $_SESSION[$name] = null;
        return $this;
    }

    public function exists($name)
    {
        return isset($_SESSION[$name]);
    }

    public function destroy()
    {
        session_destroy();
    }
}