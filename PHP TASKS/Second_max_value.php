<?php

$n = array(0,1,2,3,4,5,6,7,8,9);
$mx = $smx = 0;
$l = count($n);

for ($i = 0; $i < $l; $i++) {

    if ($n[$i] > $mx) {
        $smax = $mx;
        $n[$i] = $mx;
    } elseif ($n[$i] < $smx && $n[$i] != $mx) {

        $smax = $n[$i];

    }
}


echo "Max value of Array is " . $mx;
echo "<br>";
echo "Second Max value is " . $smx;

?>