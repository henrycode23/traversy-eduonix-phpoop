<?php
class User{
  // public $id = 33;
  private $id;
  private $username;
  private $email;
  private $password;

  public function __construct($username, $password){
    $this->username = $username;
    $this->password = $password;
    // echo 'Constructor method';
  }

  public function register(){
    echo "Henry is registered";
  }

  public function login(){
    $this->auth_user();
    // $this->auth_user($username, $password);
  }

  public function auth_user(){
    // echo $this->username.' is authenticated';
    // echo $username.' is authenticated';
    // echo "<br>".$this->id;
  }

  public function __destruct(){
    // echo 'Destruct method';
  }
}

$User = new User('Henry','wordpass');

// echo $User->username;

// $User->register();

// $User->login();

/*
  CLASSES & METHODS
-creating class
-public, private, protected - modifier
-prop = attr
-method = function inside a class
-instantiating class
-running methods
-methods w/ params and calling it
-__construct = obliged to run when class is instantiated, run on start
-__destruct = obliged to run when class is instantiated, run on end
-call a method inside another method

  PROPERTIES & VISIBILITY
-prop/attr also needs access modifier
-can add default values in props
-can access props in all methods
-when passing stuff to a method in our object,
  we want to set it to our props
-can have params in constructor

*/
