<?php 

// Connecting to database: ambia_madrasa.
$connection = mysqli_connect('localhost','root','','ambia_madrasa_database');

if(!$connection) {
    die("Problem connecting to database.");
    mysqli_error();
}

?>

