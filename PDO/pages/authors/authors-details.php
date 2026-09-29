<?php

// 1. Récupération de l'ID dans l'URL :

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

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