<form action="oppgave5.php" method="post">
    <label>Genererer ett passord på 8 bokstaver og tall</label><br>
    <input type="submit" name="submit" value="Generer ett passord">
</form>

<?php


function Generate_Random_Password($length = 8) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $count = strlen($characters);
    $result = "";

    for ($i = 0;  $i < $length; $i++) {
        $index = rand(0, $count);
        $result .= substr($characters, $index, 1);
    }

    return $result;
}


if(isset($_POST["submit"]))
{
    echo Generate_Random_Password();
}

?>

<br><br>
<a href="index.php">Gå tilbake til startsiden</a>
