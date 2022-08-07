<?php 
  include 'names.php';

  session_start();

  $_SESSION['greeting'] = 'Hell student, bitch';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $sessions;?></title>
</head>
<body>
  <?php 
    echo $sessions; 
  ?>
</body>
</html>