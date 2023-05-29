<?php

session_start();

unset($_SESSION['AUTH_ID']);

session_destroy();

header("Location: /index.php");
die();