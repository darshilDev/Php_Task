<html>

<head>
    <title> Prime Number Program </title>
</head>

<body align="center">

    <h2 align="center"> <u> Prime Number Program </u></h2>

    <form method="POST" action="#">

        Enter the Name:
        <input type="number" name="number">
        <br>
        <br>
        <input type="Submit" name="submit" value="Click Here">


    </form>

    <?php

    function primeCheck($number)
    {
        if ($number == 1)
            return 0;
        for ($i = 2; $i <= $number / 2; $i++) {
            if ($number % $i == 0)
                return 0;
        }
        return 1;
    }


    $number = $_POST['number'];
    $result = primeCheck($number);
    if ($result == 1)
        echo $number . " is Prime Number";
    else
        echo $number . " is Not Prime Number"

            ?>
    </body>

    </html>