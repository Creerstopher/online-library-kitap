<?php
global $database;
$item = $database->query("SELECT * FROM `catalog`")->fetchAll(2);

if (isset($_POST['add'])) {
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

    $sql = "INSERT INTO `catalog`(`book_title`, `book_author`, `book_genre`, `book_isbn`, `book_year`, `book_description`, `book_language`, `book_age`, `book_file`, `book_image`, `book_neuter`, `book_collection`) 
            VALUES ('$book_title','$book_author','$book_genre','$book_isbn','$book_year','$book_description','$book_language','$book_age','$book_file','$book_image','$book_neuter','$book_collection')";

    $state = $database->prepare($sql);
    $state->execute();
}
?>

<div class="edit">
    <div class="container">
        <h2>добавление</h2>
        <div class="edit_items">
            <div class="empty_block"></div>
            <div class="edit_form">
                <form name="add" action="" method="post" enctype="multipart/form-data">
                    <div class="edit_form_column">
                        <input class="edit_form_text" type="text" name="book_title" placeholder="название" required>
                        <input class="edit_form_text" type="text" name="book_author" placeholder="автор" required>
                        <input class="edit_form_text" type="text" name="book_genre" placeholder="жанр" required>
                        <input class="edit_form_submit" type="submit" name="add" value="добавить">
                    </div>
                    <div class="edit_form_column">
                        <input class="edit_form_text" type="text" name="book_isbn" placeholder="isbn" required>
                        <input class="edit_form_text" type="text" name="book_year" placeholder="год" required>
                        <input class="edit_form_text" type="text" name="book_language" placeholder="язык" required>
                        <input class="edit_form_text" type="text" name="book_age" placeholder="воз. ограничение" required>
                        <textarea class="edit_form_text" autocomplete="off" name="book_description" placeholder="описание" required></textarea>
                    </div>
                    <div class="edit_form_column">
                        <label for="book_file">файл</label>
                        <input class="edit_form_text" type="file" name="book_file" placeholder="файл" required>
                        <label for="book_image">изображние</label>
                        <input class="edit_form_text" type="file" name="book_image" placeholder="изображение" required>
                        <input class="edit_form_text" type="text" name="book_neuter" placeholder="издательство"
                               required>
                        <input class="edit_form_text" type="text" name="book_collection" placeholder="коллекция">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<marquee style="margin-top: 130px;" scrolldelay="60" truespeed class="marquee-border">читай, смотри, следи.</marquee>