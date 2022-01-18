<!-- Ciao Ragazzi,
Esercizio PHP Snacks blocco 1
Cartella/Repo php-snacks-b1
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
A domani :faccia_leggermente_sorridente: -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>

<body>
    <?php
    $partite = [
        [
            'squadraCasa' => 'Trieste',
            'squadraTrasferta' => 'Reggiana',
            'puntiCasa' => 83,
            'puntiTrasferta' => 85
        ],
        [
            'squadraCasa' => 'Brescia',
            'squadraTrasferta' => 'Brescia',
            'puntiCasa' => 88,
            'puntiTrasferta' => 67
        ],
        [
            'squadraCasa' => 'Basket Napoli',
            'squadraTrasferta' => 'Fortitudo Bologna',
            'puntiCasa' => 86,
            'puntiTrasferta' => 89
        ],
        [
            'squadraCasa' => 'Pesaro',
            'squadraTrasferta' => 'Olimpia Milano',
            'puntiCasa' => 85,
            'puntiTrasferta' => 82
        ],
        [
            'squadraCasa' => 'Sassari',
            'squadraTrasferta' => 'Trento',
            'puntiCasa' => 88,
            'puntiTrasferta' => 80
        ],
        [
            'squadraCasa' => 'Varese',
            'squadraTrasferta' => 'Venezia',
            'puntiCasa' => 76,
            'puntiTrasferta' => 68
        ],
        [
            'squadraCasa' => 'Virtus Bologna',
            'squadraTrasferta' => 'Treviso',
            'puntiCasa' => 84,
            'puntiTrasferta' => 66
        ],
        [
            'squadraCasa' => 'Tortona',
            'squadraTrasferta' => 'Cremona',
            'puntiCasa' => 97,
            'puntiTrasferta' => 92
        ],
    ]
    ?>
    <h3>Risultati</h3>
    <ul>
        <?php for ($i = 0; $i < count($partite); $i++) { ?>
            <?php $match = $partite[$i]; ?>
            <li><?php echo $match['squadraCasa'] . ' - ' . $match['squadraTrasferta'] . ' | ' . $match['puntiCasa'] . ' - ' . $match['puntiTrasferta']; ?></li>
        <?php } ?>
    </ul>
</body>

</html>