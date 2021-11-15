<?php
//påner en csv fil
$file = fopen("Postnummerregister-csv.csv", "r");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Postnummer</th>
            <th>Poststed</th>
            <th>Kommunenummer</th>
            <th>Kommunenavn</th>
        </tr>
        
        <?php

        //henter ut de 20 første linjene av filen
        for($i = 0; $i < 20; $i++) {
            $data = fgetcsv($file, 0, ";");
        ?>
        <tr>
            <td><?= $data['0'] ?></td>
            <td><?= $data['1'] ?></td>
            <td><?= $data['2'] ?></td>
            <td><?= $data['3'] ?></td>
        </tr>
        <?php } ?>
    </table>

</body>

</html>