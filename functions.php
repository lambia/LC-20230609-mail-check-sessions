<?php

//Per una stringa fornita controllo la presenza di "@" e "."
//In base al risultato, reindirizzo verso pagine diverse
//Prima salvo l'indirizzo mail nella SESSION
function checkMail($mail) {
    
    session_start();
    $_SESSION["mail"] = $mail;

    if( strlen($mail)>=5 && str_contains($mail, "@") && str_contains($mail, ".") ) {
        header("Location: success.php");
    } else {
        header("Location: error.php");
    }
}

?>