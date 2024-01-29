<!DOCTYPE html>

<html>

<head>
    <title> Insert Value in Array </title>
</head>

<body align="Center">

    <form method="POST" action="#">

        <h2 align="center"><u> Insert Value in Array</u> </h2>

        Enter the Number:
        <input type="number" name="input_data" id="number">
        <br>
        <br>
        Enter the Position:
        <input type="number" name="position" id="number">
        <br>
        <br>
        <input type="Submit" name="submit">

    </form>
    <?php
    //Original Array on which operations is to be perform 
    
    if (isset($_POST["submit"])) {

        $original_array = array('1', '2', '3', '4', '5');
        $length = count($original_array);

        echo 'Original array : ';
        foreach ($original_array as $x) {
            echo "$x ";
        }

        echo "\n";

        //value of new item 
        $inserted_value = $_POST['input_data'];

        //value of position at which insertion is to be done 
    
        $position = $_POST['position'];

        //array_splice() function 
    
        array_splice($original_array, $position, 0, $inserted_value);

        echo "After inserting  " . $inserted_value . " in the array is : ";
        foreach ($original_array as $x) {
            echo "$x ";
        }
    }
    ?>

</body>

</html>