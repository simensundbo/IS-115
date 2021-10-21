<?php
include_once '../includes/bootstrap.inc.php';
include_once '../includes/db.inc.php';
//starter session
session_start();

// sjekker at session vareabelen pålogget = true.
if ($_SESSION["pålogget"] !== true) {
    header('Location: login.php?error=notLoggedIn');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Velkommen</title>
</head>

<body>
    <h1>Dette vil bli hjemmesiden for de som har logget på</h1>
    <p>Brukeren som er pålogget</p>
    <?php
    //skriver ut bruker id og brukernavn. 
    echo "Bruker id: " .  $_SESSION["brukerid"];
    echo "<br>";
    echo "Brukernavn : " .  $_SESSION["brukernavn"];
    echo "<br>";
    ?>

    <a href="logout.php">Logg ut</a>
    <br><br>
    <hr><br>

    <main>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Velg ett bilde: <br>
            <input class="form-control-file" type="file" name="img"><br>
            <input type="submit" value="Last opp bilde" name="submit">
        </form>
        <br>
        <?php
        //printer ut melding til brukeren
        if (isset($_GET["error"])) {
            echo $_GET["error"];
        }elseif(isset($_GET["success"])){
            echo $_GET["success"];
        } ?>
    </main>

</body>

</html>