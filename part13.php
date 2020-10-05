<?php
//Распечатка символов кодировки ASCII
//for($i= 32; $i < 128; $i++){
//    echo "code ($i) = ".chr($i)."<br/>";
//}
;
//Вывод UTF-8 символа
//echo "\u{0410}";
;

$string = 'I am walking at 36/5 road in the town of kings, Birmengem    I';
$find = 'king';
$strpos = strpos($string, $find, 20);
echo $strpos;
echo '<hr>';

$trim = trim($string, "I");
echo $trim;
echo '<hr>';

$ltrim = ltrim($string, "I");
echo $ltrim;

