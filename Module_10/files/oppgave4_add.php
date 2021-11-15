<?php
$servername = "localhost";
$username = "Simen";
$password = "is115";
$dbname = "module_10";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$value = $_GET['value'];

$query = $conn->prepare("INSERT INTO poll(Name) VALUES (?)");

$query->bind_param('s', $value);

$query->execute();


