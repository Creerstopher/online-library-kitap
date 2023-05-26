<?php
function generateFilename($file)
{
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

    $filename = uniqid() . '.' . $extension;

    return $filename;
}

function uploadFile($file, $path)
{
    if ($file) {
        $filename = generateFilename($file);

        if (move_uploaded_file($file['tmp_name'], $path . '/' . $filename)) {
            return $path . '/' . $filename;
        }
    }
    return false;
}

function redirect($to = 'index', $prams = "")
{
    $prams = strlen($prams) > 0 ? '?' . $prams : '';

    $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . $prams;

    header("Location: $url");
    die();
}