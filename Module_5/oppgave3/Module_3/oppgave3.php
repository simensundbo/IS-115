<h1>Oppgave 3</h1>

<form action="oppgave3.php" method="get">
    <input type="text" name="num1" placeholder="For eksempel: 15"></input><br>
    <input type="text" name="num2" placeholder="For eksempel: 10"></input><br>
    <input type="submit" name="submit"></input>
</form>

<?php

//sjekker at formet er blitt sendt inn
if(isset($_GET["submit"]))
{
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    /* Test om det funker med forskjellige datatyper. PHP knytter automatisk en datatype til variabelen, avhengig av verdien. Derfor går det å legge sammen en integer og en string.
    $num1 = 15;
    $num2 = "10";
    */

    echo "Innputt: $num1 og $num2 <br><br>";

    //for loop som regner ut summen, diff og gjennomsnittet. Tall 1 blir også 1 større for hver gang loopen går
    for($i = 0; $i <= 10; $i++)
    {
        echo "Tall 1: $num1 <br> Tall 2: $num2 <br>";
        $sum = $num1 + $num2;
        $diff = $num1 - $num2;
        $avg = abs($sum / 2);
        $num1++; // plusser en på $num1 for hver gang loopen kjøres.

        echo "Runde $i. " . "Summen er: $sum. Differansen er: $diff. Gjennomsnittet er: $avg <br><hr>";
    }
}


echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';