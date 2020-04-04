<?php

namespace util;

class Color
{
    // objecten aanmaken gaat niet?
    const RED = '0xFF0000';
    const BLACK = '0x000000';
    const WHITE = '0xFFFFFF';
    const GREEN = '0xFF00FF';
    const BLUE = '0x0000FF';
    const YELLOW = '0xFFFF00';

    private $rgb;

    public function __construct($rgb)
    {
        $this->rgb = hexdec($rgb);
    }

    public function getRgb()
    {
        return $this->rgb;
    }

    public function __toString()
    {
        return dechex($this->getRgb());
    }
}