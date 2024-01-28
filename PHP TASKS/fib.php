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

    if (isset($_POST['submit'])) {
        $num = 0;
        $limit = $_POST['number'];
        $n1 = 0;
        $n2 = 1;
        echo "<h3>Fibonacci series for first " . $limit . " numbers: </h3>";
        echo "\n";
        echo $n1 . ' ' . $n2 . ' ';
        while ($num < $limit) {
            $n3 = $n2 + $n1;
            echo $n3 . '      ';


            $n1 = $n2;
            $n2 = $n3;
            $num = $num + 1;
        }
    }
    ?>

    </form>

</body>

</html>