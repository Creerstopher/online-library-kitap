<?php

session_start();

require_once('app/database/Database.php');

if (!isAdmin($_SESSION['AUTH_ID'])){
    header("Location: /index.php?page=тыкудазабрёлмальчик");
    die();
}

global $database;
$catalog = $database->query("SELECT * FROM `catalog`")->fetchAll(2);

?>

<div class="admin">
    <div class="container">
        <h2>админ-панель</h2>
        <div class="admin_books_items">
            <div class="filter empty_block">
                <h3>новые книги</h3>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="table_more">
                            <a href="?page=add">
                                <img src="assets/img/icons/Huge-icon/interface/outline/plus.svg" alt="">
                            </a>
                        </td>
                    </tr>
                    <?php foreach ($catalog as $book): ?>
                        <tr>
                            <td><a class="table_title"
                                   href="?page=item&id=<?= $book['id']; ?>"><?= $book['book_title']; ?></a>
                            </td>
                            <td class="table_genre"><?= $book['book_genre']; ?></td>
                            <td class="table_more">
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        <img src="assets/img/icons/Huge-icon/interface/outline/setting.svg" alt="">
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="?page=edit&id=<?= $book['id']; ?>">Редактировать</a>
                                        <a href="?page=delete&id=<?= $book['id']; ?>">Удалить</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <a class="open_all-btn" href="catalog.php">смотреть все</a>
            </div>
        </div>
        <div class="admin_news_items">
            <div class="filter empty_block">
                <h3>новости</h3>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="table_more"><img src="assets/img/icons/Huge-icon/interface/outline/plus.svg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="table_date">9 мая 2023г.</td>
                        <td class="table_news_title">Что почитать? Подборка книг для тех, кто скучает по «Играм
                            престолов», «Ведьмаку» и братьям Винчестерам
                        </td>
                        <td class="table_more"><img src="assets/img/icons/Huge-icon/interface/outline/setting.svg"
                                                    alt=""></td>
                    </tr>
                    <tr>
                        <td class="table_date">9 мая 2023г.</td>
                        <td class="table_news_title">Что почитать? Подборка книг для тех, кто скучает по «Играм
                            престолов», «Ведьмаку» и братьям Винчестерам
                        </td>
                        <td class="table_more"><img src="assets/img/icons/Huge-icon/interface/outline/setting.svg"
                                                    alt=""></td>
                    </tr>
                </table>
                <a class="open_all-btn" href="catalog.php">смотреть все</a>
            </div>
        </div>
        <div class="admin_users_items">
            <div class="filter empty_block">
                <h3>пользователи</h3>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="table_more"><img src="assets/img/icons/Huge-icon/interface/outline/plus.svg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="table_title">Карим</td>
                        <td class="table_genre">zagiduulin@vk.com</td>
                        <td class="table_more"><img src="assets/img/icons/Huge-icon/interface/outline/setting.svg"
                                                    alt=""></td>
                    </tr>
                    <tr>
                        <td class="table_title">Анатолий</td>
                        <td class="table_genre">vegasfetti@mail.ru</td>
                        <td class="table_more"><img src="assets/img/icons/Huge-icon/interface/outline/setting.svg"
                                                    alt=""></td>
                    </tr>
                </table>
                <a class="open_all-btn" href="catalog.php">смотреть все</a>
            </div>
        </div>
    </div>
</div>