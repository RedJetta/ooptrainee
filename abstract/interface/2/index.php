<?php
require_once 'iUser.php';
require_once 'User2.php';

$user = new User2();
$user->setName('Petr');
$user->setAge(23);
echo $user->getName() . ' - ' . $user->getAge();
