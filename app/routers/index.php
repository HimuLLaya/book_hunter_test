<?php

use Controllers\BooksController,
    Controllers\CategoriesController,
    Controllers\AuthorsController;

// PATTERN: /?bookID=x
// CTRL: booksController
// ACTION: showAction
if (isset($_GET['bookID'])) :
    include_once '../app/controllers/booksController.php';
    BooksController\showAction($connexion, $_GET['bookID']);

// PATTERN: /?categoryID=x
// CTRL: categoriesController
// ACTION: showAction
elseif (isset($_GET['categoryID'])) :
    include_once '../app/controllers/categoriesController.php';
    CategoriesController\showAction($connexion, $_GET['categoryID']);

// PATTERN: /authors
// CTRL: authorsController
// ACTION: indexAction
elseif (isset($_GET['authors'])) :
    include_once '../app/controllers/authorsController.php';
    AuthorsController\indexAction($connexion);

// PATTERN: /books
// CTRL: booksController
// ACTION: indexAction
elseif (isset($_GET['books'])) :
    include_once '../app/controllers/booksController.php';
    BooksController\indexAction($connexion);

// PATTERN: /
// CTRL: booksController
// ACTION: indexAction
elseif (isset($_GET['authorID'])):
    include_once '../app/controllers/authorsController.php';
    authorsController\showAction($connexion, $_GET['authorID']);
else :
    include_once '../app/controllers/booksController.php';
    BooksController\indexAction($connexion);
endif;
