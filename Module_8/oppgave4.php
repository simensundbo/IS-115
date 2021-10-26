<?php

//sjekker om filen er deklarert
if(isset($_GET["file"])){
    //henter ut fil navnet
    $file = $_GET["file"];
    //deler navnet opp i en array
    $arr = explode(".", $file);

    //sjekker om filtypen er lik pdf
    if(end($arr) == "pdf"){
        //definerer mappen filen ligger i
        $filepath = "files/".$file;

        //bruker header funksjoner som forteller hva som skjer, typen og setter et navn til filen
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');

        //leser til slutt filen som skal lastes ned
        readfile($filepath);

    }else{
        //dersom filen ikke er en pdf
        echo "Filtypen er ikke tillat: " . end($arr);
    }
}

?>

<p>Klikk her for å laste ned pdf-en</p>

<a href="oppgave4.php?file=oppgave4.pdf">Last ned</a>