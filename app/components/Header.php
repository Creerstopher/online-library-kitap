<?php include('../services/functions.php'); ?>

<header>
    <div class="container">
        <div class="header-items">
            <input type="checkbox" id="burger">
            <label for="burger"></label>
            <nav>
                <ul>
                    <?php if (auth()): ?>
                        <li><a href="?page=catalog">Каталог</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="?page=about">О нас</a></li>
                        <?php if (isAdmin($_SESSION['AUTH_ID'])): ?>
                            <li><a href="?page=admin">Админ-панель</a></li>
                        <?php endif; ?>
                        <li><a href="../services/functions.php">Выход</a></li>
                    <?php else: ?>
                        <li class="header-user"><a href="?page=auth">Вход</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="header_text">
                <p class="pretitle">живи, люби, читай</p>
                <a href="?page=main" class="title">КИТАП</a>
            </div>
        </div>
    </div>
</header>