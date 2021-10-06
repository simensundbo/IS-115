<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oppgave 3</title>
</head>
<body>
<style>
    
table, th, td {
  border: 1px solid black;
}

</style>


    <h1>Oppgave 3</h1>

    <?php
        $name = "Simen Sundbø";
        $age = 22;

        echo "
        <table>
        <tr>
            <th>Navn</th>
            <th>Alder</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$age</td>
        </tr>
        </table>
        ";

        echo "
        <ol>
            <li>$name</li>
            <li>$age</li>
        </ol>
        ";

        echo "
        <ul>
            <li>$name</li>
            <li>$age</li>
        </ul>
        ";

        echo "Hei " . $name . ". Du er " . $age . " år gammel <br><br>";

        echo '<a href="index.php">Gå tilbake til startsiden</a>';

        ?>

</body>
</html>