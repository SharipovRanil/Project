<?php
    require_once("./api/Database.php");

    $query = $pdo->prepare("SELECT * FROM `News` WHERE id_news=?");
    $query->execute(array($_GET['id']));
    $result = $query->fetch();

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- Кодировка файла -->
        <meta charset="utf-8" />

        <!-- Заголовок для сайта -->
        <title>AppMusic</title>
        
        <!-- Для нормального отображения -->
        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <!-- Подключил шрифты с помощью Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Rubik&display=swap" rel="stylesheet">
        <!-- Подключил css стили -->
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>

        <!-- Шапка сайта -->
        <?php
        require_once('./header.php');
     ?>
        
        <!-- Первый блок -->
        <section class="intro-section">
            <div class="container">
                <div class="intro__left">
                    <div class="title"><?= $result['title'] ;?></div>
                    <a href="./api/deleteNews.php?id=<?= $result['id_news'] ;?>" class="t-btn">
                        Удалить новость
                    </a>
                </div>
                <div class="intro__right">
                    <img src="./news/Unknown.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="intro-section">
            <div class="container">
               <p><?= $result['content'] ;?></p>
            </div>
        </section>

      
        
        <!-- Шестой блок - Контакты-->
        <section class="contacts-section intro-section" id="contacts">
            <div class="container">
                <div class="intro__left">
                    <div class="title">Филиалы<br> нашего зоопарка</div>
                    <div class="subtitle">Будем ждать Вас в гости каждый день <br> с 12:00 до 20:00, <br> работаем в выходные и праздники. </div>
                    <div class="t-btn">Построить маршрут</div>
                </div>
                <div class="intro__right">
                    <!-- Карта создана с помощью конструктора Яндекс - https://yandex.ru/map-constructor -->
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac2dbc6bf539b8d0a81f5ad197ffc62ac7a4dec5fc29b891e902cc0ce9c9cfb12&amp;source=constructor" width="500" height="380" frameborder="0"></iframe>
                </div>
            </div>
        </section>

        <!-- Футер сайта -->
        <footer class="footer">
            <div class="container">
                <a href="index.html" class="header__logo">
                    <img src="img/logo.svg" alt="">
                </a>
                <div class="header__menu">
                    <a href="#service" class="link">О нас</a>
                    <a href="#news" class="link">Новости</a>
                    <a href="#faq" class="link">FAQs</a>
                    <a href="#reviews" class="link">Персонал</a>
                    <a href="#contacts" class="link">Местоположение</a>
                </div>
            </div>
        </footer>

    </body>
</html>
