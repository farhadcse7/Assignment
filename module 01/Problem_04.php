<?php

function printPattern($n)
{
    for ($i = 1; $i <= $n; $i++) {
        // Print spaces (n - i) times
        for ($j = 1; $j <= $n - $i; $j++) {
            echo " ";
        }
        // Print asterisks (2i - 1) times
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        // Move to the next line after each row
        echo "\n";
    }
}

$n = 5;
printPattern($n);
