<?php

$servername = "localhost";
$username = "Simen";
$password = "is115";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//henter alle medlemmene i databasen
$sql = "SELECT * FROM medlemmer";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Oppgave 3</title>
</head>

<body onload="">
    <label for="cars">Medlemmer:</label>
    <select name="members" id="mebers">
        <option selected disabled onclick="">Velg</option>
        <?php
        //looper de ut i en dropdown liste. Alle medlemmene har en onClick funksjon som kjører dersom man velger en av de.
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
        ?>
            <option onclick='getProfile(<?= $id ?>)'> <?= $row['fornavn'], " ", $row['etternavn']; ?> </option>

        <?php } ?>
    </select>
    <!-- Her blir profilen printet ut -->
    <div id="profile">

    </div>

    <a href="index.php">Startsiden</a>

    <script src="js/oppgave3_script.js"></script>
</body>

</html>