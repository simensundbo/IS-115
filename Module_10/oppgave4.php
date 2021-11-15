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


//henter dataen som allerede ligger i databasen
$query = $conn->query("SELECT * FROM poll;");

$JavaCount = 0;
$PHPCount = 0;
$PythonCount = 0;
$SwiftCount = 0;
$CCount = 0;

while ($row = $query->fetch_assoc()) {
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Oppgave 4</title>
</head>

<body>
    <!-- Om man klikker kjører add funksjonen -->
    <button onclick="add('Java')">Java</button>
    <button onclick="add('PHP')">PHP</button>
    <button onclick="add('Python')">Python</button>
    <button onclick="add('Swift')">Swift</button>
    <button onclick="add('C')">C</button>


    <table>
        <tr>
            <th>Java</th>
            <th>PHP</th>
            <th>Python</th>
            <th>Swift</th>
            <th>C</th>
        </tr>
        <tr>
            <td id="JavaCount"><?= $JavaCount ?></td>
            <td id="PHPCount"><?= $PHPCount ?></td>
            <td id="PythonCount"><?= $PythonCount ?></td>
            <td id="SwiftCount"><?= $SwiftCount ?></td>
            <td id="CCount"><?= $CCount ?></td>
        </tr>

    </table>

    <a href="index.php">Startsiden</a>

    <script src="js/oppgave4_script.js"></script>
</body>

</html>