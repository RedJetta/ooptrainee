<?php


class Programmer2 extends Employee3 implements iProgrammer
{
    private $langs = [];


    public function getLangs()
    {
        // TODO: Implement getLangs() method.
        foreach ($this->langs as $lang){
            echo $lang;
        }
    }

    public function addLang($lang)
    {
        // TODO: Implement addLang() method.
        $this->langs[] = $lang;
    }
}