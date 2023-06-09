<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php echo $_SESSION["mail"] ?> è valida!
    </div>
    <a href="./index.php">Torna alla home</a>
</body>
</html>
<!-- Distruggo la sessione per rimuovere i dati -->
<!-- Cosa succederebbe altrimenti? -->
<?php session_destroy(); ?>