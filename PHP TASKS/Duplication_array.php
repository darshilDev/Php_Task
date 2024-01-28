<html>

<head>
    <title> Check Element Duplication in Array Program </title>
</head>

<body align="center">

    <form action="#" method="POST">

        <h2 align="center"><u><b> Check Array Duplication Program </u></b> </h2>


        <input type="submit" name="submit" value="Click to Check">

    </form>


    <?php


    function array_duplicaiton($name, $length)
    {

        for ($i = 0; $i < $length; $i++) {

            for ($j = $i + 1; $j < $length; $j++) {

                if ($name[$i] == $name[$j]) {
                    echo " Duplicate Elements of array is :$name[$j] ";
                    echo "<br>";

                }

            }
        }
    }


    if (isset($_POST["submit"])) {

        $name = array("1", "4", "9", "16", "25", "36", "Nayan", "Mayank", "Janak", "Maya", "1", "2", "Chhaya", "Kanak", "2", "Riya", "64", "122", "Tina", "Nayan", "Janak");
        $length = count($name);
        var_dump($name);
        array_duplicaiton($name, $length);
    }


    ?>


</body>

</html>