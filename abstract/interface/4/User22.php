<?php


class User22 implements iUser2
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

    public function getAge()
    {
        // TODO: Implement getAge() method.
        return $this->age;
    }
}