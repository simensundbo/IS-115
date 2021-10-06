<?php

//tekst som skal krypteres
$string = "Simens passord";
//nøkkel for kryptering og dekryptering
$key = "wasd";
//Algoritme for krypteringen
$method= "AES-128-CTR";
//Den inneholder initialiseringsvektoren
$encryption_iv = '1234567891011121';
//bitwise disjunction
$options = 0;



echo "Innputt: $string <br><br>";

function encryption($string, $key) : string
{

    //metoden som krypterer data
    return openssl_encrypt($string, $GLOBALS["method"], $key, $GLOBALS["options"], $GLOBALS["encryption_iv"]);

}


$encryptedText =  encryption($string , $key);
//printer ut verdien
echo "Krypterkt tekst: $encryptedText";


function decryption($string, $key) : string
{
    //metoden som dekrypterer data
    return openssl_decrypt($string, $GLOBALS["method"], $key, $GLOBALS["options"], $GLOBALS["encryption_iv"]);

}

echo "<br><br>";

$decryptedText = decryption($encryptedText, $key);
//printer ut verdien
echo "Dekryptert tekst:  $decryptedText";
