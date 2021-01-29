<?php
/*
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra
ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60
*/

$matches = [
    [
        "squadra_casa" => "Olimpia Milano",
        "squadra_ospite" => "Cantù",
        "punti_casa" => 55,
        "punti_ospite" => 60
    ],
    [
        "squadra_casa" => "Pallacanestro Virtus Roma",
        "squadra_ospite" => "Aquila Basket Trento",
        "punti_casa" => 60,
        "punti_ospite" => 58
    ],
    [
        "squadra_casa" => "Treviso Basket",
        "squadra_ospite" => "New Basket Brindisi",
        "punti_casa" => 45,
        "punti_ospite" => 59
    ]
]; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
    <h2>Matches</h2>
    <p>
        <?php
            for ($i=0; $i < count($matches); $i++){
                $match = $matches[$i];
                echo $match["squadra_casa"] . ' - ' . $match["squadra_ospite"] . ' | ' . $match["punti_casa"] . ' - ' . $match["punti_ospite"] . '<br>';
            }
        ?>
    </p>
</body>
</html>