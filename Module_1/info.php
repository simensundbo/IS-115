<?php

echo '<a href="index.php">Gå tilbake til startsiden</a><br><br>';

echo "<p>Grunnen til at phpinfo metoden er fin å vite om er fordi man finner alt av configurasjons informasjonen her. 
        De fleste inntillingene er forhåndssatt, men det er også mulig å endre på dem dersom man skulle trenge dette. 
        Innstillingen display_errors er satt til ON, og document_root er satt til C:/xampp/htdocs.
        Display_error gjør sånn at syntax errorer blir vist frem og document_root er start punktet til php serveren.</p>";

phpinfo();