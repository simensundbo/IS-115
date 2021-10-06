<?php
include_once "includes/bootstrap.inc.php";
include_once "includes/db.inc.php";

if (isset($conn)) {
    //henter alle medlemmer
    $result = $conn->query("SELECT * FROM medlemmer;");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Oppgave 1</title>
</head>

<body>
    <h1 class="display-2">Medlemmer</h1>
    <Table class="table">
        <thead>
            <tr>
                <th>Medlemsnr</th>
                <th>Fornavn</th>
                <th>Etternavn</th>
                <th>Epost</th>
                <th>Brukernavn</th>
                <th>Mobilnr</th>
                <th>Adresse</th>
                <th>Postnr</th>
                <th>Poststed</th>
                <th>Fødselsdato</th>
                <th>Kjønn</th>
                <th>Betalt</th>
                <th>Medlemsdato</th>
            </tr>
        </thead>

        <?php
        //Lager en assosiativ array med verdiene fra medlems tabellen.
        //Looper gjennom verdiene og printer dem ut i tabellen. 
        while ($row = $result->fetch_assoc()) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["fornavn"]; ?></td>
                    <td><?php echo $row["etternavn"]; ?></td>
                    <td><?php echo $row["epost"]; ?></td>
                    <td><?php echo $row["brukernavn"]; ?></td>
                    <td><?php echo $row["mobilnr"]; ?></td>
                    <td><?php echo $row["adresse"]; ?></td>
                    <td><?php echo $row["postnr"]; ?></td>
                    <td><?php echo $row["poststed"]; ?></td>
                    <td><?php echo $row["fødselsdato"]; ?></td>
                    <td><?php echo $row["kjønn"]; ?></td>
                    <td><?php echo $row["betalt"]; ?></td>
                    <td><?php echo $row["medlemsdato"]; ?></td>
                </tr>
            </tbody>

        <?php
        }
        //lukker tilkoblingen til db
        $conn->close();
        ?>
    </Table>

    <br><br>
    <a href="index.php">Gå tilbake til startsiden</a>
</body>

</html>