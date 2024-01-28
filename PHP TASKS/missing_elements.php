<?php

$arr1 = array(1, 2, 3, 4, 5, 7, 8, 9, 10);
$len = count($arr1);

function not_present($ar)
{

    $new_array = range(min($ar), max($ar));


    return array_diff($new_array, $ar);
}

$input_array = array(1, 3, 5, 7, 9, 100);
print_r(not_present($input_array));


?>