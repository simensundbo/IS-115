<?php

$url = "api.openweathermap.org/data/2.5/find?q=Oslo&units=metric&appid=f72f6212854d177ec2fffc9ac25adcc2";

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

echo $resultat;