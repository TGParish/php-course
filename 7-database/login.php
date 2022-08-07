<?php 
  include 'functions.php';
?>

<!-- // $query = "SELECT * FROM users";
// $result = mysqli_query($connection, $query);

// if (!$result) {
//   die('querying failed' . mysqli_error());
// }

  // if (isset($_POST['submit'])) {
  //   $username = $_POST['username'];
  //   $password = $_POST['password'];

  //   $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  //   if ($connection) {
  //     echo 'We are connected';
  //   } else {
  //     die("Database connection has failed");
  //   }

  //   $query = "INSERT INTO users(username, password) ";
  //   $query .="VALUES ('$username', '$password')";

  //   $result = mysqli_query($connection, $query);

  //   if (!$result) {
  //     die('querying failed' . mysqli_error());
  //   }
    
    // if ($username && $password) {
    //   echo $username . ' is logged in';
    // } else {
    //   echo 'Logging in failed';
    // }
  // } -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="login.php" method="post">
    <input type="text" name="username" id="" placeholder="username">
    <br>
    <input type="password" name="password" id="" placeholder="password">
    <br>
    <input type="submit" name="submit" id="">
    <select name="id" id="">
    <?php 
      showAllData();
    ?>
    </select>
  </form>
</body>
</html>