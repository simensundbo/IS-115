<h1>Oppgave 4</h1>

<form action="oppgave4.php" method="get">
    <input type="text" name="num1" placeholder="For eksempel: 15"></input>
    <input type="text" name="num2" placeholder="For eksempel: 10"></input>
    <input type="submit" name="submit"></input>
</form>


<?php

$num1 = @$_GET["num1"];
$num2 = @$_GET["num2"];

$diff = $num1 - $num2;

if($diff < 0)
{
    $diff = "Differansen ble negativ";
}

    echo "Innputt: " . $num1 . " " . $num2 . "<br>";
    echo "Summen er = " . $num1 + $num2 . "<br>";
    echo "Differansen er = " . $diff . "<br>";
    echo "Gjennomsnittet er = " . ($num1 + $num2) / 2 . "<br><br>";

    echo '<a href="index.php">Gå tilbake til startsiden</a>';
?>


