<html>

<head>
    <title> Prime Number Program </title>
</head>

<body align="center">

    <h2 align="center"><u> Prime Number Finder </u></h2>
    <form method="post" action="#">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check Prime">
    </form>


    <?php

    function isPrime($number)
    {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numberToCheck = isset($_POST['number']) ? intval($_POST['number']) : 0;

        if (isPrime($numberToCheck)) {
            echo "$numberToCheck is a prime number.";
        } else {
            echo "$numberToCheck is not a prime number.";
        }
    }

    ?>

</body>

</html>