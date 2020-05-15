<?php

class DatabaseShell
{
    private $link;

    public function __construct($host, $user, $password, $database)
    {
        $this->link = mysqli_connect($host, $user, $password, $database);
        mysqli_query($this->link, "SET NAMES 'utf8'"); // устанавливаем кодировку
    }

    public function save($table, $data)
    {
        // сохраняет запись в базу
        $str='';
        foreach ($data as $key=>$datum) {
            $str .= "$key=$value ,";
        }
        $str = rtrim($str,',');

        $query = "INSERT INTO $table SET $str";
        mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    public function del($table, $id)
    {
        $query = "DELETE FROM $table WHERE id '$id' ";
        mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    public function delAll($table, $ids)
    {
        $str='';
        foreach ($data as $key=>$datum) {
            $str .= "$value ,";
        }
        $str = rtrim($str,',');

        $query = "DELETE FROM $table WHERE id IN ($str) ";
        mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    public function get($table, $id)
    {
        $query = "SELECT * FROM $table WHERE id = '$id' ";
        mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    public function getAll($table, $ids)
    {
        // получает массив записей по их id
        $str='';
        foreach ($data as $key=>$datum) {
            $str .= "$value ,";
        }
        $str = rtrim($str,',');

        $query = "SELECT * FROM $table WHERE id IN ($str) ";
        mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    public function selectAll($table, $condition)
    {
        // получает массив записей по условию
    }
}