<?php
require_once 'iUser2.php';
require_once 'User22.php';

$user = new User22('Maks', 23);
echo $user->getAge() . ' - ' . $user->getName();