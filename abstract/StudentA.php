<?php


class StudentA extends AbstractUser
{
    private $scolarship;

    /**
     * @return mixed
     */
    public function getScolarship()
    {
        return $this->scolarship;
    }

    /**
     * @param mixed $scolarship
     */
    public function setScolarship($scolarship)
    {
        $this->scolarship = $scolarship;
    }

    public function increaseRevenue($value)
    {
        $this->scolarship = $this->scolarship + $value;
    }

    public function decreaseRevenue($value)
    {
        $this->scolarship = $this->scolarship - $value;
    }
}