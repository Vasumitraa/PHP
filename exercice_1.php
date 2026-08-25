<?php
// créer un tableau vide :
$entier = [];
// créer une boucle qui va afficher 50 nombres aléatoires dans le tableau :
for ($nombre = 0; $nombre < 50; $nombre++){
    $entier[$nombre] = rand (0,50);
}
print_r($entier)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($entier as $value) : ?>
    <p> <?= $value ?></p>
    <?php endforeach ?>
</body>
</html>