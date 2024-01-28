<!DOCTYPE html>
<html>

<head>
    <title> Fibonacci Series Program </title>
</head>

<body align="center">

    <h2 align="center"> Factorial Program </h2>

    <form method="POST" action="#">

        Enter the Number:
        <input type="number" name="number" id="num"><br><br>
        <input type="Submit" value="Submit" name="submit">


    </form>

    <?php

    if (isset($_POST["submit"]) && $_POST["number"]) {


        $number = $_POST["number"];


        function Fibonacci($number)
        {

            if ($number == 0)
                return 0;
            else if ($number == 1)
                return 1;
            else
                return (Fibonacci($number - 1) +
                    Fibonacci($number - 2));
        }



        for ($i = 0; $i < $number; $i++) {
            echo Fibonacci($i), ' ';
        }
    }
    ?>
    </form>

</body>

</html>