<!DOCTYPE html>
<html>

<head>
    <title> Factorial Program </title>
</head>

<body align="center">

    <h2 align="center"> Factorial Program </h2>

    <form method="POST" action="#">

        Enter the Number:
        <input type="number" name="number" id="num"><br><br>
        <input type="Submit" value="Submit" name="submit">


    </form>

    <?php

    if (isset($_POST['submit'])) {

        $fact = 1;
        $number = $_POST['number'];

        echo "Factorial of Given Number is :";

        for ($i = 1; $i <= $number; $i++) {

            $fact = $fact * $i;
        }

        echo $fact;

    }


    ?>

</body>

</html>