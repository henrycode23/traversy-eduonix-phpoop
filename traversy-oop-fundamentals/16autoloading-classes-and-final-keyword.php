<?php
// ASSUMING THIS IS THE 'index.php' that are along with foo.php & bar.php
spl_autoload_register(function($class_name){
  include $class_name. '.php';
});

$foo = new Foo;
$bar = new Bar;

// $foo->sayHello();
// $bar->sayHi();
$bar->sayHello();







/*

-put classes into their own files
-how to autoload using the function called spl autoload register
-final keyword - prevent classes from being overwritten by child classes and methods
-spl auto register function - autoload all your classes for you



WITHOUT SPL AUTOLOAD REGISTER
include 'foo.php';
include 'bar.php';

$foo = new Foo;
$bar = new Bar;

$foo->sayHello();




WITH SPL AUTOLOAD REGISTER
spl_autoload_register(function($class_name){
  include $class_name. '.php';
});

$foo = new Foo;
$bar = new Bar;

$foo->sayHello();






*/