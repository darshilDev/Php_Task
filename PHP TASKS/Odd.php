<!DOCTYPE html>
<html>

<head>
  <title> Odd-Even Program </title>
</head>

<body align="center">

  <h2 align="center"> Odd-Even Program </h2>

  <form method="POST" action="#">

    Enter the Number:
    <input type="number" name="number" id="num"><br><br>
    <input type="Submit" value="Submit" name="submit">


  </form>

  <?php

  if (isset($_POST['submit'])) {

    $number = $_POST['number'];

    if ($number % 2 == 0) {
      echo "Given Number " . $number . " is Even Number";
    } else {
      echo "Given Number" . $number . " is Odd Number";
    }

  }


  /*if(isset($_GET['submit']))  {



  function reverse($str)
  {
  if (($str == null) || 
  (strlen($str) <= 1))
  echo ($str);

  else
  {
  echo ($str[strlen($str) - 1]);
  reverse(substr($str,0,
   (strlen($str) - 1)));
  }
  }


  $str = $_GET['input_string'];
  reverse($str);

  }
  */
  ?>

</body>

</html>