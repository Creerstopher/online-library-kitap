<?php session_start(); ?>

<div class="auth">
    <div class="container">
        <h2>вход</h2>
        <div class="auth_items">
            <div class="empty_block"></div>
            <div class="auth_div_form">
                <?php include('app/components/FormErrors.php'); ?>
                <form action="/app/action/signup.php" method="post" name="reg" class="auth_form">
                    <input class="form_login" type="text" name="name" placeholder="имя">
                    <input class="form_login" type="text" name="login" placeholder="логин">
                    <input class="form_password" type="password" name="password" placeholder="пароль">
                    <input class="form_done" name="reg" type="submit" value="зарегистрироваться">
                </form>
                <p>или</p>
                <a href="?page=auth">войти</a>
            </div>
        </div>
    </div>
</div>