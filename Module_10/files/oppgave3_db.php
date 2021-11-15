<?php

$servername = "localhost";
$username = "Simen";
$password = "is115";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["id"];
$intId = intval($id);


$sql = "SELECT fornavn, etternavn, epost, mobilnr, adresse, postnr, poststed, fødselsdato, kjønn, betalt, medlemsdato FROM medlemmer where id = ?";

$query = $conn->prepare($sql);
$query->bind_param('i', $intId);
$query->execute();
$query->store_result();
$query->bind_result($fname, $lname, $email, $mobilenr, $adress, $zip_code, $post_office, $dob, $gender, $paid, $member_date);
$query->fetch();
$query->close();


echo "
<div style='border: 1px solid;'>
<p>Brukerprofil</p>
<p>Navn: $fname $lname</p>
<p>Mail: $email</p>
<p>Mobil nummer: $mobilenr</p>
<p>Post adresse: $adress $zip_code $post_office</p>
<p>Bursdag: $dob</p>
<p>Kjønn: $gender</p>
<p>Betalt: $paid</p>
<p>Medlem dato: $member_date</p>
</div>
";




