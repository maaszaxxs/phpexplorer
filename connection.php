<?php
//mysql object oriented way:
$myserver="localhost";
$username="root";
$password="";

//creat the connection

$connection= new mysqli($myserver,$username,$password);

//check connection
if($connection->connect_error) {
    die("Did not connect to Db(Failed)" . $connection->connect_error());
}else {
    echo "Connected Successfully <br>";
}

//Create a database
$sqlcreate="CREATE DATABASE Explorerclass2";

if($connection->query($sqlcreate)==TRUE) {
    echo "Database created !!!!! ";
}else{
    echo "Failed to create Db" .$connection->error;
}
$connection->close();

