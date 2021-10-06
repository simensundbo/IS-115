<?php
//starter en session
session_start();

//fjerner alle session variables
session_unset();

//fjerner sessionen
session_destroy();

//sender brukeren tilbake til hjemmesiden
header("Location: index.php");
?>
