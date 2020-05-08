<?php
require_once "iFile.php";

class File implements iFile{

    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }
    public function getPath(){
        return realpath($this->filePath);
    } // путь к файлу
    public function getDir(){
        return pathinfo($this->filePath,PATHINFO_DIRNAME);
    }  // папка файла

    public function getName(){
        return pathinfo($this->filePath,PATHINFO_FILENAME);
    } // имя файла
    public function getExt(){
        return pathinfo($this->filePath,PATHINFO_EXTENSION);
    }  // расширение файла
    public function getSize(){
        return filesize($this->filePath);
    } // размер файла
    public function getText(){
        return file_get_contents($this->filePath,FALSE,NULL,6,4);
    }         // получает текст файла
    public function setText($text){
        $filename = $this->filePath;
        $file = fopen($filename, 'w');
        fwrite($file, $text);
        fclose($file);
    }     // устанавливает текст файла
    public function appendText($text){
        $currText=$this->filePath;
        $newTxt = &$text;
        file_put_contents($currText,$newTxt,FILE_APPEND|LOCK_EX);
        return file_get_contents($this->filePath);
    }  // добавляет текст в конец файла

    public function copy($copyPath){
        return copy($this->filePath,$copyPath) ? "Успех" : "НЕТ";
    }   // копирует файл
    public function delete(){
        return unlink($this->filePath);
    }           // удаляет файл
    public function rename($newName){
        if (rename($this->filePath,$newName)){
            $this->filePath = $newName;
            echo "Успех";
        }

    }   // переименовывает файл
    public function replace($newPath){
          return rename($this->filePath,$newPath) ? "Успех" : "НЕТ";
    }  // перемещает файл*/

}