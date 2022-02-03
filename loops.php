<?php

//While Loop

$num=5; //initializes my loop

while ($num<=15){ //continue repeating as long as true
    echo "Nambari ni: $num <br>";
    $num+=2; //increase loop by 2 for each
}

echo "<br>";
//do...while loop
$num2=11;
do {
    echo "Nambari ni: $num2 <br>";
    $num2++;
}while($num2<=10);

echo "<br>";

//While Loop

$num=10; //initializes my loop

while ($num<=50){ //continue repeating as long as true
    echo "Nambari ni: $num <br>";
    $num+=5; //increase loop by 5 for each
}

echo "<br>";

//do...while loop
$num2=15;
do {
    echo "Nambari ni: $num2 <br>";
    $num2+=5;
}while($num2<=50);
echo "<br>";

//for with (inital counter;test counter;increment/decrement counter)
echo "___________COUNTDOWN (FOR LOOP)________";
echo "<br>";
for ($num3=10;$num3>=1;$num3--){
    echo "Countdown: $num3 <br>";
}
echo "<br>";

//for each loop
echo "___________FOOD TIMETABLE (Foreach Loop)_________";
echo "<br>";
$food = array("Breakfast"=>"Oats", "Breaktime"=>"Banana Cake", "Lunch"=>"Omena", "Supper"=>"Green Tea");
echo var_dump($food);
echo "<br>";
foreach($food as $var=>$y) {
    echo "I ate for $var --> $y <br>";
}


