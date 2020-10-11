<?php


class Programmer extends Employee
{
    private $langs = [];

    /**
     * @return array
     */
    public function getLangs()
    {
        return $this->langs;
    }

    /**
     * @param array $langs
     */
    public function setLangs($langs)
    {
        $this->langs = $langs;
    }
}