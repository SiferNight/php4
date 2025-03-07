<?php


for($i=1;$i<1000;$i++){
    $numbers[]=$i;
}
$result = [];

function proverka(array $numbers, callable $condition): void
{
    foreach ($numbers as $number) {
        $condition($number); 
    };  
}


$uslovieIdeala = function (int $number) : void
{
    $sumDelit = 1;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $sumDelit = $sumDelit+$i;
        }
    }
    if ($number===$sumDelit && $number>1) {
        $result[] = $number;
        for($i=0;$i<count($result);$i++){
            echo "$result[$i]".PHP_EOL;
        }  
    } 
};

$uslovieSover = function ($number):void
 {
    $sumDelit = 0;
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $sumDelit = $sumDelit+$i;
        }
    }
    $polSumDelit = $sumDelit/2;
    if ($number===$polSumDelit) {
        $result[] = $number;
        for($i=0;$i<count($result);$i++){
            echo "$result[$i]".PHP_EOL;
        }  
    } 
};

echo "Идеальные числа:".PHP_EOL;
$idealChisla = proverka($numbers, $uslovieIdeala);
echo "Совершенные числа:".PHP_EOL;
$soverChisla = proverka($numbers, $uslovieSover);