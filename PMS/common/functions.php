<?php
session_start();

define('URL', 'http://' . $_SERVER['HTTP_HOST'] . '/PHP-Course/Labs%20code/pms-with-classes/PMS/');
// define('ROOT', $_SERVER['DOCUMENT_ROOT']);

function route($path = '')
{
    return URL . $path;
}


function redirect($path)
{
    header('Location: ' . route($path));
}

function success($value)
{
    $_SESSION['success'] = 'Category created successfully';
}
