<?php

//disse kan bli endret til $_SESSION eller $_REQUEST i applikasjonen for å få dynamiske verdier
$user = "Ola Nordmann";
$city = "Kristiansand";

//Bruker FPDI
use setasign\Fpdi\Fpdi;

//importerer både FPDF og autoloaderen til FPDI
require_once "FPDF/fpdf.php";
require_once "FPDI/autoload.php";

//Lager ett nytt objekt av Fpdi
$pdf = new Fpdi();

//legger til en side og definerer målene på siden
$pdf->AddPage("P", "A4", 0);

//setter pdf-en som skal brukes
$pdf->setSourceFile("files/Innlevering 8_velkomstbrev.pdf");

//importerer en side fra en pdf
$page = $pdf->importPage(1);

//Tegner en importert side på den nye pdf en
$pdf->useTemplate($page);

//Setter Font
$pdf->SetFont("Arial","", 12);
//legger på tekst og plassering av teksten
$pdf->Text(37, 103, $user);
$pdf->Text(144, 103, $city . " " . date("d.m.y"));
//legger på bilde og plasseringen av bildet
$pdf->Image("img/dag_børge.jpg", 140 , 230 , 40 , 40, "JPG");

// "I" Sender brukeren videre til en side uten å laste ned dokumentet
// Dersom man laster ned den nye pdf-en vil navnet være "Velkommen.pdf"
$pdf->Output("I", "Velkommen.pdf");