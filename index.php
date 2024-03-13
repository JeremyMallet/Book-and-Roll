<?php
    require 'config.php';

    // controlleur de post
    if (!empty($_GET['post'])) {
        include("./private/post/{$_GET['post']}.php");
        die;
    }

    // controlleur de vues index.php?view=home ou index.php?view=events
    if(empty($_GET['view'])) {
        $view = 'home';
    }else{
        $view = $_GET['view'];
    }
    include('./private/view.php');

    /*
    $sql = 'SELECT id, titre, date, description FROM evenements';
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch()) {
        echo $row['titre'] . "<br>\n";
    }
    


    */




