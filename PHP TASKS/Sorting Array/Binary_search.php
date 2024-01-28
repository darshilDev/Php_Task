<?php

function binarySearch($ar, $target) {
    $low = 0;
    $high = count($ar) - 1;
    var_dump($high);

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($ar[$mid] == $target) {
            return $mid; 
        }

        if ($ar[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1; 
        }
    }

    return -1; 
}


$sorted_array= array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$target = 11;

$result = binarySearch($sorted_array, $target);

if ($result != -1) {
    echo "Element found at index: $result";
} else {
    echo "Element not found in the array";
}

?>
