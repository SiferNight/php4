<?php
$vvod = readline("Введите строку:");

$res = alphabeticalOrder($vvod);
echo "результат: $res";

function alphabeticalOrder(string &$vvod):string
{
    $vvod = str_split($vvod);
    sort($vvod);
    return implode('', $vvod);
}