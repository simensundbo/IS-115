<?php

if(isset($_POST["submit"])){

        //henter ut data fra formet
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $mailFrom = $_POST["email"];
        $msg = $_POST["msg"];
    

    //sjekker at de ikke er tomme
    if(!empty($firstname)| !empty($lastname) | !empty($mailFrom) | !empty($msg)){
        $mailTo = "Sim123@live.no";
        $subject = "Neo Ungdomsklubb";
        $headers = "From: $mailFrom";

        $txt = "Mail fra $firstname $lastname. \n\n" . $msg;

        //sender
        mail($mailTo, $subject, $txt, $headers);
        
        //
        header("Location: oppgave1.php?mail=succsess");

    }else{
       echo "ikke noe angitt data"; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Kontakt oss</title>
</head>

<body>
    <main class="contact">
        <div class="content">
            <h2>Kontakt oss!</h2>
            <p>Opplever du problemer? Hvis ja, eller om du bare lurer på noe kan du kontakte oss her</p>
        </div>
        <!-- valgte å kommentere den ut for denne oppgaven, men skal bruke den i prosjektet -->
        <!-- <div class="contactInfo">
            <div class="text">
                <h3>Adresse</h3>    
                <p>Test Vei 13,<br>Kristiansand<br>4630</p>
                <h3>Telefon</h3>
                <p>21 02 90 00</p>
                <h3>E-post</h3>
                <p>neoungdomsklubb@neo.com</p>
            </div>
        </div> -->
        <div class="contactForm">
            <form action="" method="post">
                <h2>Send melding</h2>
                <div class="inputBox">
                    <input type="text" name="fname" required>
                    <span>Fornavn</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="lname" required>
                    <span>Etternavn</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required=>
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="msg" required>
                    <span>Hva lurer du på...</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" value="Send">
                </div>
            </form>
        </div>
    </main>

    <a href="index.php">Tilbae til startsiden</a>
</body>

</html>