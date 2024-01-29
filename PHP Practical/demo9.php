<?php

function maxLengthDistinctChars($s)
{
    $n = strlen($s);
    $maxLength = 0;

    for ($i = 0; $i < $n; $i++) {
        $visited = array_fill(0, 256, false);

        for ($j = $i; $j < $n; $j++) {
            if ($visited[ord($s[$j])]) {
                break;
            }

            $visited[ord($s[$j])] = true;
            $maxLength = max($maxLength, $j - $i + 1);
        }
    }

    return $maxLength;
}


$str = "abcabcbb";
$result = maxLengthDistinctChars($str);
echo "Maximum length of substring with distinct characters: $result";

?>