<?php
$explorerclass=array("Christine","Collins","Diana","Zulfah","Lavenda","Lesley");
$arr=array("Emobilis",1980,34.65,true,false,null,);
var_dump($explorerclass);
echo "<br>";
var_dump($arr);
echo "<br>";
echo $explorerclass[2];
$explorerclass[0]="Ruth";
echo "<br>";
echo $explorerclass[0];
echo "<br>";
//For Each loop
foreach ($explorerclass as $names){
    echo "$names <br>";
}
//Associative arrays
$exporeage= array("Erick"=>30,"Kelvin"=>21,"catherine"=>19);

echo "Erick is ".$exporeage['Erick'] ."Years";
