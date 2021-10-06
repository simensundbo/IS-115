<h1>Oppgave 1</h1>
<form action="oppgave1.php" method="get">
    <label >Navn</label><br>
    <input type="text" name="name"><br>
    <label >Alder</label><br>
    <input type="number" name="age"><br>
    <input type="submit" name="submit">
</form>

<?php

//sjekker at formet er blitt sendt på en riktig måte
if(isset($_GET["submit"]))
{
    $name = ucwords(strtolower($_GET["name"]));//formateringen av navnet. 
    $age = $_GET["age"];

    //if setning som sjekker om vareabelen age er større eller mindre enn 18. 
    if($age >= 18)
    {
        //printer ut dersom alderen er større eller lik 18
        echo "$name er $age år og dermed myndig.";
        
    }else 
    {
        //Printer ut dersom alderen er mindre enn 18
        echo "$name er $age år og dermed ikke myndig.";
    }
}


echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';