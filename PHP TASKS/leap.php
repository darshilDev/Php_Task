<!DOCTYPE html>
<html>

<head>
   <title> Leap Year Check Program </title>
</head>

<body align="center">

   <h2 align="center"> Lean year Program </h2>

   <form method="POST" action="#">

      Enter the Number:
      <input type="number" name="my_year" id="year"><br><br>
      <input type="Submit" value="Submit" name="submit">


   </form>

   <?php


   if (isset($_POST["submit"]) && $_POST["my_year"]) {


      function year_check($my_year)
      {

         if ($my_year % 400 == 0)
            print("It is a leap year");
         else if ($my_year % 100 == 0)
            print("It is not a leap year");
         else if ($my_year % 4 == 0)
            print("It is a leap year");
         else
            print("It is not a leap year");
      }
      $my_year = $_POST['my_year'];
      year_check($my_year);

   }
   ?>

</html>