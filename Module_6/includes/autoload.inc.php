<?php

spl_autoload_register("myAutoload");

function myAutoload($class){
    $path = "classes/";
    $end = ".class.php";
    $filename = $path . $class . $end;

    if(!file_exists($filename)){
        echo "Filen: $filename fins ikke";
    }

    include_once $filename;
}

/*Eksempel på en autoloader. Finner classen som skal loades baser på navnet til klassen.
  Funker kun på klasser som ligger i classes mappen
*/