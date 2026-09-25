<?php

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
            JOIN auteur AS a ON l.auteur_id = a.id";

?>

<h1>Détails du livre</h1>