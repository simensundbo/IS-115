<h1>Oppgave 4</h1>
<form action="oppgave4.php" method="get">
    <label for="kommune">Kommune: </label>
    <input type="text" name="kommune"><br>
    <input type="submit" name="submit">
</form>

<?php
//Sørger for at brukeren fyller ut form-en på siden.
if(isset($_GET["submit"]))
{
    //Sørger for at innputten blir formatert riktig.
    @$kommune = ucwords(strtolower($_GET["kommune"])); 


    //Switch som responderer på de forskjellige case-ene.
    switch($kommune) 
    {
        case "Kristiansand":
            echo "$kommune ligger i Agder fylke";
            break;
        case "Lillesand":
            echo "$kommune ligger i Agder fylke";
            break;
        case "Birkenes":
            echo "$kommune ligger i Agder fylke";
            break;
        case "Harstad":
            echo "$kommune ligger i Troms og Finnmark fylke";
            break;
        case "Kvæfjord":
            echo "$kommune ligger i Troms og Finnmark fylke";
            break;
        case "Tromsø":
            echo "$kommune ligger i Troms og Finnmark fylke";
            break;
        case "Bergen":
            echo "$kommune ligger i Vestland fylke";
            break;
        case "Trondheim":
            echo "$kommune ligger i Møre og Romsdal fylke";
            break;
        case "Bodø":
            echo "$kommune ligger i Troms og Finnmark fylke";
            break;
        case "Alta":
                echo "$kommune ligger i Troms og Finnmark fylke";
                break;
            default:
                echo "Denne oppgitte kommunen er ikke lagt inn. Kommunen du søkte etter: $kommune";
            
            
    }
}



echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';