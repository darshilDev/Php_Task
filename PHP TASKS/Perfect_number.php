<html>

<head>
    <title> Perfect Number Program </title>

    <style>
        .button {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 7px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }

        input[type=number] {

            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;

        }

        .label {
            font-style: verdana;
            font-size: 16px;
            color: red;
            font-family: fantasy;
        }
    </style>
</head>

<body align="center">

    <font size="6" color="rgb(128, 128, 128)" face="fantasy"><u> Perfect Number Progarm </u></font>
    <br>
    <br>

    <form action="#" method="POST">

        <label for="Number" class="label">Enter the Number: </label>
        <input type="number" name="input_data" placeholder="Enter the Number">
        <br>
        <br>
        <input type="Submit" name="submit" value="Click here to Check" class="button">


    </form>




    <?php


    if (isset($_POST["submit"])) {

        $num = $_POST['input_data'];
        $flag = 0;

        var_dump($num);

        //   echo "Input Data is :".$input_data;
        // echo "<br>";
        //echo "Half of Input Data is :".$num;
    
        for ($i = 1; $i < $num; $i++) {

            if ($num % $i == 0) {
                $flag = $flag + $i;

            }
        }

        var_dump($flag);

        if ($flag == $num) {
            echo "this number is perfect number";
        } else {
            echo "<br>";
            echo "this number is not Perfect Number";
        }
    }


    ?>

</body>

</html>