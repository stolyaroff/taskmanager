<?php
session_start();
if(empty($_SESSION['loggedUser'])) header('Location:/');//проверяем авторизацию пользователя, перенаправляем на главную страницу
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/bodySection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
