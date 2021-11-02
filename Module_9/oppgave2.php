<?php

if (isset($_POST["submit"])) {

    $mailTo = $_POST["mail"];
    $subject = "Neo Ungdomsklubb";
    $headers[] = "From: simens@uia.no";
    $headers[] = "Content-type: text/html; charset=UTF-8";

    $txt = '
    <html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>

<body>

    <style>
        .main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .nav {
            position: relative;
            display: flex;
            flex-direction: row;

        }
        .container {
            display: flex;
            flex-direction: row;
        }

        .section {
            padding: 20px;
        }

        .img {
            width: 15%;
            height: 15%;
        }


    </style>


    <main class="main">
        <nav class="nav">

            <img class="img" src="https://aaseninfo.no/wp-content/uploads/2021/02/ungdomsklubb2.jpg" /></li>
            <h1 class="title">Neo Ungdomsklubb</h1>

        
        </nav>
        <hr>

        <div class="container">
            <div class="section">
                <h4>Nyhet 1</h4>
                <p>Årets turneringer</p>
            </div>

            <div class="section">
                <h4>Nyhet 2</h4>
                <p>Se alle våre aktiviteter her-></p>
                <a href="https://www.google.com/">Trykk her</a>
            </div>

            <div class="section">
                <h4>Nyhet 3</h4>
                <p>Er du medlem/ eller vil du bli?</p>
                <a href="https://www.google.com/">Trykk her</a>
            </div>

            <div class="section">
            <h4>Nyhet 4</h4>
            <p>Bli med på Mandagsgolf!</p>
            <a href="https://www.google.com/">Trykk her</a>
        </div>
        </div>

        <footer class="footer">
            <hr>
            <p>Copy right 2021</p>
            <p>Neo Ungdomsklubb</p>
            <p>Leder: Ola Nordmann</p>
        </footer>
    </main>
</body>

</html>
';

    mail($mailTo, $subject, $txt, implode("\r\n", $headers));
    header("Location: oppgave2.php?mail=succsess");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Nyhetsbrev</h1>

    <p>Vil du få med deg det nyeste fra Neo Ungdomsklubb?</p>
    <form action="" method="post">
        <label for="mail">E-mail</label>
        <input type="email" name="mail" placeholder="Email" required>
        <input type="submit" name="submit" value="Meld deg på">

    </form>

</body>

</html>