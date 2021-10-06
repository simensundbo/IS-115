<h1>Oppgave 2</h1>
<?php

    //For loop som looper fra 0 til 9. Printer ut summen av tallene 0-9
    $sum = 0;
    $loop = "";
    for($i=0; $i<=9; $i++)
    {
        $sum = $sum + $i;
        $loop .= $i == 9 ?  "<br> Loop nummer $i. Ferdig med å telle! Summen ble $sum." : "Loop nummer $i. Summen er nå $sum. <br>"; // Bruker Ternary Operator for å spare linjer med kode. Kunne ha brukt en if statment også -> if($i == 9). 
        
    }

    echo $loop;

    
    echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';

?>