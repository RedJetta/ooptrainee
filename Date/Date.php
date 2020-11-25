<?php

class Date
{
    private $date;
    private $dateObj;


    public function __construct($date = null)
    {
        if ($date == null){
            $this->date = date('d-m-Y');
            $this->dateObj = date_create($this->date);
        }else
            $this->date = $date;
            $this->dateObj = date_create($this->date);
        // если дата не передана - пусть берется текущая
    }

    public function getDay()
    {
        return date_format($this->dateObj, 'd');
    }

    public function getMonth($lang = null)
    {
        return date_format($this->dateObj, 'F');
        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке

    }

    public function getYear()
    {
        return date_format($this->dateObj, 'Y');
    }

    public function getWeekDay($lang = null)
    {
        return date_format($this->dateObj, 'N');
        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
    }

    public function addDay($value)
    {
        date_modify($this->dateObj, "$value day");
        return $this;
        // добавляет значение $value к дню
    }

    public function subDay($value)
    {
        date_modify($this->dateObj, "-$value day");
        return $this;
        // отнимает значение $value от дня
    }

    public function addMonth($value)
    {
        date_modify($this->dateObj, "$value month");
        return $this;
        // добавляет значение $value к месяцу
    }

    public function subMonth($value)
    {
        date_modify($this->dateObj, "-$value month");
        return $this;
        // отнимает значение $value от месяца
    }

    public function addYear($value)
    {
        date_modify($this->dateObj, "$value year");
        return $this;
        // добавляет значение $value к году
    }

    public function subYear($value)
    {
        date_modify($this->dateObj, "-$value year");
        return $this;
        // отнимает значение $value от года
    }

    public function format($format)
    {
        return date_format($this->dateObj, "$format");
        // выведет дату в указанном формате
        // формат пусть будет такой же, как в функции date
    }

    public function __toString()
    {
        // выведет дату в формате 'год-месяц-день'
        return (string) date_format($this->dateObj, 'd.m.Y');
    }
}