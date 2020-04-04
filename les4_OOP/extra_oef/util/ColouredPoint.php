<?php

namespace util;

require_once('Color.php');
require_once('Point.php');

class ColouredPoint extends Point
{
    private $color;

    // private constructor gaat niet, want base class constructor is public?
    public function __construct($x, $y, $color)
    {
        parent::__construct($x, $y);
        $this->color = $color;
    }

    public static function make(int $x, int $y, Color $color) {
        return new self($x, $y, $color);
    }

    public function print()
    {
        parent::print();
        print(" with color " . $this->color);
    }
}