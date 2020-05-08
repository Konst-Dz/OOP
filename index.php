<?php
/*require_once 'Date.php';
require_once 'Interval.php';*/
require_once 'File.php';
require_once 'Tag.php';
/*$date = new Date('2025-12-31');
//echo $date->subYear(2)->getYear();
echo $date->addDay(7)->getDay()."<br>";
echo $date->addMonth(1)->getMonth('en')."<br>";
echo $date->subMonth(3)->getMonth('ru')."<br>";
echo $date->addYear(3)->getYear()."<br>";
echo $date->subYear(2)->getYear()."<br>";
echo $date->format('Y.m.d')."<br>";
echo $date."<br>";

$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');
$interval = new Interval($date1, $date2);
echo $interval->toDays()."<br>";   // выведет разницу в днях
echo $interval->toMonths()."<br>"; // выведет разницу в месяцах
echo $interval->toYears()."<br>";  // выведет разницу в годах
echo $interval."<br>"; // массив вида ['years' => '', 'months' => '', 'days' => '']
echo "<hr>";*/

/*$path = new File('new.txt');
echo $path->getPath()."<br>";
echo $path->getDir()."<br>";
echo $path->getName()."<br>";
echo $path->getExt()."<br>";
echo $path->getSize()."<br>";
echo $path->getText()."<br>";
echo $path->setText("YES \n")."<br>";
echo $path->appendText("NEW \n")."<br>";
echo $path->copy("folder/new.txt")."<br>";
//echo $path->delete()."<br>";
echo $path->rename("new.txt")."<br>";
echo $path->rename("folder/new1.txt")."<br>";*/

$img = new Tag('img');
echo $img->open();
$header = new Tag('header');
echo $header->open().'Хедер'.$header->close();
/*$input = new Tag('input',['id'=>'salt','name'=>'stone']);
echo $input->open();*/
$input = new Tag('input');
echo $input->setAtrr('id','yeah')->open();
echo $input->removeAttr('id')->open();
echo $input->setAtrs(['id'=>'yeah','type'=>'text'])->open();
echo $input->setAtrr('disabled',true)->open();
echo (new Tag('input'))->setAtrr('name',1)->open();
echo (new Tag('input'))->setAtrr('name',2)->open();

