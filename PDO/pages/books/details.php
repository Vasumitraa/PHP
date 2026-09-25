<?php

// Récupération de l'ID dans l'URL :$

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$livre = false;

if ($id !== false && $id !== null) {

    $sql = "SELECT  l.id,
                    l.titre,
                    l.annee,
                    l.prix,
                    l.isbn,
                    a.id AS auteur_id,
                    a.nom AS auteur_nom,
                    a.prenom AS auteur_prenom,
                    a.nationalite AS auteur_nationalite,
            
            FROM livre AS l
                JOIN auteur AS a ON l.auteur_id = a.id
            WHERE l.id = ?";
    
    $request = $pdo->prepare($sql);
    $request->execute([$id]);

    $livre = $request->fetch();
}

?>

<?php if (!$livre) : ?> <!-- à détailler-->

    <h1>Livre introuvable</h1>
    <p>Aucun livre ne correspond à l'id <?= $id ?>.</p>

<?php else : ?>

    <h1>Détails de <?= htmlspecialchars($livre["titre"]) ?></h1>

    <dl>
        <dt></dt>
        <dd></dd>
    </dl>

<?php endif ?>
