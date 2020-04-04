<?php
require_once 'src/Util/Date.php';
use Util\Date;

$date1=Date::make();
$date2=Date::make(1,2);
$date3=Date::make(1,2,2001);

// $date4=$date1->changeDay(2) -> werkt niet?
$date4=$date1;
$date4->changeDay(2);

$date1->print();
$date2->print();
$date3->print();
$date4->print();