<?php
spl_autoload_register(function ($class_name) {
    include_once 'C:/Program Files/Ampps/www/Opdracht OOP/classes/' . $class_name . '.php';
});
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <style>
        body {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?
    $pikachu = new pikachu('Pikachu');
    echo "$pikachu->name heeft $pikachu->hitpoints HP over." . "<br/>";
    $charmeleon = new charmeleon('Charmeleon');
    echo "$charmeleon->name heeft $charmeleon->hitpoints HP over." . "<br/>";
    echo "</br>" . "Het aantal levende pokemons zijn: " . pokemon::getPopulation() .  "</br>";
    echo "<br/>";

    $pikachu->aanval($charmeleon, $pikachu->attack1);
    $charmeleon->aanval($pikachu, $charmeleon->attack2);

    $pikachu->aanval($charmeleon, $pikachu->attack2);
    $charmeleon->aanval($pikachu, $charmeleon->attack1);
    $charmeleon->aanval($pikachu, $charmeleon->attack1);



    // echo '</pre>';
    ?>
</body>

</html>