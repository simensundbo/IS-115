<?php

//$url = "https://v2.jokeapi.dev/joke/Programming?type=twopart";
$url = "https://api.chucknorris.io/jokes/random";

$ch = curl_init();

$param = array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => 1
);

curl_setopt_array($ch, $param);

$resultat = curl_exec($ch);

curl_close($ch);

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

    <p><?= $arr["value"]; ?></p>

    <a href="index.php">Tilbake til startsiden</a>

    
    
</body>
</html>