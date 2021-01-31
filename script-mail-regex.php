<?php
    /*
    Scrivere uno script che prenda una mail da riga di comando e dica se la mail gmail o yahoo è valida o meno
    Le mail accettate sono del tipo: 
        qualcosa.nome@gmail.com
        qualcosa.nome@gmail.it
        qualcosa.nome@yahoo.com
        qualcosa.nome@yahoo.it

    dove:
    1. 'qualcosa' e 'nome' sono parole di almeno 2 caratteri
    2. 'qualcosa' e 'nome' devono iniziare con una lettera dell'alfabeto e possono contenere anche numeri
    3. 'qualcosa.' è opzionale.
    */

    $email = $argv[1];
    $pattern ="/^([a-zA-Z][a-zA-Z0-9]\w*\.)?([a-zA-Z][a-zA-Z0-9]\w*@)(gmail|yahoo)\.(com|it)$/i";
    if (preg_match($pattern, $email)){
        echo "Mail Valida";
    }
    else {
        echo "Mail NON valida";
    }
?>