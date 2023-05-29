<?php
global $database;
if (!isset($_GET['id'])) redirect();

$id = $_GET['id'];
$item = $database->query("SELECT * FROM `catalog` WHERE id=" . $id)->fetch(2);
?>

<div class="item">
    <div class="container">
        <h2><?= $item['book_title']; ?></h2>
        <p class="item_author"><?= $item['book_author']; ?></p>
        <div class="item_items">
            <img src="<?= $item['book_image']; ?>" alt="">
            <div class="item_info">
                <div class="item_info_top">
                    <p><?= $item['book_genre']; ?></p>
                    <p>ISBN: <?= $item['book_isbn']; ?> <br>
                        Год издания: <?= $item['book_year']; ?> <br>
                        Язык: <?= $item['book_language']; ?> <br>
                        Возрастные ограничения: <?= $item['book_age']; ?></p>
                </div>
                <div class="item_info_middle">
                    <p><?= $item['book_description']; ?></p>
                </div>
                <div class="item_info_bottom">
                    <div class="item_info_bottom_buttons">
                        <a>Сохранить себе</a>
                        <a href="<?= $item['book_file']; ?>">Скачать</a>
                    </div>
                    <p><?= $item['book_neuter']; ?> @ <?= $item['book_collection']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>