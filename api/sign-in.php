<?php
    require_once('./Database.php');

  
    $passwdHash = hash('sha512',$_GET['password']);
    $query = $pdo->prepare("SELECT * FROM `Users` WHERE `login`=? and password=?");
    $query->execute(array(
        $_GET['login'],
        $passwdHash,
    ));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $us = $result[0];


    
    if (count($result)){
       $_SESSION['user'] = $us;
       header('Location: ../account.php');
    } else echo 'Неверные данные';