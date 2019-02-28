<?php
class User{
  public $username;

  public function __construct($username){
    $this->username = $username; // set username
  }
}

$User = new User('Henry',123);

echo $User->username;




/*
PROPERTIES & VISIBILITY

DEFAULT VALUE, AND ACCESSING PROPERTIES, INSIDE METHODS
class User{
  public $id = 33;
  
  public function login(){
    echo $this->id;
  }
}

$User = new User;

$User->login();



PASSING METHOD PARAMS TO PROPERTIES, AND ACCESSING IT
class User{
  public $username;
  public $password;

  public function login($username, $password){
    $this->username = $username; // set username
    $this->password = $password; // set password
    echo $this->username. '<br>' .$this->password;
  }
}

$User = new User;

$User->login('Henry',123);



PASS PARAMS TO CONSTRUCTOR
class User{
  public $username;
  public $password;

  public function __construct($username, $password){
    $this->username = $username; // set username
    $this->password = $password; // set password
  }
  public function login(){
    echo $this->username. '<br>' .$this->password;
  }
}

$User = new User('Henry',123);

$User->login();



ACCESS DATA OUTSIDE THE CLASS
class User{
  public $username;

  public function __construct($username){
    $this->username = $username; // set username
  }
}

$User = new User('Henry',123);

echo $User->username;


*/
