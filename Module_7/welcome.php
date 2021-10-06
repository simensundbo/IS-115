<?php
include_once 'includes/bootstrap.inc.php';
include_once 'includes/db.inc.php';
session_start();
if($_SESSION["pålogget"] !== true){
    header('Location: login.php?error=nouser');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Velkommen</title>
</head>

<body>
    <h1>Dette vil bli hjemmesiden for de som hart logget på</h1>

<?php 
    echo "Bruker id: ".  $_SESSION["brukerid"];
    echo "<br>";
    echo "Brukernavn : " .  $_SESSION["brukernavn"];
    echo "<br>";
?>

<a href="logout.php">Logg ut</a>

</body>

</html>