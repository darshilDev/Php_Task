<?php

function longest_substr($s)
{

   $length = strlen($s);
   $start = 0;
   $maxlength = 0;
   $charIndexMap = [];

   for ($i = 0; $i < $length; $i++) {

      $currentChar = $s[$i];
      var_dump($currentChar);
   }


   if (array_key_exists($currentChar, $charIndexMap)) {
      $start = max($start, $charIndexMap[$currentChar]);

   }
}

$input_string = "abcbacbb";
longest_substr($input_string);

?>