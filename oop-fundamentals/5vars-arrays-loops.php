<?php
// VARIBLES
$myVar1 = "Hello World!";
echo $myVar1;
echo "<br><hr><br>";

$myVar2 = "Hello";
$myVar3 = "World!";
echo $myVar2." ".$myVar3;
echo "<br><hr><br>";

// ARRAYS
// $numbers = array(12,34,56,87,98);
$numbers = [12,34,56,87,98];
echo $numbers[3];
echo "<br>";
print_r($numbers);
echo "<br>";
array_pop($numbers);
print_r($numbers);
array_shift($numbers);
echo "<br>";
print_r($numbers);
echo "<br><hr><br>";

$ages = array(
  "John" => 35,
  "Mary" => 27,
  "Bob" => 55
);

print_r($ages);
echo "<br>";
array_pop($ages);
print_r($ages);
array_shift($ages);
echo "<br>";
print_r($ages);
echo "<br><hr><br>";

// LOOPS
// FOR
for($i = 0; $i < 5; $i++){
  echo $i;
}

echo "<br><br>";

// WHILE
$i = 1;
while($i <= 10){
  echo "Number ".$i."<br />";
  $i++;
}

echo "<br><br>";

// FOREACH - USED FOR ARRAYS
$numbers = [12,54,23,98,54];
foreach($numbers as $number){
  echo $number," ";
}

echo "<br><br>";

$ages = array(
  "John" => 35,
  "Mary" => 27,
  "Bob" => 55
);
foreach($ages as $name => $age){
  echo $name." is ".$age." years old.<br/>";
}

?>