<?php

global $database;
$catalog = $database->query("SELECT * FROM `catalog`")->fetchAll(2);

?>

<div class="new_books">
    <div class="container">
        <h2>новые книги</h2>
        <div class="nb_items">
            <div class="empty_block"></div>
            <div class="table">
                <table>
                    <?php foreach ($catalog as $item): ?>
                        <tr>
                            <td><a class="table_title"
                                   href="?page=item&id=<?= $item['id']; ?>"><?= $item['book_title']; ?></a></td>
                            <td class="table_genre"><?= $item['book_genre']; ?></td>
                            <td class="table_more"><img src="assets/img/icons/Huge-icon/interface/outline/plus.svg"
                                                        alt=""></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <a class="open_all-btn" href="?page=catalog">смотреть все</a>
            </div>
        </div>
    </div>
</div>
<div class="news">
    <div class="container">
        <h2>новости</h2>
        <div class="nb_items">
            <div class="empty_block"></div>
            <div class="table">
                <table>
                    <tr>
                        <td class="table_date">9 мая 2023г.</td>
                        <td class="table_news_title">Издательствам приходится тратить больше на продвижение новых книг
                        </td>
                        <td class="table_more"><img src="assets/img/icons/Huge-icon/interface/outline/plus.svg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="table_date">9 мая 2023г.</td>
                        <td class="table_news_title">Что почитать? Подборка книг для тех, кто скучает по «Играм
                            престолов», «Ведьмаку» и братьям Винчестерам
                        </td>
                        <td class="table_more"><img src="assets/img/icons/Huge-icon/interface/outline/plus.svg" alt="">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="mails">
    <div class="container">
        <div class="email_items">
            <h2>рассылка</h2>
            <marquee scrolldelay="60" truespeed class="marquee-border">читай, смотри, следи.</marquee>
            <div class="email-form">
                <div class="empty_block"></div>
                <div class="email_div_form"><p class="email_form_text">
                        Новости, новинки, предложения</p>
                    <form action="" method="post">
                        <input class="email_form_email" type="email" name="email" id="">
                        <input class="email_form_submit" type="submit" value="подписаться">
                    </form>
                </div>
            </div>
            <marquee scrolldelay="60" truespeed class="marquee">читай, смотри, следи.</marquee>
        </div>
    </div>
</div>
<div class="who">
    <div class="container">
        <a href="?page=about"><h2>кто мы?</h2></a>
        <div class="who_items">
            <div class="empty_block"></div>
            <p class="who_text"><span class="who_text_first">китап </span> - это независимая книжная онлайн-библиотека,
                предназначенная для всех любителей чтения. Мы собрали
                большую коллекцию книг различных жанров и направлений, чтобы вы могли выбирать из множества интересных
                произведений. У нас вы найдете как классические бестселлеры, так и новинки литературы, а также книги на
                иностранных языках. Наш сайт удобен в использовании, доступен 24/7 и поддерживает все устройства.
            </p>
        </div>
    </div>
</div>