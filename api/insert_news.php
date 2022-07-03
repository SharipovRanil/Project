<?php
    require_once('./Database.php');

    $file = upload_file($_FILES['file'], '../news');

    $query = $pdo->prepare("INSERT INTO `News`( `title`, `description`, `content`,  `file`) VALUES (?,?,?,?)");
    $query->execute(array(
        $_POST['title'],
        $_POST['description'],
        $_POST['content'],
        $file
    ));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    header('Location: ../admin.php');