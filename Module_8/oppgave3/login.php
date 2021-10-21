<?php
include_once '../includes/bootstrap.inc.php';
include_once '../includes/db.inc.php';

// starter session
session_start();


if(isset($_POST["submit"])){
    // sjekker at formet er fylt ut og henter verdiene
    $user = $_POST["uname"];
    $pwd = $_POST["pass1"];
    //Sjekker om brukernavnet er tomt og om brukernavet inneholde tilatte symboler
    if(empty($user)) {
        $user_err = "Brukernavnet kan ikke være tomt";
    }elseif(!preg_match('/^[a-zA-Z0-9 øæåØÆÅ]+$/', $user)){
        $user_err = "Brukernavnet kan kun inneholder bokstaver og tall";
    }else{
        //Forbreder spørringen
        $quey = $conn->prepare("select id, bruker_navn, bruker_passord from brukere where bruker_navn = ?");
        //Kobler parameterene i spøringen med verdiene hentet ut fra from-et.
        $quey->bind_param("s", $user);
        //utfører spørringen
        $quey->execute();
        //Henter resultatet
        $quey->store_result();
        
        //Sjekker om man får tilbake en rad med brukernavnet
        if($quey->num_rows == 1){
            //binder vareabler til select setningen
            $quey->bind_result($id, $username, $hashed_password);
            //henter ut resultatet
            $quey->fetch();
            //Sjekker hashed_password med passordet brukeren ga.
            if(password_verify($pwd, $hashed_password)){
                //setter session vareabler
                $_SESSION["pålogget"] = true;
                $_SESSION["brukerid"] = $id;
                $_SESSION["brukernavn"] = $username;
                //fører brukeren videre til hjemmesiden.
                header("Location: welcome.php");
            }else{
                // error melding
                $pass_err = "Brukernavnet eller passordet stemmer ikke. Prøv på nytt";
            }
        }else{
            // error melding
            $user_err = "Ingen bruker med navnet: $user";
        }
        //lukker spørringen
        $quey->close();
        //luker tilkoblingen til db
        $conn->close();
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>
<main class="w-50">
        <form action="login.php" method="post">
            <h1 class="display-3 mb-3">Logg på</h1>

            <div class="mb-2 form-floating">
                <input type="text" class="form-control" placeholder="User123" name="uname" required oninvalid="this.setCustomValidity('Fyll inn brukernavn')" oninput="this.setCustomValidity('')"/>
                <span class="invalide-feedback"> <?php echo isset($user_err) ? $user_err : null; ?> </span>
                <label>Brukernavn</label>
            </div>
            <div class="mb-2 form-floating">
                <input type="password" class="form-control" placeholder="Password" name="pass1" required oninvalid="this.setCustomValidity('Fyll inn et passord')" oninput="this.setCustomValidity('')">
                <span class="invalide-feedback"> <?php echo isset($pass_err) ? $pass_err : null; ?> </span>
                <label>Passord</label>
            </div>
            <button class="btn btn-lg btn-primary" type="submit" name="submit">Logg på</button>
            <button class="btn btn-lg btn-secondary" type="reset">Reset</button>
        </form>
        <p>Har du ikke bruker?</p>
        <a href="signup.php">Registrer deg her</a>
    </main>
</body>

</html>