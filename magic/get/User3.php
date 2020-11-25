<?php


class User3
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->$name;
    }
}