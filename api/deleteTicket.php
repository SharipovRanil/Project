<?php
    require_once('./Database.php');

    var_dump($_GET);

    if (!$user){
        header('Location: ./sign_in.php');
    }

    if (!isset($_GET['id'])){
        header('Location: ../account.php');
    }

    $query = $pdo->prepare("DELETE FROM `tickets` WHERE `id_ticket`=?");
    $query->execute(array($_GET['id']));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    header('Location: ../account.php');