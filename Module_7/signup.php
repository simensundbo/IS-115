<?php
include_once 'includes/bootstrap.inc.php';
include_once 'includes/db.inc.php';


if(isset($_POST["submit"])) {
    $user = $_POST["uname"];
    $pwd = $_POST["pass1"];
    $pwdRepeat = $_POST["pass2"];

    if(empty($user)) {
        $user_err = "Brukernavnet kan ikke være tomt";
    }elseif(!preg_match('/^[a-zA-Z0-9 øæå]+$/', $user)){
        $user_err = "Brukernavnet kan kun inneholder bokstaver og tall";
    }else{

        $quey = $conn->prepare("select * from brukere where bruker_navn = ?");

        $quey->bind_param("s", $user);
        $quey->execute();
        $quey->store_result();

        if($quey->num_rows == 1){
            $user_err = "Brukernavnet er alt tatt";
        }

        $quey->close();
    }

    if($pwd == $pwdRepeat){
        $quey = $conn->prepare("insert into brukere(bruker_navn, bruker_passord) values(?,?)");
        $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $quey->bind_param("ss", $user, $hashPwd);
        $quey->execute();
        $id = $quey->insert_id;

        $quey->close();
        header("Location: login.php");
    }else{
        $pass_err = "Passordene må være like";
    }
}



?>

<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <main class="w-50">
        <form action="signup.php" method="post">
            <h1 class="display-3 mb-3">Registrer deg her</h1>

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
            <div class="mb-2 form-floating">
                <input type="password" class="form-control" placeholder="Password" name="pass2" required oninvalid="this.setCustomValidity('Fyll inn et passord')" oninput="this.setCustomValidity('')">
                <label>Bekreft passord</label>
            </div>

            <button class="btn btn-lg btn-primary" type="submit" name="submit">Registrer</button>
            <button class="btn btn-lg btn-secondary" type="reset">Reset</button>
        </form>
        <p>Har du bruker?</p>
        <a href="login.php">Logg på her</a>
    </main>
</body>

</html>