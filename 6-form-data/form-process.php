<?php 
    if (isset($_POST['submit'])) {
      $username = $_POST['username']; 
      $password = $_POST['password'];

      $min = 5;
      $max = 10;
      $names = ['Joe', 'Moz', 'weewoo'];

      if(!in_array($username, $names)) {
        echo 'User not found';
      } elseif (strlen($username) < $min) {
        echo 'Username is too short!';
      } else {
        echo 'Wtf';
      }
      if(strlen($username) > $max) {
        echo 'Username is too long!';
      }
    };