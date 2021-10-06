<h1>Oppgave 4</h1>

<?php
//definerer en array med indx 0-9 
$arr =  array(1,2,3,4,5,6,7,8,9,10);

print_r($arr);
echo "<br><br>";

//Bytter ut verdiene i arrayen.
$arrChange = array(10,11,12,13,14,15,16,17,18,19);

$arr = array_replace($arr, $arrChange);

print_r($arr);
echo "<br><br>";

//lager ett nytt start pungt for arrayen
$newStartIndex = 10;

//re-indexer arrayen. Den nye starter på 10 og ikke 0. 
$arr = array_combine(range($newStartIndex, count($arr) + ($newStartIndex -1)), array_values($arr));

//printer arrayen ut på en leslig måte
print_r($arr);
echo "<br><br>";

echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';

