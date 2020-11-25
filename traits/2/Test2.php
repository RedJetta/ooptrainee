<?php


class Test2
{
    use Trait1, Trait2, Trait3, Trait5{
        Trait1::method insteadof Trait2, Trait3;
        Trait2::method as method2;
        Trait3::method as method3;
    }

    public function __construct()
    {
        echo $this->method()+$this->method2()+$this->method3();
    }
}