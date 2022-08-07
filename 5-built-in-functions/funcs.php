<?php 
// br func
  function br() {
    echo "</br>";
  }

  // math functions 
  echo pow(2, 7);
  br();

  echo rand(1, 1000);
  br();

  echo sqrt(100); 
  br();

  echo ceil(4.6);
  br();

  echo floor(4.6);
  br();

  // string funcs
  $string = 'I recieved your letter yesterday';
  echo strlen($string);
  br();

  echo strtoupper($string);
  br();

  // array functions
  $list = [3, 69, 420];

  echo max($list);
  br();

  //practice section
  echo sqrt(69);
  br();

  $items = ['sword', 'shield', 'lube'];
  $someNumbs = [23, 444, 434234];
  $myStr = 'Hey';

  echo strlen($myStr);
  br();

  echo max($someNumbs);