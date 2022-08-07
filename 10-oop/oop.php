<?php 
  include 'names.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $oop?></title>
</head>
<body>
  <h1><?php echo $oop . '<br>'; ?></h1>
  <?php 
    class Car {
      var $wheels = 4;
      public $doors = 2;
      private $engine = 1;
      protected $floors = 4;

      function MoveWheels() {
        // echo "Wheels are moving";     
        $this->wheels = 10;
      }

      function __construct() {
        echo $this->wheels = 10;
      }

    }

    $chevy = new Car();
    $ford = new Car();

    echo $chevy->wheels . "<br>";
    $chevy->MoveWheels();
    echo $chevy->wheels;

    class Plane extends Car {
      var $wheels = 20;
    }

    $jet = new Plane();

    echo $jet->wheels;

    // if(class_exists(Plane)) {
    //   echo 'flying';
    // }

    // $ford->MoveWheels();

    // if (class_exists("Car")) {
    //   echo "Camaro";
    // } else {
    //   echo "Nomaro";
    // }

    // if (method_exists("Car", "moveWheels")) {
    //   echo "Method exists";
    // }
  
  ?>
</body>
</html>