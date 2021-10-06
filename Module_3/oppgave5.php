<h1>Oppgave 5</h1>
<form action="oppgave5.php" method="get">
    <label for="rute">Rute nummer. Tall fra 1-64</label><br>
    <input type="number" name="number"><br>
    <input type="submit" name="submit">
</form>

<?php

//Matte formelen= 2**(n-1). Møsteret er 1,2,4,8,16,32. Kvadratroten av alle disse er 2.
function Rute($rute)
{
    $i = 2**($rute - 1);
    
    //echo number_format($i) . " <br><br>"; lettere å se hvilket tall man jobber m
    
    if($i > 1000000000 && $i < 1000000000000)//9 nuller milliard $i må være større enn milliard, men mindre enn en billion. Samme logikk for resten av elsif-ene.  
    {
        $x = number_format($i);

        $arr = explode(",", $x);

        array_splice($arr, 1, 0, "milliard(er)");
        array_splice($arr, 3, 0, "million(er)");
        array_splice($arr, 5, 0, "tusen");

        echo implode(" ", $arr);

    }
    elseif($i > 1000000000000 && $i < 1000000000000000)//12 nuller billion
    {

        $x = number_format($i);

        $arr = explode(",", $x);

        array_splice($arr, 1, 0, "billion(er)");
        array_splice($arr, 3, 0, "milliard(er)");
        array_splice($arr, 5, 0, "million(er)");
        array_splice($arr, 7, 0, "tusen");

        echo implode(" ", $arr);

        
    }
    elseif($i > 1000000000000000 && $i < 1000000000000000000)//15 nuller billiard
    {
        $x = number_format($i);

        $arr = explode(",", $x);

        array_splice($arr, 1, 0, "billiard(er)");
        array_splice($arr, 3, 0, "billion(er)");
        array_splice($arr, 5, 0, "milliard(er)");
        array_splice($arr, 7, 0, "million(er)");
        array_splice($arr, 9, 0, "tusen");

        echo implode(" ", $arr);

    }
    elseif($i > 1000000000000000000 && $i < 1000000000000000000000 )//18 nuller trillion
    {
        $x = number_format($i);

        $arr = explode(",", $x);

        array_splice($arr, 1, 0, "trillion(er)");
        array_splice($arr, 3, 0, "billiard(er)");
        array_splice($arr, 5, 0, "billion(er)");
        array_splice($arr, 7, 0, "milliard(er)");
        array_splice($arr, 9, 0, "million(er)");
        array_splice($arr, 11, 0, "tusen");

        echo implode(" ", $arr);
    }
    else
    {
        echo $i;
    }
}


//implode for å få en array til en string

if(isset($_GET["submit"]))
{
    $number = $_GET["number"];
    echo "Rute nummer: $number har ";
    Rute($number);
    echo " hvetekorn <br>";
    
}

echo "<br>" . '<a href="index.php">Gå tilbake til startsiden</a>';