<?php
class User{
  public $username;
  public static $minPassLength = 5;

  public static function validatePassword($password){
    if(strlen($password) >= self::$minPassLength){
      return true;
    } else{
      return false;
    }
  }
}

$password = 'password'; // password = true, pass = false

if(User::validatePassword($password)){
  echo 'Password is valid';
} else{
  echo 'Password is NOT valid';
}

echo User::$minPassLength;





/*
GREAT EXAMPLE OF USING STATIC PROPS & METHODS OR CLASS
instead of using $this->minPassLength, use self::minPassLength
  class User{
    public $username;
    public static $minPassLength = 5;

    public static function validatePassword($password){
      if(strlen($password) >= self::$minPassLength){
        return true;
      } else{
        return false;
      }
    }
  }

  $password = 'password'; // password = true, pass = false

  if(User::validatePassword($password)){
    echo 'Password is valid';
  } else{
    echo 'Password is NOT valid';
  }





ACCESS STATIC PROP FROM OUTSIDE
  class User{
    public $username;
    public static $minPassLength = 5;

    public static function validatePassword($password){
      if(strlen($password) >= self::$minPassLength){
        return true;
      } else{
        return false;
      }
    }
  }
  
  echo User::$minPassLength;


*/