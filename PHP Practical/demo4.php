<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Input Form</title>
</head>

<body>

    <?php
    // Initialize an empty array
    $myArray = [];

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get the value entered by the user
        $value = $_POST["valueInput"];

        // Add the value to the array
        $myArray[] = $value;

        // Display the current state of the array
        echo "<p>Current Array: [" . implode(", ", $myArray) . "]</p>";


        var_dump(json_encode($myArray));
    }
    ?>

    <h2>Enter values for the array:</h2>

    <form method="post" action="#">
        <label for="valueInput">Enter a value:</label>
        <input type="text" name="valueInput" placeholder="Enter a value" required>
        <button type="submit" name="submit">Add to Array</button>
    </form>

</body>

</html>