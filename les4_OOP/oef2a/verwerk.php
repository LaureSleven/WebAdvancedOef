<?php

use Util\Date;

require_once 'src/Util/Date.php';

$day = $_GET['day'];
$month = $_GET['month'];
$year = $_GET['year'];

if ($day > 0 && $month > 0 && $year > 0) {
    $date = new Date($day, $month, $year);
} elseif ($day > 0 && $month > 0) {
    $date = new Date($day, $month);
} elseif ($day > 0) {
    $date = new Date($day);
} else {
    $date = new Date();
}

$date->printMonth();