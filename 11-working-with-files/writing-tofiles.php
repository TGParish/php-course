<?php 
  $file = "example.txt";

  if ($handle = fopen($file, "w")) {
    fwrite($handle, 'I love PHP and this is great');
     
    fclose($handle);
  } else {
    echo "Applicaton failed";
  }