<?php

namespace Util;

class Date
{
    private $day;
    private $month;
    private $year;
    private static $MONTHS = array(1 => "januari", 2 => "februari", 3 => "maart", 4 => "april", 5 => "mei", 6 => "juni", 7 => "juli", 8 => "augustus", 9 => "september", 10 => "oktober", 11 => "november", 12 => "december");

    public function __construct($day = 1, $month = 1, $year = 2008)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function print() {
        print($this->getDay() . "/" . $this->getMonth() . "/" . $this->getYear());
    }

    public function printMonth() {
        print($this->getDay() . "/" . self::$MONTHS[$this->getMonth()] . "/" . $this->getYear());
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setDay(int $day)
    {
        $this->day = $day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month)
    {
        $this->month = $month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }




}