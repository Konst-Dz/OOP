<?php
require_once 'Date.php';
$date = new Date('2025-12-31');
//echo $date->subYear(2)->getYear();
echo $date->addDay(7)->getDay()."<br>";
echo $date->addMonth(1)->getMonth()."<br>";
echo $date->subMonth(3)->getMonth()."<br>";
echo $date->addYear(3)->getYear()."<br>";
