<?php
require_once '../../../middleware/dumper.php';
require_once 'iTest1.php';
var_dump(interface_exists('iTest1'));
var_dump(interface_exists('iTest2'));
dumper(get_declared_interfaces());