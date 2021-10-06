<?php
include_once "includes/db.inc.php";

if (isset($_POST["submit"])) {
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

    
    //tom array som blir fylt dersom man fanger opp feil ved registreringen
    $errors = [];

    if($passord1 != $passord2){
        array_push($errors, "Passordene må være like");
    }

    if(empty($errors)){
        //Starter database kallet med en prepare metode.
        $result = $conn->prepare("INSERT INTO medlemmer (Fornavn, Etternavn, Epost, Mobilnr, Adresse, Postnr, Poststed, Fødselsdato, Kjønn, Brukernavn, Passord) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

        //Kobler parameterene i spøringen med verdiene hentet ut fra from-et.
        $result->bind_param("sssisisssss", $fornavn, $etternavn, $epost, $mobilnr, $adresse, $postnr, $poststed, $fødselsdato, $kjønn, $bruker, $passord1);
    
        //utfører spørringen.
        if ($result->execute()) {
            echo "Medlemmet er registrert i databasen.";
            //lukker tilkoblingen
            $conn->close();
        } else {
            echo "Noe gikk galt. Sjekk error: " . $conn->error;
        }
    }else{
        //Printer ut feilene dersom $errors ikke er tom.
        foreach($errors as $value){
            echo $value . "<br>";
        }
    }


}
?>

<form action="" method="post">
    <table>
        <h3>Registrer ett nytt medlem</h3>
        <tr>
            <th>Epost*:</th>
            <td><input type="email" name="epost" value="<?php if(isset($_POST["epost"])){echo $_POST["epost"];} ?> " required></td>
        </tr>
        <tr>
            <th>Fornavn*:</th>
            <td><input type="text" name="fornavn" value="<?php if(isset($_POST["fornavn"])){echo $_POST["fornavn"];} ?>" required></td>
        </tr>
        <tr>
            <th>Etternavn*:</th>
            <td><input type="text" name="etternavn" value="<?php if(isset($_POST["etternavn"])){echo $_POST["etternavn"];} ?>" required></td>
        </tr>
        <tr>
            <th>Adresse*:</th>
            <td><input type="text" name="adresse" value="<?php if(isset($_POST["adresse"])){echo $_POST["adresse"];} ?>" required></td>
        </tr>
        <tr>
            <th>Postnr*:</th>
            <td><input type="number" name="postnr" value="<?php if(isset($_POST["postnr"])){echo $_POST["postnr"];} ?>" required></td>
        </tr>
        <tr>
            <th>Poststed:</th>
            <td><input type="text" name="poststed" value="<?php if(isset($_POST["poststed"])){echo $_POST["poststed"];} ?>" required></td>
        </tr>
        <tr>
            <th>Mobilnr*:</th>
            <td><input type="number" name="mobilnr" value="<?php if(isset($_POST["mobilnr"])){echo $_POST["mobilnr"];} ?>" required></td>
        </tr>
        <tr>
            <th>Fødselsdato*:</th>
            <td><input type="date" name="fødselsdato" value="<?php if(isset($_POST["fødselsdato"])){echo $_POST["fødselsdato"];} ?>" required></td>
        </tr>
        <tr>
            <th>Kjønn</th>
            <td><select name="kjønn" required>
                    <option value="Mann">Mann</option>
                    <option value="Dame">Dame</option>
                    <option value="Øsnker ikke å oppgi">Øsnker ikke å oppgi</option>
                </select></td>
        </tr>
        <tr>
            <th>Brukernavn*:</th>
            <td><input type="text" name="brukernavn" value="<?php if(isset($_POST["brukernavn"])){echo $_POST["brukernavn"];} ?>" required></td>
        </tr>
        <tr>
            <th>Passord*:</th>
            <td><input type="password" name="passord1" required></td>
        </tr>
        <tr>
            <th>Gjenta passord*:</th>
            <td><input type="password" name="passord2" required></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Opprett bruker">
</form>

<br><br>
<a href="index.php">Gå tilbake til startsiden</a>