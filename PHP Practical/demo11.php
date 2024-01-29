<?php


function printTwoElements($arr, $size)
{
	
	echo "The repeating element is", " ";

	for($i = 0; $i < $size; $i++)
	{
		if($arr[abs($arr[$i]) - 1] > 0)
			$arr[abs($arr[$i]) - 1] = 
			- $arr[abs($arr[$i]) - 1];
		else
			echo ( abs($arr[$i]));
	}

	echo "\nand the missing element is ";
	for($i = 0; $i < $size; $i++)
	{
		if($arr[$i] > 0)
			echo($i + 1);
	}
}	
	

	$arr = array(7, 3, 4, 5, 5, 6, 2);
	$n = count($arr);
	printTwoElements($arr, $n);
?>
