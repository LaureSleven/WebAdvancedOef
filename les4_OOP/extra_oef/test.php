<?php

use util\Color;
use util\ColouredPoint;

require_once('util/ColouredPoint.php');
require_once('util/Point.php');
require_once('util/Color.php');

$point = ColouredPoint::make(1,2, new Color(Color::RED));
$point->print();