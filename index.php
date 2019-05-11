<?php
//items.json holds all of the UniqueNames of every marketable object
//This data will form the lists for the dropdowns
$item_json = file_get_contents('items.json');
$items = json_decode($item_json, true);

//Pulling arbitrary market information
//This can be used as template to do market queries with
$json_url = 'https://www.albion-online-data.com/api/v2/stats/prices/T4_2H_RAM_KEEPER?locations=caerleon';
$json = file_get_contents($json_url);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Albion App</title>
</head>

<body>
    <h1>Prices</h1>
    <p>json url: <?= $json_url ?></p>
    <p>T4 Grovekeeper prices: <?= $json ?></p>

    <ul>
        <?php foreach ($items as $item) : ?>
            <li>
                <h3><?= $item['UniqueName'] ?></h3>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>