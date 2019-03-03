<?php
abstract class Animal{
  public $name;
  public $color;

  public function describe(){
    return $this->name. ' is ' .$this->color;
  }

  abstract public function makeSound();
}

class Duck extends Animal{
  public function describe(){
    return parent::describe();
  }
  public function makeSound(){
    return 'Quack';
  }
}

class Dog extends Animal{
  public function describe(){
    return parent::describe();
  }
  public function makeSound(){
    return 'Bark';
  }
}

$animal = new Duck(); // only abstract class can be instantiated. if new Duck() = Quack, if new Dog() = Bark
$animal->name = 'Henry';
$animal->color = 'Red';
echo $animal->describe(); // echo method describe, abstract class Animal
echo $animal->makeSound();





/*



-not used oftenly
-base class
-cannot be instantiated
-made to have other classes extends from and use the props & methods 
  that are inside of that abstract class
-abstract method inside a class, has to be abstract as well

*/