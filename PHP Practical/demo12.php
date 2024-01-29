<html>

<head>
</head>
<?php

function findCommon(
	$ar1,
	$ar2,
	$ar3,
	$n1,
	$n2,
	$n3
) {
	$i = 0;
	$j = 0;
	$k = 0;

	while ($i < $n1 && $j < $n2 && $k < $n3) {


		if (
			$ar1[$i] == $ar2[$j] &&
			$ar2[$j] == $ar3[$k]
		) {
			echo $ar1[$i], " ";
			$i++;
			$j++;
			$k++;
		} else if ($ar1[$i] < $ar2[$j])
			$i++;
		else if ($ar2[$j] < $ar3[$k])
			$j++;
		else
			$k++;
	}
}

$ar1 = array(1, 5, 10, 20, 40, 80);
$ar2 = array(6, 7, 20, 80, 100);
$ar3 = array(
	3,
	4,
	15,
	20,
	30,
	70,
	80,
	120
);
$n1 = count($ar1);
var_dump($n1);
$n2 = count($ar2);
var_dump($n2);
$n3 = count($ar3);
var_dump($n3);

echo "Common Elements are ";

findCommon($ar1, $ar2, $ar3, $n1, $n2, $n3);

?>