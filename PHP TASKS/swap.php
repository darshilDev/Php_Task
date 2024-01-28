<html>

<head>
      <title> Value Swapping </title>
</head>

<body align="center">

      <h2 align="center"><u> Value Swapping </u></h2>
      <form action="#" method="POST">

            Enter the First Number:
            <input type="number" name="num1" id="num1"><br>

            <br>

            Enter the Second Number:
            <input type="number" name="num2" id="num2"><br>
            <br>

            <input type="Submit" name="swap" value="click here">


      </form>


      <?php

      if (isset($_POST['swap'])) {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            echo "First Number :" . $num1;
            echo "Second Number :" . $num2;

            $num1 = $num1 + $num2;
            $num2 = $num1 - $num2;
            $num1 = $num1 - $num2;

            echo "<br>";
            echo "<br>";

            echo "After Swapping Data : <br>";
            echo "<br>";


            echo "First Number :" . $num1;
            echo "Second Number :" . $num2;

      }
      ?>

</body>

</html>