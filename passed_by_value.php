<?php

function myFunc(int $val)

{
    $val*=2;
    echo "in myFunc, i is {$val} \n";


}
$i = 10;
myFunc($i); //그냥 10넣은거
echo "i is {$i}\n";