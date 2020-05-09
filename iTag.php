<?php

interface iTag
{
    // Геттер имени:
    public function getName();

    // Геттер текста:
    public function getText();

    // Геттер всех атрибутов:
    public function getAttr();

    // Геттер одного атрибута по имени:
    public function getElem($name);

    // Открывающий тег, текст и закрывающий тег:
    public function show();

    // Открывающий тег:
    public function open();

    // Закрывающий тег:
    public function close();

    // Установка текста:
    public function setText($text);

    // Установка атрибута:
    public function setAtrr($name, $value = true);

    // Установка атрибутов:
    public function setAtrs($attrs);

    // Удаление атрибута:
    public function removeAttr($name);

    // Установка класса:
    public function addClass($className);

    // Удаление класса:
    public function removeClass($className);
}
?>