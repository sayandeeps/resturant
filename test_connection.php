<?php
$hostname = 'localhost:3306';
$username = 'root';
$password = 'password';
$dbname = 'jisbctresturant';

// Attempt to establish a connection to the database
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    echo("Database connection failed: ");
} else {
    echo "Database connection successful!";
}

// Debugging output to see the values of variables
echo "<br>Hostname: " . $hostname;
echo "<br>Username: " . $username;
echo "<br>Password: " . $password;
echo "<br>Database Name: " . $dbname;
echo "<br>Connection variable: ";
var_dump($conn);
ob_flush();
flush();

?>
