<?php

function findAll(PDO $connexion): array {
    $sql="SELECT*
          FROM books
          ORDER by created_at
          LIMIT 10;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, string $id): array {
    $sql = "SELECT *
            FROM books
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}