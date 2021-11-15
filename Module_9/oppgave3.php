<?php

//$url = "https://v2.jokeapi.dev/joke/Programming?type=twopart";
$url = "https://api.chucknorris.io/jokes/random";

//starter curl
$ch = curl_init();

//definerer parametere
$param = array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => 1
);

//setop
curl_setopt_array($ch, $param);

//henter resultatet fra apien
$resultat = curl_exec($ch);

//lukker curl
curl_close($ch);

//decoder json til array format
$arr = json_decode($resultat, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <h1>En tilfeldig Chuck Norris vits</h1>
<!-- viser frem arrayen -->
    <p><?= $arr["value"]; ?></p>

    <a href="index.php">Tilbake til startsiden</a>

    
    
</body>
</html>