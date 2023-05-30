<?php
global $database;
session_start();
    require_once('../database/Database.php');

    unset($_SESSION['errors']);
    $_SESSION['errors'] = [];

    if (isset($_POST['reg'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
        $password = $_POST['password'];

        // Check if login already exists in database
        $query = "SELECT login FROM users WHERE login = :login LIMIT 1";
        $statement = $database->prepare($query);
        $statement->execute(['login' => $login]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $_SESSION['errors'][] = "Логин \"{$login}\" уже существует.";
        }

        // Validate password length
        if (strlen($password) < 6) {
            $_SESSION['errors'][] = "Пароль должен быть больше 5 символов";
        }

        // If errors exist, redirect to registration page with errors in session
        if (!empty($_SESSION['errors'])) {
            header("Location: /index.php?page=reg");
            exit();
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into database
        $query = "INSERT INTO `users` (name, login, password) VALUES (:name, :login, :password)";
        $statement = $database->prepare($query);
        $statement->execute(['name' => $name, 'login' => $login, 'password' => $hashed_password]);

        header("Location: /index.php");
        exit();
    } else {
        header("Location: /index.php?page=reg");
        exit();
    }
?>
