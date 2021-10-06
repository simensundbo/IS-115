<h1>Oppgave 5</h1>

<?php
//liste med spillere som er med i konkuransen. Key-en er navnmet til spilleren og valuen er poengene. 
//associative array
$players = [
    "Simen" => 0,
    "Andreas" => 0,
    "Elias" => 0,
    "Maren" => 0,
    "Rikke" => 0,
    "Henrik" => 0,
    "Stian"=> 0,
    "Sindre" => 0,
    "Jenny"  => 0,
    "Sondre" => 0
];

//Lister opp deltaker i konkuransen før runden starter.
echo "Deltakere: <br>";
foreach($players as $key => $value)
{
    echo $key . " |";
}

echo "<br><br><hr>";

//Starter konkuransen, spillet går i en while loop til den siste spilleren står igjen. 
$round = 0;
while(count($players) >1 )
{
    $round++;
    
    //Lister opp deltakerene og legge til en poeng til hver av dem.
    foreach($players as $key => $value)
    {
        $number = rand(1,50);
        $players[$key] = $value = $value + $number;
    }

    //sorter assosiative matriser i stigende rekkefølge, i henhold til verdien av nøklene
    asort($players);


    echo "<br> Runde $round <br> ";

    //Lister opp deltaker etter poeng.
    foreach($players as $name => $points)
    {
        echo "$name: $points poeng |";
    }

    echo "<br>";
    
    //Fjerner deltaker med lavest poeng fra arrayen/spillet. Dette vil da være den første spilleren i arrayen etter og ha kjørt asort() metoden.
    $remove = array_splice($players, 0, 1);
    
    //Viser frem den deltakeren som ryker.
    foreach($remove as $name => $points)
    {
        echo  "Den som ryker ut er $name med $points poeng.";
    }

    echo "<br><hr><br>";
}

//Lister opp vinneren når det er bare 1 deltaker igjen i arrayen.
foreach($players as $name => $points)
{
    echo  " Vinneren av konkuransen er $name med $points poeng.";
}

echo "<br><br>";
echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';