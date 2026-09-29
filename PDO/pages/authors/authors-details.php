<?php

// 1. Récupération de l'ID dans l'URL :

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

// Initialisation de l'auteur et de ses livres à false

$author = false;
$livres = false;

// 2. Récupération des données de l'auteur :

if ($id !== false && $id !== null) {

    $sql = "SELECT
                a.id,
                a.nom,
                a.prenom,
                a.nationalite
            FROM auteur AS a
            WHERE 
                a.id = ?";

    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);

    $author = $statement->fetch();

// 3. Récupération des livres de l'auteur : 

$sql = "SELECT
            l.id,
            l.titre,
        FROM
            livre l
        WHERE
            l.auteur_id = ?";

    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);

// Nous voulons récupérer TOUS les livres de l'auteur

    $livres = $statement->fetchAll();

}

?>

<!-- Template -->

<?php if (!$author) : ?>

    <h1>Auteur introuvable.</h1>

<?php else : ?>

    <h1><?= htmlspecialchars($author["nom"]) ?> <?= htmlspecialchars($author["prenom"]) ?></h1>

    <!-- dl>(dt+dd)*2 -->
    <dl>
        <dt>Nationalité :</dt>
        <dd>
            <?= htmlspecialchars($author["nationalite"]) ?></dd>
        <dt>Liste de ses livres :</dt>
        <dd>
            <?php if (count($livres) === 0) :?>
                <p>Aucun livre pour le moment.</p>
            <?php else : ?>
                <ul>
                <?php foreach ($livres as $l) : ?>
                  <li><a href="?page=book-details&amp;id=<?= $l["id"] ?>"><?= htmlspecialchars($l["titre"]) ?></a></li>  
                <?php endforeach; ?>
                </ul>
            <?php endif ?>
        </dd>
    </dl>
<?php endif ?>