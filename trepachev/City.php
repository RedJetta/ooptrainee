<?php


class City
{
    private $name;
    private $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}