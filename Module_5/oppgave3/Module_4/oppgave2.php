<h1>Oppgave 2</h1>

<form action="oppgave2.php" method="post">
    <table>
        <h3>Registrer ett nytt medlem</h3>
        <tr>
            <th>Epost*:</th>
            <td><input type="email" name="epost" value=""></td>
        </tr>
        <tr>
            <th>Fornavn*:</th>
            <td><input type="text" name="fornavn" value=""></td>
        </tr>
        <tr>
            <th>Etternavn*:</th>
            <td><input type="text" name="etternavn" value=""></td>
        </tr>
        <tr>
            <th>Adresse*:</th>
            <td><input type="text" name="adresse" value=""></td>
        </tr>
        <tr>
            <th>Postnr*:</th>
            <td><input type="number" name="postnr" value=""></td>
        </tr>
        <tr>
            <th>Poststed:</th>
            <td><input type="text" name="poststed" value=""></td>
        </tr>
        <tr>
            <th>Mobilnr*:</th>
            <td><input type="number" name="mobilnr" value=""></td>
        </tr>
        <tr>
            <th>Fødselsdato*:</th>
            <td><input type="date" name="fødselsdato" value=""></td>
        </tr>
        <tr>
            <th>Kjønn</th>
            <td><select name="kjønn">
                <option value="Mann">Mann</option>
                <option value="Dame">Dame</option>
                <option value="Øsnker ikke å oppgi">Øsnker ikke å oppgi</option>
            </select></td>
        </tr>
        <tr>
            <th>Brukernavn*:</th>
            <td><input type="text" name="brukernavn"></td>
        </tr>
        <tr>
            <th>Passord*:</th>
            <td><input type="password" name="passord1"></td>
        </tr>
        <tr>
            <th>Gjenta passord*:</th>
            <td><input type="password" name="passord2"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Opprett bruker">
</form>


<?php

if(isset($_POST["submit"]))
{
    //henter ut verdiene fra form-en.
    $epost = $_POST["epost"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $adresse = $_POST["adresse"];
    $postnr = $_POST["postnr"];
    $poststed = $_POST["poststed"];
    $mobilnr = $_POST["mobilnr"];
    $fødselsdato = $_POST["fødselsdato"];
    $kjønn = $_POST["kjønn"];
    $bruker = $_POST["brukernavn"];
    $passord1 = $_POST["passord1"];
    $passord2 = $_POST["passord2"];


    //Sjekker om alle feltene er fylt inn.
    if(!$epost)
    {
        echo "Epost ble ikke fylt ut";
    }
    elseif(!$fornavn)
    {
        echo "Fornavn ble ikke fylt ut";
    }
    elseif(!$etternavn)
    {
        echo "Etternavn ble ikke fylt ut";
    }
    elseif(!$adresse)
    {
        echo "Adresse ble ikke fylt ut";
    }
    elseif(!$postnr)
    {
        echo "Post nummer ble ikke fylt ut";
    }
    elseif(!$poststed)
    {
        echo "Post sted ble ikke fylt ut";
    }
    elseif(!$fødselsdato)
    {
        echo "Fødselsdato ble ikke fylt ut";
    }
    elseif(!$bruker)
    {
        echo "Brukernavn ble ikke fult ut";
    }
    elseif(!$passord1)
    {
        echo "Passord ble ikke fylt ut";
    }
    elseif(!$passord2)
    {
        echo "Passord ble ikke fylt ut";
    }
    elseif($passord1 == $passord2)//sjekker at passordet er skrevet riktig. Dersom det er riktig lagers det en array utifra dataen.
    {
        //lager en Associative array
        $data = array(
            "Epost" => $epost,
            "Fornavn" => $fornavn,
            "Etternavn" => $etternavn,
            "Adresse" => $adresse,
            "Post nummer" => $postnr,
            "Post sted" => $poststed,
            "Mobil nummer" => $mobilnr,
            "Fødselsdato" => $fødselsdato,
            "Kjønn" => $kjønn,
            "Bruker Navn" => $bruker,
            "Passord1" => $passord1,
            "Passord2" => $passord2
        );
    
        // Printer ut arrayen
        print_r($data);
        echo "<br><br><br>";

        echo "Nytt medlem er registrert<br><br>";//lopper gjennom arrayen for å printe ut både key og value.
        foreach($data as $key => $value)
        {
            echo "$key: $value<br>";
        }
    }
    else //dersom passordene ikke stemmer.
    {
        echo "Passordene må være like";
    }

    

}

echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';
?>
