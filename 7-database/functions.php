<?php 
include 'database.php';

function createRows() {
  if(isset($_POST['submit'])) {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    // sql injection
    $username = mysqli_real_escape_string('$connection', $username);
    $password = mysqli_real_escape_string('$connection', $password);

    $hashFormat = "$2y$10$";

    $salt = "asdfasdfjasdlfkj33";

    $hash_and_salt = $hash_and_salt . $salt;

    $encrypt_password = crypt($password, $hash_and_salt);

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      die('Query failed' . mysqli_error());
    }
  }
}

function showAllData () {
  global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);
  
  if (!$result) {
    die('querying failed' . mysqli_error($connection));
  }
  
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value=''>$id</option>";
  }
} 

function updateTable() {
  global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id "; 

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("query failed" . mysqli_error($connection));      
    }
}

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