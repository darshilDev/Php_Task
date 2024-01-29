<!DOCTYPE html>
<html>

<head>
    <title> Factorial Program </title>
</head>

<body align="center">

    <h2 align="center"> Reverse String Program </h2>

    <form method="POST" action="#">

        Enter the String:
        <input type="char" name="string" id="string"><br><br>
        <input type="Submit" value="Submit" name="submit">


    </form>
    <?php

    if (isset($_POST['submit'])) {

        function reverseString($str, $index = 0)
        {
            // Base case: if the index reaches the end of the string, return an empty string
            if ($index == strlen($str)) {
                return '';
            } else {
                // Recursive case: reverse the substring starting from the next index and append the current character
                return reverseString($str, $index + 1) . $str[$index];
            }
        }

        // Example usage
        $inputString = $_POST['string'];
        $reversedString = reverseString($inputString);

        echo "Original String: $inputString\n";
        echo "Reversed String: $reversedString\n";
    }
    ?>

</body>

</html>