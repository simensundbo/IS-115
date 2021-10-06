<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="oppgave1.php" method="get">
        <label>Etternavn(i små kobstaver)</label><br>
        <input type="text" name="name" placeholder="Etternavnet ditt"></input><br>
        <input type="submit" name="submit">
    </form>
    <hr>
<?php


if(isset($_GET["submit"]))
{
    @$etternavn = $_GET["name"];
    echo ucwords(strtolower($etternavn));
    echo "<br>";
    echo strlen($etternavn);
}

?>

<br>

<?php echo '<a href="index.php">Gå tilbake til startsiden</a>'; ?>


</body>
</html>