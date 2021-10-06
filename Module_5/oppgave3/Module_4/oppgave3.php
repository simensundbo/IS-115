<?php
//Dummy data
$currentData = array(
    "Epost" => "test@test.no",
    "Fornavn" => "Simen",
    "Etternavn" => "Sundbø",
    "Adresse" => "Test 13C",
    "Post nummer" => 4631,
    "Post sted" => "Kristiansand S",
    "Mobil nummer" => 99421510,
    "Fødselsdato" => "1999-10-12",
    "Kjønn" => "Mann",
    "Bruker Navn" => "Sim123",
    "Passord" => "wasd"

);

//sjekker at formet blit utfylt
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
    $passord = $_POST["passord"];


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
    elseif(!$passord)
    {
        echo "Passord ble ikke fylt ut";
    }else
    {
        //lager en Associative array
        $newData = array(
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
            "Passord" => $passord
        );

        if($currentData == $newData)//Sjekker om brukeren har endret noen av feltene.
        {
            echo "Ingen endring ble gjort";
        }
        else
        {
            $currentData = array_replace($currentData, $newData);

            echo "Medlemsoppdatering: <br><br>";//lopper gjennom arrayen for å printe den ut.
            foreach($currentData as $key => $value)
            {
                echo "$key: $value<br>";
            }
        }
    }
}

?>

<form action="oppgave3.php" method="post">
    <table>
        <h3>Oppdater medlems infomasjon</h3>
        <tr>
            <th>Epost*:</th>
            <td><input type="email" name="epost" value="<?php print_r($currentData["Epost"])?> "></td>
        </tr>
        <tr>
            <th>Fornavn*:</th>
            <td><input type="text" name="fornavn" value="<?php print_r($currentData["Fornavn"])?>"></td>
        </tr>
        <tr>
            <th>Etternavn*:</th>
            <td><input type="text" name="etternavn" value="<?php print_r($currentData["Etternavn"])?>"></td>
        </tr>
        <tr>
            <th>Adresse*:</th>
            <td><input type="text" name="adresse" value="<?php print_r($currentData["Adresse"])?>"></td>
        </tr>
        <tr>
            <th>Postnr*:</th>
            <td><input type="number" name="postnr" value="<?php print_r($currentData["Post nummer"])?>"></td>
        </tr>
        <tr>
            <th>Poststed:</th>
            <td><input type="text" name="poststed" value="<?php print_r($currentData["Post sted"])?>"></td>
        </tr>
        <tr>
            <th>Mobilnr*:</th>
            <td><input type="number" name="mobilnr" value="<?php print_r($currentData["Mobil nummer"])?>"></td>
        </tr>
        <tr>
            <th>Fødselsdato*:</th>
            <td><input type="date" name="fødselsdato" value="<?php print_r($currentData["Fødselsdato"])?>"></td>
        </tr>
        <tr>
            <th>Kjønn</th>
            <td><select name="kjønn">
                </optgroup>
                    <optgroup label="Nå værende">
                    <option value="<?php print_r($currentData["Kjønn"])?>"><?php print_r($currentData["Kjønn"])?></option>
                </optgroup>
                    <optgroup label="Kjønn">
                    <option value="Mann">Mann</option>
                    <option value="Dame">Dame</option>
                <option value="Øsnker ikke å oppgi">Øsnker ikke å oppgi</option>
            </select></td>
        </tr>
        <tr>
            <th>Brukernavn*:</th>
            <td><input type="text" name="brukernavn" value="<?php print_r($currentData["Bruker Navn"])?>"></td>
        </tr>
        <tr>
            <th>Passord*:</th>
            <td><input type="password" name="passord" value="<?php print_r($currentData["Passord"])?>"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Oppdater bruker">
</form>


<?php


echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';
?>
