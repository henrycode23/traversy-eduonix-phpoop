<?php

class First{
  public $id = 23;
  protected $name = 'John Doe';

  public function saySomething($word){
    echo $word;
  }
}

class Second extends First{
  public function getName(){
    echo $this->name;
  }
}

$Second = new Second;

echo $Second->getName();


/*

ECHO SECOND CLASS EXTENDS FIRST
-ALL PROPS & METHODS ON CLASS FIRST, ARE AVAILABLE WHEN WE CALL CLASS SECOND
class First{
  public $id = 23;
  public $name = 'John Doe';

  public function saySomething(){
    echo 'Something';
  }
}

class Second extends First{
  
}

$Second = new Second;

echo $Second->name;
echo $Second->saySomething();




ACCESSING PROTECTED
class First{
  public $id = 23;
  protected $name = 'John Doe';

  public function saySomething($word){
    echo $word;
  }
}

class Second extends First{
  public function getName(){
    echo $this->name;
  }
}

$Second = new Second;

echo $Second->getName();



*/