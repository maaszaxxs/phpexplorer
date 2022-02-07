<?php
function hesabu(){  //creating a function
    $num=45;
    $num2=22;

    echo $num + $num2;

}
hesabu(); //Calling a function
echo "<br>";

echo pi();  //inbuild function
echo "<br>";
//now lets create a function with some arguments

function explorer($jina, $miaka){
    echo "$jina Alizaliwa $miaka <br>";
}
explorer("erick", 1980);
explorer("susan", 2000);
explorer("christine", 2001);
explorer("charles", 1997);
echo "<br>";

echo "_______________________DRINKS_______________________<br>";
function drink($drink, $chaser, $syrup){
    echo "$drink goes well with $chaser and you can add $syrup if you like<br>";
}

drink("rum", "cocacola", "lime juice");
drink("tequila", "orange juice", "grenadine");
drink("gin", "tonic", "lemon juice");