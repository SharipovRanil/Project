<?php
    require_once("./api/Database.php");

    $query = $pdo->prepare("SELECT * FROM `News`");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- Кодировка файла -->
        <meta charset="utf-8" />

        <!-- Заголовок для сайта -->
        <title>Zoo</title>
        
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
                    <div class="title">Посетите один <br> из самых прекрасных зоопарков Москвы</div>
                    <div class="subtitle">Спецпредложение: групповая эскурсия до 10 человек всего за 190 руб. с одного человека</div>
                    <a href="./ticket_form.php" class="t-btn">Купить билет</a>
                </div>
                <div class="intro__right">
                    <img src="img/2_workflow.svg" alt="">
                </div>
            </div>
        </section>

        
        <!-- Второй блок -->
        <section class="advantages-section" id="service">
            <div class="container">
                <div class="t-title">Наш зоопарк <br>существует с 1988 года</div>
                <img src="img/advantages-img.png" alt="" class="advantages-img">
                <div class="advantages__items">
                    <div class="item">
                        <div class="icon">
                            <img src="img/icons/advantage1.png" alt="">
                        </div>
                        <div class="text">
                            <div class="title">Большая территория</div>
                            <div class="subtitle">Большая территория зоопарка <br>и огромное множество вольеров</div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon">
                            <img src="img/icons/advantage2.png" alt="">
                        </div>
                        <div class="text">
                            <div class="title">Правильный уход</div>
                            <div class="subtitle">Правильный уход за животными располагает их к вам</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="img/icons/advantage3.png" alt="">
                        </div>
                        <div class="text">
                            <div class="title">Недорогие билеты</div>
                            <div class="subtitle">Стоимость посещение зоопарка <br>самая низкая в Москве</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Третий блок - Новости -->
        <section class="news-section" id="news">
            <div class="container">
                <div class="t-title">Новости и обновления</div>
                <div class="subtitle">Последние новости о жизни зоопарка, <br> графике посещений и новых животных</div>

                <div class="news__items" style="flex-wrap: wrap">
                    <!-- Одна запись в новостях -->
                  
                    <?php foreach($result as $news) :?>
                        <div class="item">
                        <div class="news-img">
                            <img src="./news/<?= $news['file'] ;?>" alt="">
                        </div>
                        <a href="./news.php?id=<?= $news['id_news'] ;?>" class="title">
                            <span><?= $news['title'] ;?></span>
                            <img src="img/icons/right.svg" alt="">
                        </a>
                        <div class="subtitle"><?= $news['description'] ;?></div>
                    </div>
                    <?php endforeach; ?>
               
                    <!-- Одна запись в новостях -->
                   
                    <!-- Одна запись в новостях -->
                   
                </div>
            </div>
        </section>

        
        <!-- Четвертый блок - Ответы на часто задаваемые вопросы -->
        <section class="faq-section" id="faq">
            <div class="container">
                <div class="t-title">Каталог услуг <br>нашего зоопарка</div>

                <div class="faq__items">
                    <!-- Один вопрос-->
                    <div class="item">
                        <div class="icon">
                            <img src="img/icons/advantage1.png" alt="">
                        </div>
                        <div class="text">
                            <div class="title">Экскурсия с бронированием лучших мест</div>
                            <div class="subtitle">Покажем лучшие места зоопарка за 2990 руб. </div>
                        </div>
                    </div>
                    <!-- Один вопрос-->
                    <div class="item">
                        <div class="icon">
                            <img src="img/icons/home.png" alt="">
                        </div>
                        <div class="text">
                            <div class="title">Экскурсия по вольерам</div>
                            <div class="subtitle">Проведём экскурсию внутри <br> вольеров животных за 1990 руб. </div>
                        </div>
                    </div>
                    <!-- Один вопрос-->
                    <div class="item">
                        <div class="icon">
                            <img src="img/icons/cart.png" alt="">
                        </div>
                        <div class="text">
                            <div class="title">Покупка некоторых животных</div>
                            <div class="subtitle">Предоставляем возможность покупки некоторых домашних животных (бенгальских котов и енотов)</div>
                        </div>
                    </div>
                    <!-- Один вопрос-->
                    <div class="item">
                        <div class="icon">
                            <img src="img/icons/externsion.png" alt="">
                        </div>
                        <div class="text">
                            <div class="title">Детская развивающая экскурсия</div>
                            <div class="subtitle">Экскурсия для самых маленьких <br> для расширения кругозора за 990 руб. </div>
                        </div>
                    </div>
                    <!-- Один вопрос-->
                    <div class="item">
                        <div class="icon">
                            <img src="img/icons/account.png" alt="">
                        </div>
                        <div class="text">
                            <div class="title">Групповая экскурсия </div>
                            <div class="subtitle">Групповая эскурсия до 10 чел. в группе за 590 руб. </div>
                        </div>
                    </div>
                    <!-- Один вопрос-->
                    <div class="item">
                        <div class="icon">
                            <img src="img/icons/advantage2.png" alt="">
                        </div>
                        <div class="text">
                            <div class="title">Текстовая эскурсия по зоопарку</div>
                            <div class="subtitle">Отправим буклет по почте с изображениями и описаниями зоопарка </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Пятый блок - Отзывы -->
        <section class="reviews-section" id="reviews">
            <div class="container">
                <div class="t-title">Наши <br> контакты </div>

                <div class="reviews__items">
                    <!-- Один отзыв-->
                    <div class="item">
                        <a href="#" class="social">
                            <img src="img/icons/twitter.svg" alt="">
                        </a>
                        <div class="head">
                            <img src="img/reviews/img1.png" alt="" class="author">
                            <div class="text">
                                <div class="title">Максим</div>
                                <div class="subtitle">Директор зоопарка</div>
                            </div>
                        </div>
                        <div class="subtitle">Спасибо за проявленный интерес к нашему зоопарку. Я работаю над ним почти каждый день, чтобы помогать и вам, и животным. </div>
                    </div>
                    <!-- Один отзыв-->
                    <div class="item">
                        <a href="#" class="social">
                            <img src="img/icons/twitter.svg" alt="">
                        </a>
                        <div class="head">
                            <img src="img/reviews/img2.png" alt="" class="author">
                            <div class="text">
                                <div class="title">Тимур </div>
                                <div class="subtitle">Директор по уходу за животными</div>
                            </div>
                        </div>
                        <div class="subtitle">Тимур занимается руководством отделов по уходу за животными: это ценный и опытный специалист по работе с животными. </div>
                    </div>
                    <!-- Один отзыв-->
                    <div class="item">
                        <a href="#" class="social">
                            <img src="img/icons/twitter.svg" alt="">
                        </a>
                        <div class="head">
                            <img src="img/reviews/img3.png" alt="" class="author">
                            <div class="text">
                                <div class="title">Анастасия</div>
                                <div class="subtitle">PR-специалист</div>
                            </div>
                        </div>
                        <div class="subtitle">Благодаря работе Анастасии вы узнали о нашем зоопарке, она занимается продвижением и информированием населения. </div>
                    </div>
                </div>
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
