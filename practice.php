<?php





// PROPERTIES & VISIBILITY

// DEFAULT VALUE, AND ACCESSING PROPERTIES, INSIDE METHODS
/*
class User{
  public $id = 33;
  
  public function login(){
    echo $this->id;
  }
}

$User = new User;

echo $User->login();
*/





// PASSING METHOD PARAMS TO PROPERTIES, AND ACCESSING IT
/*
class User{
  public $username;

  public function login($username){
    $this->username = $username;
    echo $this->username;
  }
}

$User = new User;

echo $User->login('Henry',123);
*/