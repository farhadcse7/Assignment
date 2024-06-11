<?php

function minAbsValue($input)
{
    $length = count($input);
    $minValue = $input[0];

    for ($i = 0; $i < $length; $i++) {

        // Compute the absolute value
        $absValue = $input[$i] < 0 ? $input[$i] * -1 : $input[$i];

        // Update the minimum value if the current absolute value is smaller
        if ($absValue < $minValue) {
            $minValue = $absValue;
        }
    }
    return $minValue;
}

echo minAbsValue([10, -12, 34, 12, -3, 123]);

?>