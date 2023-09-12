<?php

function num2(int $i):int
{
    $j=$i*2;
    return $j;

}

$num = num2(10);
echo "{$i} を2倍にしたら {$num} になった \n";

function num(int $i,int $j):int

{

    $sum=$i+$j;
    return $sum;


}
$sum1 = num(4,5);
echo "4+5={$sum1} \n";