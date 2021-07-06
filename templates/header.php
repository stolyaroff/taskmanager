<?php
if (isset($_COOKIE['login'])) {
    setcookie('login', $_COOKIE['login'], time() + 60 * 60 * 24 * 30, "/");
}
include $_SERVER['DOCUMENT_ROOT'] . '/controller/menuFunc.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
        <div class="logo"><img src="/img/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clear">
            <?php showMenu($mainMenu, SORT_ASC, 'sort', $ulHeader) ?>
    </div>

