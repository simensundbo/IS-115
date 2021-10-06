<?php
//Eksmpel på OOP i PHP
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods setter and getter
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name("Apple");

echo $apple->get_name();


?>