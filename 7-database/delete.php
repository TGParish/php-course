<?php include 'database.php';

  function deleteRows() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("query failed" . mysqli_error($connection));
    }
  }