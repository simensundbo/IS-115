<form action="oppgave3.php" method="get">
        <label>Finner ordet "is"</label><br>
        <input type="text" name="txt" value="Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise." style="width: 35%;"></input><br>
        <input type="submit" name="submit">
</form>
<hr>

<?php

//print_r viser informasjon om en variabel som er leselig for mennesker. 
//print_r($arr);

if(isset($_GET["submit"]))
{
    $input = $_GET["txt"];

    $arr = str_word_count($input, 1);

    foreach($arr as $ord){
        if($ord == "is")
        {
            @$i++;
        }
    }
    
    echo substr_count($input, "is");
    echo "<br>";

    echo $i . "<br>";
}




echo '<a href="index.php">Gå tilbake til startsiden</a>';
