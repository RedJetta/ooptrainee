<?php
require_once 'iTag.php';
require_once 'Tag.php';


$input = new Tag('input');
echo $input->setAttr('disabled', true)->open();
$div = new Tag('div');
echo $div->open() . 'text' . $div->close();


$div2 = new Tag('div');
$div2->setAttr('id', 'first')->setAttr('class', 'eee')->open();
echo $div2->removeAttr('id')->removeAttr('class')->open();
echo $div2->close();
echo $div2->setAttrs(['id'=>'second','class'=>'second'])->open().'I am '.$div2->close();

echo (new Tag('input'))->setAttr('id', 'test')->setAttr('name', 'name1')->open();
echo (new Tag('input'))->setAttr('id', 'test')->setAttr('name', 'name2')->open();

echo (new Tag('input'))
    ->setAttr('class', 'eee zzz kkk') // добавим 3 класса
    ->removeClass('zzz') // удалим класс 'zzz'
    ->open(); // выведет <input class="eee kkk">