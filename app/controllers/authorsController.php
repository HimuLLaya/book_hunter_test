<?php

namespace Controllers\AuthorsController;

use \PDO, \Models\AuthorsModel;

function indexAction(PDO $connexion)
{
    include_once '../app/models/authorsModel.php';
    $authors = AuthorsModel\findAll($connexion);

    global $content;
    ob_start();
    include '../app/views/authors/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, int $id){
    include_once '../app/models/authorsModel.php';
    $author = authorsModel\findOneById($connexion, $id);

    include_once '../app/models/booksModel.php';
    $books = \models\booksModel\findAllByAuthorId($connexion, $id);

    global $content;
    ob_start();
    include_once '../app/views/authors/show.php';
    $content = ob_get_clean();
}