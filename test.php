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