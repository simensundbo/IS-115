<h1>Oppgave 1</h1>

<?php

//definerer arrayen
$arr = array(
    0=> "index 0",
    3=> "index 3",
    5=> "index 5",
    7=> "index 7",
    8=> "index 8",
    15=> "index 15",
);

//printer ut arrayen der man kan både se key og value
print_r($arr);
echo "<br><br> Printer ut verdiene av array-en <br>";

//looper over arrayen og skriver ut verdiene av den.
foreach($arr as $key => $value)
{
    echo "Nøkkel: $key. Verdi: $value  <br>";
}


echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';
