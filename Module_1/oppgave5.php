<h1>Oppgave 5</h1>

<form action="oppgave5.php" method="get">
    <label>Innputt sekunder</label><br>
    <input type="text" name="sekunder" placeholder="For eksempel: 4400"></input><br>
    <input type="submit" name="submit"></input><br>
</form>

<?php

    $sec = @$_GET["sekunder"];

    $s = $sec%60;
    $m = floor(($sec%3600)/60);
    $t = floor(($sec%86400)/3600);

    echo $sec . " sekunder består av: <br>";
    echo "$t timer, $m minutter, $s sekunder<br><br>";

    echo "Eventuelt kan man bruke php sin innebgyde function gmdate som tar sekunder som innputt. <br>";
    echo gmdate("h:i:s,", $sec) . "<br><br>";

    echo '<a href="index.php">Gå tilbake til startsiden</a>';

?>

