
<form action="oppgave2.php" method="get">
        <label>Fjerner html tags</label><br>
        <input type="text" name="name" value="<h1>Simen</h1> <h3>Sundbø</h3>"></input><br>
        <input type="submit" name="submit">
</form>
<hr>

<?php

if(isset($_GET["submit"]))
{
    @$str = $_GET["name"];

    echo htmlentities($str) . ": Printes ut med html tags.<br>";
    echo $str . "Printer ut innholde av variablen.<br>";
    echo strip_tags($str) . ": Fjerner html tags fra variablen. <br>";
}


echo '<a href="index.php">Gå tilbake til startsiden</a>';


