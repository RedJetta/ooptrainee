<?php


class Driver extends Employee
{
    private $driverExp;
    private $category = [];

    /**
     * @return mixed
     */
    public function getDriverExp()
    {
        return $this->driverExp;
    }

    /**
     * @param mixed $driverExp
     */
    public function setDriverExp($driverExp)
    {
        $this->driverExp = $driverExp;
    }

    /**
     * @return array
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param array $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
}