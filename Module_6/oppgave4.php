<?php
include_once "includes/bootstrap.inc.php";
include_once "includes/db.inc.php";

//Utfører en spørring på databasen 
$query = $conn->query("SELECT * FROM aktiviteter WHERE start >= CURRENT_DATE order by start");




?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Oppgave 4</title>
</head>

<body>
    <h1 class="display-2">Kommende aktiviteter</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Navn</th>
                <th>Ansvarlig</th>
                <th>Start</th>
                <th>Slutt</th>
                <th>Beskrivelse</th>
            </tr>
        </thead>

        <?php
        //Lager en assosiativ array med verdiene fra medlems tabellen.
        //Looper gjennom verdiene og printer dem ut i tabellen. 
        while ($row = $query->fetch_assoc()) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $row["navn"]; ?></td>
                    <td><?php echo $row["ansvarlig"]; ?></td>
                    <td><?php echo $row["start"]; ?></td>
                    <td><?php echo $row["slutt"]; ?></td>
                    <td><?php echo $row["beskrivelse"]; ?></td>
                </tr>
            </tbody>

        <?php
        }
        //lukker tilkoblingen til db
        $conn->close();
        ?>
    </table>
    <br><br>
    <a href="index.php">Gå tilbake til startsiden</a>
</body>

</html>