<?php 
  function sayAnything ($message) {
    echo $message . "</br>";
  }

  sayAnything('In your eyes');

  // return values
  function addNumbers($number1, $number2) {
    global $x;
    $sum = $number1 + $number2;

    return $sum;
  }

  echo addNumbers(3, 5);

  // constants
  $myConst = 10;

  define("NEWCONST", 1000);
  echo NEWCONST;

  // section practice
  // step 1 and 2
  echo "</br>";

  function sumOfNumbers($num1, $num2) {
    return $num1 * $num2;
  }

  echo sumOfNumbers(6, 9);

  echo "</br>";




