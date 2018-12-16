<?php

// WARNING: NEVER DO THIS IN PRODUCTION
$servername = "localhost";
$username = "abdulazez";
$password = "";
$database = "cpit405-class";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// check the connection
if ($conn->connect_error) {
    // exit and kill this process
    echo "Failed to connect to database!";
    die("Connection failed: ");
}
  
?>