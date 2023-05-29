<?php
session_start();

require_once('../database/Database.php');

global $database;

unset($_SESSION['errors']);
$_SESSION['errors'] = [];

if (isset($_POST)) {
    $login = $_POST['login'];
    $hash_password = md5($_POST['password']);

    $user = $database->query("SELECT * FROM `users` WHERE login = '$login'")->fetch(2);

    if (empty($user)) {
        $_SESSION['errors'][] = "Логин или пароль введён неверно";
    }

    if ($user['password'] !== $hash_password) {
        $_SESSION['errors'][] = "Логин или пароль введён не верно";
    }

    if (count($_SESSION['errors']) === 0) {
        $_SESSION['AUTH_ID'] = $user['id'];

        header("Location: /index.php");
        die();
    }
}
header('Location: /index.php?page=auth');
die();