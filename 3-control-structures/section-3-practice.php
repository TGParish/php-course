<?php 
  // step 1 
  $myVar = false;
  if ($myVar) {
    echo "Wow!";
  } elseif ($myVar == 'bitch') {
    echo 'Haha';
  } else {
    echo 'I love php' . "</br>";
  }

  // step 2
  for ($counter = 0; $counter < 10; $counter++) {
    echo $counter . "</br>";
  }

  // step 3
  switch($myVar) {
    case false: 
      echo "shiiit";
    break;
    case 22: 
      echo "st";
    break;
    case 3434: 
      echo "sht";
    break;
    case 54545: 
      echo "t";
    break;
    case 65654256: 
      echo "tfasdf";
    break;
    case 3452345: 
      echo "shsadf";
    break;
  }