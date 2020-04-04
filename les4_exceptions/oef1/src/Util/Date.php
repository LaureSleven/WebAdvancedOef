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
        $this->setDay($day);
        $this->setMonth($month);
        $this->setYear($year);
    }

    public function print()
    {
        print($this->getDay() . "/" . $this->getMonth() . "/" . $this->getYear());
    }

    public function printMonth()
    {
        print($this->getDay() . "/" . self::$MONTHS[$this->getMonth()] . "/" . $this->getYear());
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setDay(int $day)
    {
        if ($day < 0 || $day > 31) {
            throw new DateException("day out of range");
        } else {
            $this->day = $day;
        }
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month)
    {
        if ($month < 0 || $month > 12) {
            throw new DateException("month out of range");
        } else {
            $this->month = $month;
        }
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