<!DOCTYPE html>
<html>

<head>
    <title> Pelindrome Check Program </title>
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

        $x = strlen($input);
        $rev = strrev($input);

        if ($input == $rev) {
            echo "this is pelindrome";

        } else {
            echo "this is not pelindrome";
        }

    }
    ?>

</body>

</html>