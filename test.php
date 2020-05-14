<?php
$date = '1999-11-30';
$format = 'd.m.y';
//echo date($format,strtotime($date));
$value = 5;
echo date('Y-m-d',strtotime($date."+ $value day"));
echo "<br>";
echo date("l jS \of F Y h:i:s A");
date_default_timezone_set('UTC');
echo date("l jS \of F Y h:i:s A");
echo "<br>";
$dat = '1995-11.30';
$value = 2;
$date = new DateTime($date);
$date->modify("+ $value month");
var_dump($date);
echo $date->format('Y-m-d');
echo "<br>";
echo "<hr>";
$date = DateTime::createFromFormat('Y-m-d','01-01-2000');
echo date('Y-m-d');
$result = (strtotime("1990.01.01") - strtotime('1923.01.03'))/(60*60*24);
echo floor($result);
$date1 = '1990.01.01';
$date2 = '1923.01.03';
$diff1 = strtotime($date1);
$diff2 = strtotime($date2);
$diff = $diff1 - $diff2;
var_dump($diff);
echo $diff;
$arr = pathinfo('text.txt',PATHINFO_FILENAME);
echo $arr;
//var_dump($arr);
$options = [
    1=>['text' => 'item1', 'attrs' => ['value' => '1']],
    ['text' => 'item2', 'attrs' => ['value' => '1', 'selected' => true]],
    ['text' => 'item1', 'attrs' => ['value' => '1', 'class' => 'last']],
];
var_dump($options);