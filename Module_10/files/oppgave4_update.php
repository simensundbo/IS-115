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

$get = $conn->query("SELECT * FROM poll;");

$JavaCount = 0;
$PHPCount = 0;
$PythonCount = 0;
$SwiftCount = 0;
$CCount = 0;

while ($row = $get->fetch_assoc()) {
    if ($row['Name'] == 'Java') {
        $JavaCount++;
    } elseif ($row['Name'] == 'PHP') {
        $PHPCount++;
    } elseif ($row['Name'] == 'Python') {
        $PythonCount++;
    } elseif ($row['Name'] == 'Swift') {
        $SwiftCount++;
    } elseif ($row['Name'] == 'C') {
        $CCount++;
    }
}

$data = array($JavaCount, $PHPCount, $PythonCount, $SwiftCount, $CCount);

echo json_encode($data);