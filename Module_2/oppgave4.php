<form action="oppgave4.php" method="get">
        <label>Regn ut hvor gammel du er. Husk bindestrek. Eksempel(12-10-1999)</label><br>
        <input type="text" name="birthday" placeholder="DD-MM-YYYY"></input><br>
        <input type="submit" name="submit">
</form>
<hr>

<?php

if(isset($_GET["submit"]))
{
    $dateOfBirth = $_GET["birthday"];
    $today = date("Y-m-d");
    $diff = date_diff(new DateTime($dateOfBirth), new DateTime($today));
    echo 'Alder: '. $diff->format('%y år %m månder %d dager <br><br>');
}


echo '<a href="index.php">Gå tilbake til startsiden</a>';