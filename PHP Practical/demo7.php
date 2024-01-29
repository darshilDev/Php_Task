<?php

function longest_substr($s)
{
    $n = strlen($s); // input array   $n = 8
    $maxLength = 0;
    $start = 0;
    $charIndexMap = [];
    var_dump($charIndexMap);


    for ($end = 0; $end < $n; $end++) {
        $currentChar = $s[$end];   //    

        if (array_key_exists($currentChar, $charIndexMap)) {
            $start = max($start, $charIndexMap[$currentChar] + 1);
        }

        $charIndexMap[$currentChar] = $end;

        $maxLength = max($maxLength, $end - $start + 1);
    }

    return $maxLength;
}

$input_String = "qwertytiop";
$result = longest_substr($input_String);
echo "Length of the longest substring without repeating characters : " . $result;

?>