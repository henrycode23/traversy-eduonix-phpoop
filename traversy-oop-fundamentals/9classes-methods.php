<?php
class User{
  public function login($username, $password){
    $this->auth_user($username, $password);
  }
  public function auth_user($username, $password){
    echo $username.' is authenticated';
  }
}

$User = new User;

$User->login('Henry',123);

/*
  CLASSES & METHODS

CREATING CLASS
  class User{

  }



-public, private, protected - access modifier
-method = function inside a class



INSTANTIATING CLASS
  class User{

  }

  $User = new User;

  


ECHO METHODS
  class User{
    public function login(){
      echo 'This is the login() method inside the User class.';
    }
  }

  $User = new User;

  $User->login();



METHODS WITH PARAMS
  class User{
    public function login($username, $password){
      echo $this->username = $username;
    }
  }

  $User = new User;

  $User->login('Henry',123);
  


CONSTRUCTOR
__construct = obliged to run when class is instantiated, run on start
  class User{
    public function __construct(){
      echo 'This is a constructor';
    }
  }

  $User = new User;



DESTRUCTOR
-__destruct = obliged to run when class is instantiated, run on end
  class User{
    public function __destruct(){
      echo 'This is a destructor';
    }
  }

  $User = new User;



CALL A METHOD INSIDE ANOTHER METHOD
  class User{
    public function login(){
      $this->auth_user();
    }
    public function auth_user(){
      echo 'This is the auth_user() method, being called inside another method named login() method';
    }
  }

  $User = new User;

  $User->login();



  CALL A METHOD INSIDE ANOTHER METHOD WITH PARAMS
  class User{
    public function login($username, $password){
      $this->auth_user($username, $password);
    }
    public function auth_user($username, $password){
      echo $username.' is authenticated';
    }
  }

  $User = new User;

  $User->login('Henry',123);


  
*/