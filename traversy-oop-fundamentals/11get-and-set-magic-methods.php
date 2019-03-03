<?php
class Post{
  private $name;

  public function __set($name, $value){
    echo 'Setting '.$name.' to <strong>'.$value.'</strong><br />';
    $this->name = $value;
  }
  public function __get($name){
    echo 'Getting '.$name.' <strong>'.$this->$name.'</strong><br />';
  }
  public function __isset($name){
    echo 'Is '.$name.' set?<br/>';
    return isset($this->name);
  }
}

$Post = new Post;
$Post->name = 'Testing';
$Post->name;
var_dump(isset($Post->name));




/*
__GET & __SET MAGIC METHODS

ACCESS PRIVATE PROP USING __GET, __SET, __ISSET MAGIC METHODS
class Post{
  private $name;

  public function __set($name, $value){
    echo 'Setting '.$name.' to <strong>'.$value.'</strong><br />';
    $this->name = $value;
  }
  public function __get($name){
    echo 'Getting '.$name.' <strong>'.$this->$name.'</strong><br />';
  }
  public function __isset($name){
    echo 'Is '.$name.' set?<br/>';
    return isset($this->name);
  }
}

$Post = new Post;
$Post->name = 'Testing';
$Post->name;
var_dump(isset($Post->name));





*/