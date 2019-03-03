<?php
class People{
  public $person1 = 'Mike';
  public $person2 = 'Shelly';
  public $person3 = 'Jeff';

  protected $person4 = 'John';
  private $person5 = 'Jen';

}

$people = new People;

foreach($people as $key => $value){
  print "$key => $value\n";
}








/*

ITERATION INSIDE A CLASS - all props will be accessible
class People{
  public $person1 = 'Mike';
  public $person2 = 'Shelly';
  public $person3 = 'Jeff';

  protected $person4 = 'John';
  private $person5 = 'Jen';

  function iterateObject(){
    foreach($this as $key => $value){
      print "$key => $value\n";
    }
  }
}

$people = new People;
$people->iterateObject();




ITERATION OUTSIDE A CLASS - protected, private will not display 
class People{
  public $person1 = 'Mike';
  public $person2 = 'Shelly';
  public $person3 = 'Jeff';

  protected $person4 = 'John';
  private $person5 = 'Jen';

}

$people = new People;

foreach($people as $key => $value){
  print "$key => $value\n";
}






-take an object and iterate through its props
-can do this from within a method in the class or outside of class


*/