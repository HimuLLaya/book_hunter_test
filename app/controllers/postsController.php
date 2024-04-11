<?php

function indexAction(PDO $connexion){
    include '../app/models/postsModel.php';
    $posts = findAll($connexion);

    GLOBAL $content;

    ob_start();
    include_once '../app/views/page/index.php';
    $content = ob_get_clean();

}

function showAction(PDO $connexion, string $id){
    include '../app/models/postsModel.php';
    $post = findOneById($connexion, $id);

    GLOBAL $content;

    ob_start();
    include '../app/views/page/show.php';
    $content = ob_get_clean();
}