<?php

if (isset($_GET['bookID'])) {
    include_once '../app/controllers/postsController.php';
    showAction($connexion, $_GET['bookID']);
} else {
    include_once '../app/controllers/postsController.php';
    indexAction($connexion);
}