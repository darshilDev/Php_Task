<!DOCTYPE html>

<html>

<head>
  <title> Factorial with Recursion </title>
</head>

<body align="Center">

  <form method="POST">

    <h2 align="center"><u> Factorial with Recursion </u> </h2>

    Enter the Number:
    <input type="number" name="number" id="number">
    <br>
    <br>
    <input type="Submit" name="submit">


    <?php


    if (isset($_POST['submit'])) {

      $number = $_POST['number'];


      function fact($number)
      {

        if ($number <= 1) {
          return 1;

        } else {

          return $number * fact($number - 1);

        }

      }

      echo "<br>";
      echo "<br>";

      echo "factorial of " . $number . " is :" . fact($number);

    }
    ?>

  </form>

</body>

</html>