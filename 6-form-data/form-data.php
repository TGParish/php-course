<?php 
    // if (isset($_POST['submit'])) {
    //   $username = $_POST['username']; 
    //   $password = $_POST['password'];

    //   $min = 5;
    //   $max = 10;
    //   $names = ['Joe', 'Moz', 'weewoo'];

    //   if(!in_array($username, $names)) {
    //     echo 'User not found';
    //   } elseif (strlen($username) < $min) {
    //     echo 'Username is too short!';
    //   } else {
    //     echo 'Wtf';
    //   }
    //   if(strlen($username) > $max) {
    //     echo 'Username is too long!';
    //   }
    // };
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  <form action="form-process.php" method="post">
    <input type="text" name="username" id="" placeholder="username">
    <br>
    <input type="password" name="password" id="" placeholder="password">
    <br>
    <input type="submit" name="submit" id="">
  </form>
</body>
</html>