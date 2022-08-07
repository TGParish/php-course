<?php 
  print_r($_GET);
  $id = 10;

  // step 2
  $name = 'practice';
  $value = 10;
  $expiration = time() + (7 * 24 * 60 * 60);
  setcookie($name, $value, $expiration);

  // step 3
  session_start();

  $_SESSION['message'] = "Hey bitch";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- step 1  -->
  <?php 
  if(isset($_GET["source"])) {
    echo ["source"];
  }


   ?>
  <a href="practice.php?source=3034">Click Here!</a>

  <?php 
    if (isset($_COOKIE["practice"])) {
      echo $_COOKIE["practice"];
    }

    if (isset($_SESSION['message'])) {
      echo $_SESSION["message"];
    }
  ?>

</body>
</html>