<?php

function bubbleSort($arr)
{
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}


$input_array = array(1, 52, 4, 62, 85, 45, 22, 44, 66, 2, 022, 85, 77, 33);
$sortedArray = bubbleSort($input_array);

echo "Sorted array: " . implode(", ", $sortedArray);

?>