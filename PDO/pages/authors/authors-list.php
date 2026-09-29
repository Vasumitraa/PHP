<?php

// 1. Faire une requête SQL :

$sql = "SELECT 
            a.id,
            a.nom
            a.prenom
        FROM 
            auteur AS a
        ORDER BY 
            nom ASC, prenom ASC";

// 2. Exécution de la requête (sans entrée utilisateur):

$authors = $pdo->query($sql)->fetchAll();

?>

<!-- Template -->

<h1>Liste des auteurs :</h1>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom complet</th>
            <th>Détails</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($authors as $a): ?>

            <tr>
                <td><?= htmlspecialchars($a["id"])?></td>
                <td><?= htmlspecialchars($a["nom"])?> <?= htmlspecialchars($a["prenom"])?></td>
                <td><a href="?page=author-details&amp;id=<?= $a["id"]?>"></a></td>
                <td><a href="?page=author-edit&amp;id=<?= $a["id"]?>"></a></td>
                <td><a href="?page=author-delete&amp;id=<?= $a["id"]?>"></a></td>
            </tr>

        <?php endforeach ?>

    </tbody>
</table>