<?php 
  $file = 'example.txt';

  if($handle = fopen($file, 'r')) {
    echo $content = fread($handle, 10);

    fclose($handle);
  }