<?php
$server = "localhost";
$username = "root";
$password = "";
$DB = "baseoftic95";
// Create connection
try{
    $mysql = new mysqli($server, $username, $password,$DB);
} catch(Exception $e){
    echo "connection fail with DataBase";
    exit();
}
?>