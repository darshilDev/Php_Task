<!DOCTYPE html>
<html>

<head>
    <title> Reverse String Program </title>
</head>

<body align="center">

    <h2 align="center"> Reverse String Program </h2>

    <form method="POST" action="#">

        Enter the String:
        <input type="char" name="number" id="string_input"><br><br>
        <input type="Submit" value="Submit" name="submit">


    </form>

    <?php

    if (isset($_POST['submit'])) {

        $fact = 1;
        $input = $_POST['number'];
        var_dump($input);

        $x = strlen($input);
        $rev = strrev($input);
        var_dump($rev);

        echo "Length of Given String is :" . $x;
        echo "<br>";
        echo "Reverse String of Given String is :" . $rev;



    }
    ?>

</body>

</html>