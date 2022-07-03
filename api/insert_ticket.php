<?php
    require_once('./Database.php');
    var_dump($_GET);

    if (!$user){
        header('Location: ../sign_in.php');
    }

    var_dump();
    $query = $pdo->prepare("INSERT INTO `tickets`( `id_user`, `guest_fio`, `ticket_date`) VALUES (?,?,?)");
    $query->execute(array(
        $user['id_user'],
        $_GET['fio'],
        formatDate($_GET['date'])
    ));
    header('Location: ../account.php');