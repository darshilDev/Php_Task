<html>

<head>
    <title> Linear Search || <font> Color Attributes </title>

    <style>
        .button {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 7px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        input[type=varchar] {

            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;

        }
    </style>
</head>

<body align="center">

    <h2 align="center">
        <font size="6" color="rgb(128, 128, 128)" face="arial"><u> Linear Search Progarm </u></font>
    </h2>
    <br>

    <form action="#" method="POST">

        <label for="fname :" color="red">First Name</label>
        <input type="varchar" name="input" placeholder="Enter the Data" face="verdana">
        <br>
        <br>
        <input type="Submit" name="submit" class="Button" value="Click here">

    </form>

    <?php


    if (isset($_POST["submit"]) && $_POST["input"]) {

        $name = array(
            "Nayan",
            "Kanak",
            "Raman",
            "Janak",
            "Kavi",
            "Harsh",
            "Param",
            "Shweta",
            "Mayank",
            "Shruti",
            "Prachi",
            "Kumud",
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "25",
            "36",
            "49",
            "64",
            "81",
            "100"
        );
        $input = $_POST['input'];
        $n = count($name);
        $search_status = 0;

        for ($i = 0; $i < $n; $i++) {

            if ($name[$i] == $input) {

                echo "<br>", "Given Input is there at Index :" . $i + 1;
                $search_status = 1;
                break;
            }

        }

        if ($search_status == 0) {
            echo "Given Input is not in the String";
        }


    }

    ?>


</html>