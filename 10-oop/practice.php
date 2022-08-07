<?php 
  class Dog {
    var $legs = 4;
    var $eyes = 'blue';

    function showAll() {
      echo $this->legs . "<br>";
      echo $this->eyes . "<br>";
    }
  }


  $Pitbull = new Dog();


  $Pitbull->showAll();