<?php

// var_dump(__DIR__);
// include __DIR__ . "/./functions.php";

include "./functions.php";

//Se è stata passata una mail, la convalido
if($_GET['mail']) {
    $mailCorrente = $_GET['mail'];
    $mailValida = checkMail($mailCorrente);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controllo mail</title>
    <style>
        body { background: #222; color: white; font-family: sans-serif; padding: 1rem; }
        * { box-sizing: border-box; padding: 0; margin: 0;}
        h1 { margin-bottom: 0.5rem }
        .is-valid { color: lightgreen; }
        .not-valid { color: crimson; }
    </style>
</head>
<body>

    <h1>Controllo Mail</h1>

    <form action="index.php" method="GET">
        <label for="mail">Mail da validare: </label>
        <input type="text" name="mail" placeholder="Inserisci la mail" >
        <button type="submit">Invia</button>
        <button type="reset">Cancella</button>
    </form>
    
</body>
</html>