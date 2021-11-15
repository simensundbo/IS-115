<?php
include_once "includes/bootstrap.inc.php";
include_once "includes/db.inc.php";

$result = $conn->query("SELECT medlemmer.fornavn, medlemmer.etternavn, interesser.navn, medlemmer.mobilnr 
                        FROM medlemmer JOIN interesser ON medlemmer.id = interesser.medlemmsId;");

if(isset($_POST["submit"])){
    $interest = $_POST["interests"];

    //Forbreder spørringen
    $query = $conn->prepare("SELECT medlemmer.fornavn, medlemmer.etternavn, interesser.navn, medlemmer.mobilnr 
                            FROM medlemmer JOIN interesser ON medlemmer.id = interesser.medlemmsId WHERE navn = ?;");
    //Kobler parameterene i spøringen med verdiene hentet ut fra from-et.
    $query->bind_param("s", $interest);
    //Utfører spørringen mot databasen
    $query->execute();
    //Henter resultatet fra et prepared statement
    $result = $query->get_result();


    //ent ut alle resultatene før man begynner spøringen
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Oppgave 5</title>
</head>
<body>
    <h1 class="display-2">Interesser</h1>

    <form action="" class="" method="post">
       
        <select name="interests">
        <option selected disabled><?php echo isset($_POST["interests"]) ? $_POST["interests"] : "Interesser"; ?></option>
        <option value="Frisbee">Frisbee</option>
        <option value="Tennis">Tennis</option>
        <option value="Gaming">Gaming</option>
        <option value="Trening">Trening</option>
        <option value="Løping">Løping</option>
        <option value="Lesing">Lesing</option>
        <option value="Fiske">Fiske</option>
        </select>
        
        <input type="submit" name="submit">
    </form>


    <h1 class="display-4">Medlemmer i klubben basert på interesser</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Fornavn</th>
                <th>Etternavn</th>
                <th>Interesse</th>
                <th>Mobil nummer</th>
            </tr>
        </thead>

        <?php
        /*Sjekker at formet er submitet
        Lager en assosiativ array med verdiene fra medlems tabellen.
        Looper gjennom verdiene og printer dem ut i tabellen. */
        
        while ($row = $result->fetch_assoc()) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $row["fornavn"]; ?></td>
                    <td><?php echo $row["etternavn"]; ?></td>
                    <td><?php echo $row["navn"]; ?></td>
                    <td><?php echo $row["mobilnr"]; ?></td>
                    
                </tr>
            </tbody>

        <?php
            };
        

        //lukker tilkoblingen til db
        $conn->close();
        ?>
    </table>
    <br><br>
    <a href="index.php">Gå tilbake til startsiden</a>
    
</body>
</html>