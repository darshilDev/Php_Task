<?php

function getMax($array)
{
    $n = count($array);
    $max = $max1 = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($max < $array[$i])
            $max = $array[$i];
    return $max;
}




$array = array(1, 2, 3, 4, 5);
echo (getMax($array));
echo "<br>";
echo "Max Value is :" . (max($array));

?>