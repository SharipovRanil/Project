<header class="header">
            <div class="container">
                <!-- Логотип в ссылке -->
                <a href="index.php" class="header__logo">
                    <img src="img/logo.svg" alt="">
                </a>
                <!-- Меню с ссылками на секции -->
                <div class="header__menu">
                    <a href="#service" class="link">О нас</a>
                    <a href="#news" class="link">Новости</a>
                    <a href="#faq" class="link">FAQs</a>
                    <a href="#reviews" class="link">Персонал</a>
                    <a href="#contacts" class="link">Местоположение</a>
                    <?php if(isset($user['role'])) :?>
                        <?php if($user['role'] == 1) :?>
                            <a href="./admin.php" class="link">Админ-панель</a>
                        <?php endif; ?>
                    <?php endif; ?>
        
                </div>
                <div class="">
                    <?php if(($user)) :?>
                        <a href="./account.php"><?= $user['name'] ;?></a>
                        <a  style="margin-left: 20px;" href="./api/leave_account.php">Выйти</a>
                    <?php else :?>
                        <a  href="./sign_in.php">Войти</a>
                    <?php endif; ?>
                  
                </div>
            </div>
 </header>