<?php

namespace Util;

class Date
{
    private $day;
    private $month;
    private $year;
    private static $MONTHS = array(1 => "januari", 2 => "februari", 3 => "maart", 4 => "april", 5 => "mei", 6 => "juni", 7 => "juli", 8 => "augustus", 9 => "september", 10 => "oktober", 11 => "november", 12 => "december");

    private function __construct($day, $month, $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public static function make($day = 1, $month = 1, $year = 2008) {
        return new self($day, $month, $year);
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

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function changeDay($day) {
        $this->day = $day;
    }

    public function changeMonth($month) {
        $this->$month = $month;
    }

    public function changeYear($year) {
        $this->year = $year;
    }
}