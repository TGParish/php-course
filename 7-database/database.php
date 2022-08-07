<?php 
      $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
      if($connection) {
        echo "Connected!";
      }
      if (!$connection) {
        die("Database connection has failed");
      }