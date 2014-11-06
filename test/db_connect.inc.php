<?php
$server='localhost';
$user='root';
$password='';//'root','5eCC1Kb9'
$db = 'admin';

$mysqli = new mysqli("localhost", $user, $password, $db);
if ($mysqli->connect_errno) {
    echo "nie udalos podkl MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";
/*
$mysqli = new mysqli("127.0.0.1", $user, $password, $db, 3306);
if ($mysqli->connect_errno) {
    echo "nie udalos podkl MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
*/
//echo $mysqli->host_info . "\n";
?>