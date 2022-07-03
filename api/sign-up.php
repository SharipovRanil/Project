<?php
    require_once('./Database.php');

  

    $query = $pdo->prepare("SELECT * FROM `Users` WHERE `login`=? and password=?");
    $query->execute(array(
        $_GET['login'],
        $_GET['password'],
    ));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);


    $passwdHash = hash('sha512',$_GET['password']);
 

    if (!count($result)){
        $query = $pdo->prepare("INSERT INTO `Users`( `login`, `password`, `name`, role) VALUES (?,?,?, 0)");
        $query->execute(array(
            $_GET['login'],
            $passwdHash,
            $_GET['name'],
        ));

        header('Location: ../sign_in.php');
    }
    else{
        echo 'Аккаунт с таким именем занят';
    }



