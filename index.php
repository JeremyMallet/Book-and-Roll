<?php
require './config.php'; // chargement de la configuration

require ROOT . 'private/db.php';                // connexion a la base de données
require ROOT . 'private/utils/FrontUtils.php';  // utilitaires de Front
require ROOT . 'private/class/evenement.php';   // class Evenement

// controlleur de post
if (!empty($_GET['post'])) {
    include("./private/post/{$_GET['post']}.php");
    die;
}

// controlleur de vues index.php?view=home ou index.php?view=events
if (empty($_GET['view'])) {
    $view = 'home';
} else {
    $view = $_GET['view'];
}
include('./private/view.php');
