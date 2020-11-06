<?php
require_once 'Helper.php';
require_once 'Country.php';
$country = new Country('Belarus', 1000);
$country->setPopulation('25mln');
echo $country->getAge() . ' - ' . $country->getName() . ' - ' . $country->getPopulation();