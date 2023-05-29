<?php global $database;
session_start();
include('app/components/Connection.php'); ?>

<?php
unset($_SESSION['errors']);

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $state = $database->prepare("DELETE FROM `catalog` WHERE id = '$id'");
    $state->execute();
    echo "Товар $id успешно удален!";
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include('app/components/Meta.php'); ?>
    <title>Китап</title>
</head>

<body>
<?php include('app/components/Header.php');

if (isset($_GET['page'])) {

    switch ($_GET['page']) {
        case 'main':
            include('main.php');
            break;
        case 'about':
            include('about.php');
            break;
        case 'add':
            include('add.php');
            break;
        case 'admin':
            include('admin.php');
            break;
        case 'auth':
            include('auth.php');
            break;
        case 'catalog':
            include('catalog.php');
            break;
        case 'delete':
            include('delete.php');
            break;
        case 'edit':
            include('edit.php');
            break;
        case 'item':
            include('item.php');
            break;
        case 'reg':
            include('reg.php');
            break;
        default:
            http_response_code(404);
            include('404.php');
            break;
    }
} else {
    include('main.php');
}

include('app/components/FormErrors.php');

include('app/components/Footer.php'); ?>
</body>
</html>