<!DOCTYPE html>
<html>

<head>
    <title> Reverse String Program </title>
</head>

<body align="center">

    <h2 align="center"> Reverse String with Recursions Program </h2>

    <form method="POST" action="#">

        Enter the String:
        <input type="char" name="input_string" id="string_input"><br><br>
        <input type="Submit" value="Submit" name="submit">


    </form>

    <?php

    if (isset($_POST['submit'])) {



        function reverse($str)
        {
            if (
                ($str == null) ||
                (strlen($str) <= 1)
            )
                echo ($str);
            else {
                echo ($str[strlen($str) - 1]);
                reverse(
                    substr(
                        $str,
                        0,
                        (strlen($str) - 1)
                    )
                );
            }
        }


        $str = $_POST['input_string'];
        reverse($str);

    }
    ?>

    </form>

</body>

</html>