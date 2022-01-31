<?php
//Arithmetic Operators
$num1=56;
$num2=92;
echo $num1+$num2;  //addition
echo "<br>";
echo $num2-$num1;   //subtraction
echo "<br>";
echo $num2*$num1;   //multiplication
echo "<br>";
echo $num2/$num1;   //division
echo "<br>";
echo $num2%$num1;   //modulus
echo "<br>";

//Assignment Operator
$num3=250;
$num3 +=87;
echo $num3;
echo "<br>";

//Comparison Operator
$num4=780;
$num5="780";
var_dump($num4==$num5); //equals operator
echo "<br>";

var_dump($num4===$num5); //identical operator
echo "<br>";

var_dump($num4!=$num5);
echo "<br>";
$num6=200;
$num7=200;

//comparison operator
var_dump($num6>$num7); //greater
echo "<br>";
echo ++$num6;
echo "<br>";
var_dump(--$num6<++$num7); //lesser plus increment and decrement
echo"<br>";
echo $num6;
echo "<br>";
echo $num7;
echo "<br>";
