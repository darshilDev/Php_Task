<!DOCTYPE html>
<html>

<body>

    <?php
    $a = "Hello";
    echo "a is " . is_countable($a) . "<br>";

    $b = array(null);
    echo "b is " . is_countable($b) . "<br>";

    $c = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "c is " . is_countable($c) . "<br>";

    $d = [1, 2, 3];
    echo "d is " . is_countable($d) . "<br>";
    ?>

</body>

</html>