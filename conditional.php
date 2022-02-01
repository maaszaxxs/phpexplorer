<?php
//if statement
$num=14;
if ($num>7){
    echo "The answer is true";
}
echo "<br>";

//if...else statement
$num1=65;
$num2=17;

if ($num1<=$num2 && $num2=65){
    echo "The answer is true";
}else{
    echo "The answer is false";
}
echo "<br>";

//if...elseif...else statement

$grade=105;
if ($grade<=39){
    echo "You have failed";
}elseif ($grade<=60 and $grade>=40){
    echo "That's a pass";
}elseif ($grade<=80 && $grade>60){
    echo "That's a credit";
}elseif ($grade<=100 && $grade>80){
    echo "That's a distinction";
}else{
    echo "Out of range";
}
?>