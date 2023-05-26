<?php include('app/components/Connection.php'); ?>
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
            include('auth.html');
            break;
        case 'catalog':
            include('catalog.php');
            break;
        case 'delete':
            include('delete.html');
            break;
        case 'edit':
            include('edit.html');
            break;
        case 'item':
            include('item.php');
            break;
        case 'reg':
            include('reg.html');
            break;
        default:
            http_response_code(404);
            include('404.php');
            break;
    }
} else {
    include('main.php');
}

include('app/components/Footer.php'); ?>
</body>
</html>