<html>

<head>
    <title>Reverse Digit </title>
</head>

<body align="center">
    <h2 align="center"><u> Reverse Digit Program </u> </h2>


    <form action="#" method="POST">

        Enter the Number:
        <input type="number" name="num">
        <br>
        <br>
        <input type="Submit" name="submit" value="Click here">

    </form>


    <?php


    $num = $num1 = $_POST['num'];
    $revnum = 0;

    while ($num > 1) {
        $rem = $num % 10;
        $revnum = ($revnum * 10) + $rem;
        $num = ($num / 10);
    }

    echo "Reverse number of " . $num1 . " is :" . $revnum;


    ?>
</body>

</html>