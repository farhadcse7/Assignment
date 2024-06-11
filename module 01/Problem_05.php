<?php

function sumOfNumber($number)
{
    $sum = 0;
    while ($number > 0) {
        $rem = $number % 10;
        $number = $number / 10;
        $sum = $sum + $rem;
    }
    return $sum;
}

echo sumOfNumber(62343);
