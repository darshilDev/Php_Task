<?php
$arr = array(7, 2, 9, 6, 1, 3); // given array  
$item = 6; // value to be searched  
$n = sizeof($arr); //size of array  
$flag = 0; //search staus

// Going through array sequencially  
for ($i = 0; $i < $n; $i++) {
    if ($arr[$i] == $item) {
        echo "<br>", "Element is present at index ", $i + 1;
        $flag = 1;
        break;
    }
}
if ($flag == 0)
    echo "<br>", "Element is not present in the array";
?>