<?php

class FileManipulator
{
    public function create($filePath)
    {
        // создает файл
        file_put_contents($filePath,'');
        return $this;
    }

    public function delete($filePath)
    {
        unlink($filePath);
        return $this;
    }

    public function copy($filePath, $copyPath)
    {
        copy($filePath,$copyPath);
        return $this;
    }

    public function rename($filePath, $newName)
    {
        // переименовывает файл
        // вторым параметром принимает новое имя файла (только имя, не путь)
        rename($filePath,$newName);
        return $this;
    }

    public function replace($filePath, $newPath)
    {
        rename($filePath,$newPath);
        return $this;
    }

    public function weigh($filePath)
    {
        // узнает размер файла
        return filesize($filePath);
    }
}