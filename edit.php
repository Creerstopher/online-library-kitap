<?php

global $database;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $item = $database->query("SELECT * FROM `catalog` WHERE id = '$id'")->fetch(2);
}

if (isset($_POST['update'])) {
    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];
    $book_genre = $_POST['book_genre'];
    $book_isbn = $_POST['book_isbn'];
    $book_year = $_POST['book_year'];
    $book_description = $_POST['book_description'];
    $book_language = $_POST['book_language'];
    $book_age = $_POST['book_age'];
    $book_neuter = $_POST['book_neuter'];
    $book_collection = $_POST['book_collection'];

    $book_file = uploadFile($_FILES['book_file'], 'public/files');
    $book_image = uploadFile($_FILES['book_image'], 'public/imgs');

    $sql = "UPDATE `catalog`
            SET `book_title`='$book_title',
                `book_author`='$book_author',
                `book_genre`='$book_genre',
                `book_description`='$book_description',
                `book_isbn`='$book_isbn',
                `book_year`='$book_year',
                `book_language`='$book_language',
                `book_age`='$book_age',
                `book_file`='$book_file',
                `book_image`='$book_image',
                `book_neuter`='$book_neuter',
                `book_collection`='$book_collection'
            WHERE id = " . $_GET['id'];

    $state = $database->prepare($sql);
    $state->execute();
}

?>


<div class="edit">
    <div class="container">
        <h2>редактирование</h2>
        <div class="edit_items">
            <div class="empty_block"></div>
            <div class="edit_form">
                <form name="edit" action="" method="post" enctype="multipart/form-data">
                    <div class="edit_form_column">
                        <input class="edit_form_text" type="text" value="<?= $item['book_title']; ?>" name="book_title" placeholder="название" required>
                        <input class="edit_form_text" type="text" value="<?= $item['book_author']; ?>" name="book_author" placeholder="автор" required>
                        <input class="edit_form_text" type="text" value="<?= $item['book_genre']; ?>" name="book_genre" placeholder="жанр" required>
                        <input class="edit_form_submit" type="submit" name="update" value="добавить">
                    </div>
                    <div class="edit_form_column">
                        <input class="edit_form_text" type="text" value="<?= $item['book_isbn']; ?>" name="book_isbn" placeholder="isbn" required>
                        <input class="edit_form_text" type="text" value="<?= $item['book_year']; ?>" name="book_year" placeholder="год" required>
                        <input class="edit_form_text" type="text" value="<?= $item['book_language']; ?>" name="book_language" placeholder="язык" required>
                        <input class="edit_form_text" type="text" value="<?= $item['book_age']; ?>" name="book_age" placeholder="воз. ограничение"
                               required>
                        <textarea class="edit_form_text" autocomplete="off" name="book_description" placeholder="описание" required><?= $item['book_description']; ?></textarea>
                    </div>
                    <div class="edit_form_column">
                        <input class="edit_form_text" type="file" value="<?= $item['book_file']; ?>" name="book_file" placeholder="файл" required>
                        <img style="width: 200px;" src="<?= $item['book_image']; ?>" alt="">
                        <input class="edit_form_text" type="file" value="<?= $item['book_image']; ?>" accept="image/*" name="book_image" placeholder="изображение" required>
                        <input class="edit_form_text" type="text" value="<?= $item['book_neuter']; ?>" name="book_neuter" placeholder="издательство"
                               required>
                        <input class="edit_form_text" type="text" value="<?= $item['book_collection']; ?>" name="book_collection" placeholder="коллекция">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<marquee style="margin-top: 130px;" scrolldelay="60" truespeed class="marquee-border">читай, смотри, следи.</marquee>