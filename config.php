 
<?php
// Replace these credentials with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studiowhite2";


// Create connection
$conn = new mysqli($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Function to check and create database if not exists
if (!function_exists('createDatabase')) {
    function createDatabase($conn, $dbname)
    {
        $query = "CREATE DATABASE IF NOT EXISTS $dbname";
        if (mysqli_query($conn, $query)) {
        } else {
            echo "Error creating database: " . mysqli_error($conn) . "<br>";
        }
    }
}
createDatabase($conn, $dbname);

// Close the connection after creating the database
mysqli_close($conn);

// Reconnect to the newly created database
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// In a config file or a common include file
// define('BASE_URL', '/studiowhite/');
