<?php
    require_once('./Database.php');

    var_dump($_GET);

    if (!isset($_GET['id'])){
        header('Location: ../index.php');
    }

    $query = $pdo->prepare("DELETE FROM `News` WHERE `id_news`=?");
    $query->execute(array($_GET['id']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    header('Location: ../index.php');