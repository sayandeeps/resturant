<?php

$hostname = 'localhost:3306';
$username = 'root';
$password = 'password';
$dbname = 'jisbctresturant';

$conn = mysqli_connect($hostname, $username, $password ,$dbname);

if(mysqli_connect_errno()){
    die("Database connection failed: " . mysqli_connect_error());
}

?>