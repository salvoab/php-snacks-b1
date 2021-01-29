<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$access = '';
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$valid_mail = false;

// Se ci sono almeno una chiocciola ( @ ) e almeno un punto ( . ) nella mail
if(strpos($mail, '@') !== false && strpos($mail, '.') !== false){
    // E se la chiocciola ( @ ) è presente solo una volta [la prima occorrenza coincide con l'ultima]
    if(strpos($mail,'@') === strrpos($mail, '@')){
        $valid_mail = true;
    }
}

if(strlen($name)>3 && $valid_mail && is_numeric($age)){
    $access = "Accesso riuscito";
} 
else {
    $access = "Accesso negato";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h2><?php echo $access; ?></h2>
</body>
</html>