<?php


class City_14
{
    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $foundation, $population)
    {
        $this->name=$name;
        $this->foundation=$foundation;
        $this->population=$population;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getFoundation()
    {
        return $this->foundation;
    }

    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }


}
