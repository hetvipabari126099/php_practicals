<?php
$a = 20;
$b = 10;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br><br>";

echo "a == b : ";
var_dump($a == $b);
echo "<br>";

echo "a > b : ";
var_dump($a > $b);
echo "<br>";

echo "a < b : ";
var_dump($a < $b);
echo "<br>";

echo "a > 15 && b < 15 : ";
var_dump($a > 15 && $b < 15);
echo "<br>";

echo "a > 25 || b < 15 : ";
var_dump($a > 25 || $b < 15);
echo "<br>";

?>