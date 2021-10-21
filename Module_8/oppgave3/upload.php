<?php

include_once "../includes/db.inc.php";

//starter session
session_start();

if(isset($_POST["submit"]) and isset($_FILES["img"]) ){
  if($_FILES["img"]["error"] == 0){
    //henter bruker id
    $userId = $_SESSION["brukerid"];

    $img = $_FILES["img"];

    //print_r($img);

    $imgName = $_FILES["img"]["name"];
    $imgTempName = $_FILES["img"]["tmp_name"];
    $imgSize = $_FILES["img"]["size"];
    $imgType = $_FILES["img"]["type"];
    $imgError = $_FILES["img"]["error"];

    //spitter opp stringen for å kunne få ut file extension
    $imgExt = explode("/", $imgType);
    $imgActualExt = strtolower(end($imgExt));

    //de lovlige file extensions. Siden mange jpg bilder automatisk blir omgjort til jpeg valgte jeg å ta med den også
    $allowd = ["png" , "jpg", "jpeg"];

    //Sjekker filen opp i mot de lovlige
    if(in_array($imgActualExt, $allowd)){
      //sjekker bildestørrelsen. Størrelse blir oppgit i bytes.
      if($imgSize < 2000000){
        //setter sammen filnavnet ved bruk av brukerId som er pålogget og fil extension
        $fileName = $userId . "." . $imgActualExt;
        
        //definerer hvor filen skal lagres
        $fileDestination ="uploads/" . $fileName;

        move_uploaded_file($imgTempName, $fileDestination);
        //sender brukeren tilbake til hovedsiden med en success melding
        header("Location: welcome.php?success=Bilde ble lastet opp");

      }else{
        //sender brukeren tilbake til hovedsiden med en feil melding i url-en
        $error = "Bilde er for stort";
        header("Location: welcome.php?error=$error");
      }
    }else{
      //sender brukeren tilbake til hovedsiden med en feil melding i url-en
      $error = "Ikke tillat bilde format";
      header("Location: welcome.php?error=$error");
    }

    

  }else{
    //sender brukeren tilbake til hovedsiden med en feil melding i url-en
    $error = "En feil oppsto under opplastningen av bilde";
    header("Location: welcome.php?error=$error");
  }
    
}
